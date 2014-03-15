<?php

/**
 * Contao Open Source CMS
 *
 * @copyright  MEN AT WORK 2014 
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

// config.php
$GLOBALS['NOTIFICATION_CENTER']['NOTIFICATION_TYPE']['rim'] = array
(
    // Type
    'member_activation_mail'   => array
     (
        // Field in tl_nc_language
        'recipients'    => array
        (
            // Valid tokens
            'email' // The email address of the recipient
        )
    ),
    'member_registration_mail'   => array
     (
        // Field in tl_nc_language
        'recipients'    => array
        (
            // Valid tokens
            'email' // The email address of the recipient
        )
    ),
    'account_activation_mail'   => array
     (
        // Field in tl_nc_language
        'recipients'    => array
        (
            // Valid tokens
            'email' // The email address of the recipient
        )
    ),
    'account_deactivation_mail'   => array
     (
        // Field in tl_nc_language
        'recipients'    => array
        (
            // Valid tokens
            'email' // The email address of the recipient
        )
    )
);