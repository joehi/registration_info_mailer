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
	'registration_info_mailer' => 'system/modules/registration_info_mailer/registration_info_mailer.php',
	'RimHelper'                => 'system/modules/registration_info_mailer/RimHelper.php',
));
