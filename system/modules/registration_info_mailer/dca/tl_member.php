<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 * Copyright (C) 2005-2009 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at http://www.gnu.org/licenses/.
 *
 * PHP version 5
 * @copyright  MEN AT WORK 2013
 * @package    registration_info_mailer
 * @license    LGPL
 * @filesource
 */

$GLOBALS['TL_DCA']['tl_member']['palettes']['default'] = str_replace('login;', 'rim_send_mail,rim_activate_mailtemplate,rim_deactivate_mailtemplate,login;', $GLOBALS['TL_DCA']['tl_member']['palettes']['default']);

//callbacks
$GLOBALS['TL_DCA']['tl_member']['config']['onsubmit_callback'][] = array('registration_info_mailer', 'sendMemberMail');

/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_member']['fields']['rim_send_mail'] = array(
			'label'          => &$GLOBALS['TL_LANG']['tl_member']['rim_send_mail'],
			'exclude'        => true,
            'load_callback'  => array(array('RimHelper', 'reset_rim_send_mail')),
			'inputType'      => 'checkbox'	
);

$GLOBALS['TL_DCA']['tl_member']['fields']['rim_activate_mailtemplate'] = array(
			'label'				=> &$GLOBALS['TL_LANG']['tl_member']['rim_activate_mailtemplate'],
			'exclude'			=> true,
			'inputType'			=> 'select',
			'options_callback'	=> array('RimHelper', 'getMailTeplates'),
			'explanation'		=> 'RimHelper',
			'eval'				=> array('helpwizard'=>true, 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_member']['fields']['rim_deactivate_mailtemplate'] = array(
			'label'				=> &$GLOBALS['TL_LANG']['tl_member']['rim_deactivate_mailtemplate'],
			'exclude'			=> true,
			'inputType'			=> 'select',
			'options_callback'	=> array('RimHelper', 'getMailTeplates'),
			'explanation'		=> 'RimHelper',
			'eval'				=> array('helpwizard'=>true, 'tl_class'=>'w50')
);

?>