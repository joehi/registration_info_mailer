<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  LU-Hosting 2010
 * @author     Leo Unglaub <leo@leo-unglaub.net>
 * @package    registration_info_mailer
 * @license    LGPL
 * @filesource
 */


/**
* Class registration_info_mailer
* 
* @copyright	LU-Hosting 2010
* @author		Leo Unglaub <leo@leo-unglaub.net>
* @package		registration_info_mailer
* @license		LGPL
*/
class registration_info_mailer extends Frontend
{
	// the data from the registration form
	protected static $arrUserOptions = array();
	
	public function sendTheMail($intId, $arrData)
	{
		self::$arrUserOptions = $arrData;
		
		// get the ID's of all modules in tl_layout and the articles
		if (count($this->getRegistrationModuleId()))
			$arrIds = $this->getRegistrationModuleId();
		else
			$arrIds = array();
		
		$objModules = $this->Database->prepare('SELECT rim_mail_from,rim_mail_from_name,rim_subject,rim_mailto,rim_mailto_cc,rim_mailto_bcc,rim_mailtext FROM tl_module WHERE id IN (' . implode(', ', $arrIds) . ') AND type=\'registration\' AND rim_active=1')
									->limit(1)
									->executeUncached();
		
		$arrRimData = $objModules->fetchAssoc();
		
		if (count($arrRimData) == 0)
			return;
		
		// abbruchpunkt setzen wenn falscher hook
		$objRimMail = new Email();
		$objRimMail->from = $arrRimData['rim_mail_from'];
		$objRimMail->fromName = $arrRimData['rim_mail_from_name'];
		$objRimMail->subject = $this->replaceInsertTags($arrRimData['rim_subject']);
		$objRimMail->text = $this->replaceInsertTags($arrRimData['rim_mailtext']);
		
		// the CC Adress is not mandatory, so we need to check
		if (!empty($arrRimData['rim_mailto_cc']))
			$objRimMail->sendCc(explode(',', $arrRimData['rim_mailto_cc']));
		
		if (!empty($arrRimData['rim_mailto_bcc']))
			$objRimMail->sendBcc(explode(',', $arrRimData['rim_mailto_bcc']));
				
		$objRimMail->sendTo(explode(',', $arrRimData['rim_mailto']));		

		$this->log('Send registration info mail', 'sendTheMail', 'registration_info_mailer');
	}
	
	/**
	* replace the insert tags {{rim::%useroption%%}} with the $arrData from the registration
	* 
	* @param mixed $strTag
	* @return mixed
	*/
	public function replaceRegistrationVars($strTag)
	{
		if (count(self::$arrUserOptions) === 0)
			return false;
		
		$arrTemp = explode('::', $strTag);
		
		return (isset(self::$arrUserOptions[$arrTemp[1]])) ? self::$arrUserOptions[$arrTemp[1]] : false;
	}
	
	/**
	* return all module id's 
	* 
	*/
	public function getRegistrationModuleId()
	{
		$this->Import('Database');
		global $objPage;
				
		$objLayout = $this->Database->prepare('SELECT id,modules FROM tl_layout WHERE id=?')->limit(1)->execute($objPage->layout);

		// Fallback layout
		if ($objLayout->numRows < 1)
			$objLayout = $this->Database->prepare('SELECT id, modules FROM tl_layout WHERE fallback=?')->limit(1)->execute(1);
	
		// check if there is a layout and fetch modules
		($objLayout->numRows) ? $arrModules = deserialize($objLayout->modules) : $arrModules = array();

		// fetch all content element modules from this page.
		$objContent = $this->Database->prepare('SELECT module FROM tl_content WHERE pid IN (SELECT id FROM tl_article WHERE pid=?)')->execute($objPage->id);
			
		while($objContent->next())
			$arrModules[] = array('mod' => $objContent->module);

		if (count($arrModules))
		{
			$ids = array();
			foreach ($arrModules as $arrModule)
				$ids[] = $arrModule['mod'];
				
			return $ids;
		}
		
		return false;
	}
	
	/**
	* Generate the Helper wizard with the values from tl_member
	* 
	* @param mixed $strContent
	* @param mixed $strTemplate
	*/
	public function generateHelpWizard($strContent, $strTemplate)
	{          
		if ($strContent == 'explain')
		{
			$this->Import('Database');
			$this->loadLanguageFile('tl_member');
			$arrFields = $this->Database->listFields('tl_member');
			
			// clean the array, not nessesary but maybe i add a filter later
			foreach ($arrFields as $value)
				$arrFieldsClean[] =  $value['name'];
			
			foreach ($arrFieldsClean as $v)
				$GLOBALS['TL_LANG']['XPL']['rim_helper'][] = array('{{rim::' . $v . '}}', '<strong>' . $GLOBALS['TL_LANG']['tl_member'][$v][0] . '</strong> - ' . $GLOBALS['TL_LANG']['tl_member'][$v][1]);
		}
	}

}

?>
