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

$GLOBALS['TL_DCA']['tl_module']['palettes']['registration'] = str_replace('{email_legend:hide}', '{rim_legend:hide},rim_active,rim_act_active;{email_legend:hide}', $GLOBALS['TL_DCA']['tl_module']['palettes']['registration']);

// register the sub palettes, don't forget the palettes ;)
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'rim_active';
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'rim_act_active';

$GLOBALS['TL_DCA']['tl_module']['subpalettes']['rim_active'] = 'rim_mail_from,rim_do_syslog,rim_mail_from_name,rim_subject,rim_mailto,rim_mailto_cc,rim_mailto_bcc,rim_mailtext';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['rim_act_active'] = 'rim_act_mail_from,rim_act_do_syslog,rim_act_mail_from_name,rim_act_subject,rim_act_mailto,rim_act_mailto_cc,rim_act_mailto_bcc,rim_act_mailtext';

/**
 * Add all global rim_ fields
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['rim_active'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['rim_active'],
	'exclude'		=> true,
	'inputType'		=> 'checkbox',
	'eval'			=> array('submitOnChange'=>true, 'tl_style'=>'clr')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['rim_act_active'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['rim_act_active'],
	'exclude'		=> true,
	'inputType'		=> 'checkbox',
	'eval'			=> array('submitOnChange'=>true, 'tl_style'=>'clr')
);


/**
 * Add all fields for the registration notification
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['rim_do_syslog'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['rim_do_syslog'],
	'exclude'		=> true,
	'inputType'		=> 'checkbox',
	'eval'			=> array ('tl_class' => 'w50')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['rim_mailto'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['rim_mailto'],
	'exclude'		=> true,
	'inputType'		=> 'textarea',
	'save_callback'	=> array(array('rim_helper', 'save_sorter')),
	'load_callback'	=> array(array('rim_helper', 'load_sorter')),
	'eval'			=> array ('style' => 'height:60px;', 'tl_class' => 'clr', 'mandatory' => true)
);

$GLOBALS['TL_DCA']['tl_module']['fields']['rim_mailto_cc'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['rim_mailto_cc'],
	'exclude'		=> true,
	'inputType'		=> 'textarea',
	'save_callback'	=> array(array('rim_helper', 'save_sorter')),
	'load_callback'	=> array(array('rim_helper', 'load_sorter')),
	'eval'			=> array ('style' => 'height:60px;')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['rim_mailto_bcc'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['rim_mailto_bcc'],
   	'exclude'		=> true,
	'inputType'		=> 'textarea',
	'save_callback'	=> array(array('rim_helper', 'save_sorter')),
	'load_callback'	=> array(array('rim_helper', 'load_sorter')),
	'eval'			=> array ('style' => 'height:60px;')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['rim_mail_from'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['rim_mail_from'],
	'exclude'		=> true,
	'inputType'		=> 'text',
	'eval'			=> array('tl_class' => 'w50', 'maxlength' => 255, 'rgxp' => 'email', 'mandatory' => true)
);

$GLOBALS['TL_DCA']['tl_module']['fields']['rim_mail_from_name'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['rim_mail_from_name'],
	'exclude'		=> true,
	'inputType'		=> 'text',
	'eval'			=> array('tl_class'=>'w50', 'maxlength' => 255, 'mandatory' => true)
);

$GLOBALS['TL_DCA']['tl_module']['fields']['rim_subject'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['rim_subject'],
	'exclude'		=> true,
	'inputType'		=> 'text',
	'eval'			=> array('tl_class'=>'w50', 'maxlength' => 255, 'mandatory' => true)
);

$GLOBALS['TL_DCA']['tl_module']['fields']['rim_mailtext'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['rim_mailtext'],
   	'exclude'		=> true,
	'inputType'		=> 'textarea',
	'explanation'	=> 'rim_helper',
	'eval'			=> array('helpwizard' => true, 'mandatory' => true)
);


/**
 * Add all fields for the activation notification
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['rim_act_do_syslog'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['rim_act_do_syslog'],
	'exclude'		=> true,
	'inputType'		=> 'checkbox',
	'eval'			=> array ('tl_class' => 'w50 clr')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['rim_act_mailto'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['rim_act_mailto'],
	'exclude'		=> true,
	'inputType'		=> 'textarea',
	'save_callback'	=> array(array('rim_helper', 'save_sorter')),
	'load_callback'	=> array(array('rim_helper', 'load_sorter')),
	'eval'			=> array ('style' => 'height:60px;', 'tl_class' => 'clr', 'mandatory' => true)
);

$GLOBALS['TL_DCA']['tl_module']['fields']['rim_act_mailto_cc'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['rim_act_mailto_cc'],
	'exclude'		=> true,
	'inputType'		=> 'textarea',
	'save_callback'	=> array(array('rim_helper', 'save_sorter')),
	'load_callback'	=> array(array('rim_helper', 'load_sorter')),
	'eval'			=> array ('style' => 'height:60px;')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['rim_act_mailto_bcc'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['rim_act_mailto_bcc'],
   	'exclude'		=> true,
	'inputType'		=> 'textarea',
	'save_callback'	=> array(array('rim_helper', 'save_sorter')),
	'load_callback'	=> array(array('rim_helper', 'load_sorter')),
	'eval'			=> array ('style' => 'height:60px;')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['rim_act_mail_from'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['rim_act_mail_from'],
	'exclude'		=> true,
	'inputType'		=> 'text',
	'eval'			=> array('tl_class' => 'w50', 'maxlength' => 255, 'rgxp' => 'email', 'mandatory' => true)
);

$GLOBALS['TL_DCA']['tl_module']['fields']['rim_act_mail_from_name'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['rim_act_mail_from_name'],
	'exclude'		=> true,
	'inputType'		=> 'text',
	'eval'			=> array('tl_class' => 'w50', 'maxlength' => 255, 'mandatory' => true)
);

$GLOBALS['TL_DCA']['tl_module']['fields']['rim_act_subject'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['rim_act_subject'],
	'exclude'		=> true,
	'inputType'		=> 'text',
	'eval'			=> array('tl_class' => 'w50', 'maxlength' => 255, 'mandatory' => true)
);

$GLOBALS['TL_DCA']['tl_module']['fields']['rim_act_mailtext'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_module']['rim_act_mailtext'],
   	'exclude'		=> true,
	'inputType'		=> 'textarea',
	'explanation'	=> 'rim_helper',
	'eval'			=> array('mandatory' => true)
);


/**
 * Class rim_helper: provide some methods to do some work on the DCA
 * PHP version 5
 * @copyright  LU-Hosting 2010
 * @author     Leo Unglaub <leo@leo-unglaub.net>
 * @package    registration_info_mailer
 */
class rim_helper extends Frontend
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
}
?>