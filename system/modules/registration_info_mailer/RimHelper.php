<?php 

/**
 * Class RimHelper
 * provide some methods to do some work on the DCA
 * 
 * PHP version 5
 * @copyright  Leo Unglaub 2011
 * @author     Leo Unglaub <leo@leo-unglaub.net>
 * @author     David Maack <david.maack@arcor.de>

 * @package    registration_info_mailer
 */
class RimHelper extends Backend
{
	/**
	 * clean the input, remove empty entries, trim the values, remove doublicates
	 *

	 * @param mixed $varValue
	 * @param DataContainer $dc
	 */
	public function save_sorter($varValue, DataContainer $dc)
	{
		// array_diff remove empty strings
		$arrBuffer = array_diff(array_unique(array_map(trim, explode(',', $varValue))), array(''));
		sort($arrBuffer);
		$strBuffer = implode(',', $arrBuffer);

		return $strBuffer;
	}

	/**
	 * format the result to a better readable version
	 *
	 * @param mixed $varValue
	 * @param DataContainer $dc
	 */
	public function load_sorter($varValue, DataContainer $dc)
	{
		return str_replace(',', ', ', $varValue);
	}
	
	/**
     * Load the default value from the settings, if no value is set
     * @param type $strValue
     * @param type $dc
     * @return type
     */
    public function setDefaultTemplate($strValue, $dc) {
        if ($strValue == 0 && $GLOBALS['TL_CONFIG'][$dc->field . '_default']) {
            return $GLOBALS['TL_CONFIG'][$dc->field . '_default'];
        }
        return $strValue;
    }    
    
	/**
	 * get all available mail tamplates
	 */
	public function getMailTeplates()
	{
		$arrReturn = array();
		$objTemplates = $this->Database->execute('SELECT * FROM `tl_mail_templates` ORDER BY category ASC , name ASC');
		
		while($objTemplates->next())
		{
			$arrReturn[$objTemplates->category][$objTemplates->id] = $objTemplates->name;
		}
		
		return $arrReturn;
	}
	
	/**
	 * helper function to uncheck the checkbox
	 */
    public function reset_rim_send_mail($strValue) {
        $strValue = 0;
        return $strValue;
    }
}
?>