<?php

/**
 * Contao Open Source CMS
 *
 * @copyright  Leo Unglaub 2011, MEN AT WORK 2014 
 * @package    registration_info_mailer
 * @license    GNU/LGPL 
 * @filesource
 */

$GLOBALS['TL_DCA']['tl_module']['palettes']['registration'] = str_replace('{email_legend:hide}', '{rim_legend:hide},rim_active,rim_act_active;{email_legend:hide}', $GLOBALS['TL_DCA']['tl_module']['palettes']['registration']);

// register the sub palettes, don't forget the palettes ;)
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'rim_active';
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'rim_act_active';

$GLOBALS['TL_DCA']['tl_module']['subpalettes']['rim_active'] = 'rim_mailtemplate,rim_do_syslog,rim_mailto';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['rim_act_active'] = 'rim_act_mailtemplate,rim_act_do_syslog,rim_act_mailto';

/**
 * Add all global rim_ fields
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['rim_active'] = array
(
    'label'             => &$GLOBALS['TL_LANG']['tl_module']['rim_active'],
    'exclude'           => true,
    'inputType'         => 'checkbox',
    'eval'              => array('submitOnChange'=>true, 'tl_style'=>'clr')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['rim_act_active'] = array
(
    'label'             => &$GLOBALS['TL_LANG']['tl_module']['rim_act_active'],
    'exclude'           => true,
    'inputType'         => 'checkbox',
    'eval'              => array('submitOnChange'=>true, 'tl_style'=>'clr')
);


/**
 * Add all fields for the registration notification
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['rim_mailtemplate'] = array
(
    'label'             => &$GLOBALS['TL_LANG']['tl_module']['rim_mailtemplate'],
    'exclude'           => true,
    'inputType'         => 'select',
    'options_callback'  => array('RimHelper', 'getMailTeplates'),
    'explanation'       => 'RimHelper',
    'eval'              => array('helpwizard'=>true, 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['rim_do_syslog'] = array
(
    'label'             => &$GLOBALS['TL_LANG']['tl_module']['rim_do_syslog'],
    'exclude'           => true,
    'inputType'         => 'checkbox',
    'eval'              => array ('tl_class'=>'w50 m12')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['rim_mailto'] = array
(
    'label'             => &$GLOBALS['TL_LANG']['tl_module']['rim_mailto'],
    'exclude'           => true,
    'inputType'         => 'textarea',
    'save_callback'     => array(array('RimHelper', 'save_sorter')),
    'load_callback'     => array(array('RimHelper', 'load_sorter')),
    'eval'              => array ('style'=>'height:60px;', 'tl_class'=>'clr', 'mandatory'=>true)
);


/**
 * Add all fields for the activation notification
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['rim_act_mailtemplate'] = array
(
    'label'             => &$GLOBALS['TL_LANG']['tl_module']['rim_act_mailtemplate'],
    'exclude'           => true,
    'inputType'         => 'select',
    'options_callback'  => array('RimHelper', 'getMailTeplates'),
    'explanation'       => 'RimHelper',
    'eval'              => array('helpwizard'=>true, 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['rim_act_do_syslog'] = array
(
    'label'             => &$GLOBALS['TL_LANG']['tl_module']['rim_act_do_syslog'],
    'exclude'           => true,
    'inputType'         => 'checkbox',
    'eval'              => array ('tl_class'=>'w50 m12')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['rim_act_mailto'] = array
(
    'label'             => &$GLOBALS['TL_LANG']['tl_module']['rim_act_mailto'],
    'exclude'           => true,
    'inputType'         => 'textarea',
    'save_callback'     => array(array('RimHelper', 'save_sorter')),
    'load_callback'     => array(array('RimHelper', 'load_sorter')),
    'eval'              => array ('style'=>'height:60px;', 'tl_class'=>'clr', 'mandatory'=>true)
);