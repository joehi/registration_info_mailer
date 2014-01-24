<?php

/**
 * Contao Open Source CMS
 *
 * @copyright  Leo Unglaub 2011, MEN AT WORK 2014 
 * @package    registration_info_mailer
 * @license    GNU/LGPL 
 * @filesource
 */

/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['createNewUser'][]     = array('registration_info_mailer', 'sendRegistrationMail');
$GLOBALS['TL_HOOKS']['activateAccount'][]   = array('registration_info_mailer', 'sendActivationMail');
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('registration_info_mailer', 'replaceRimInsertTags');
$GLOBALS['TL_HOOKS']['loadLanguageFile'][]  = array('registration_info_mailer', 'generateHelpWizard');