<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package Registration_info_mailer
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    'RegistrationInfoMailer\Handler' => 'system/modules/registration_info_mailer/src/Handler.php',
    'RegistrationInfoMailer\Helper'  => 'system/modules/registration_info_mailer/src/Helper.php',
));
