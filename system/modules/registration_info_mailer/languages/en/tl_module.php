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
 * @copyright  Leo Unglaub 2011
 * @author     Leo Unglaub <leo@leo-unglaub.net>
 * @author     David Maack <david.maack@arcor.de>
 * @package    registration_info_mailer
 * @license    LGPL
 * @filesource
 */

/*
 * registration mails
 */
$GLOBALS['TL_LANG']['tl_module']['rim_active']				= array('activate registristration message', 'click here if you want to activate sending of registration information.');
$GLOBALS['TL_LANG']['tl_module']['rim_mailtemplate']				= array('mailtemplate', 'please choose the template for this mail. There are all standard-insert-tags available. All user attributes are avalible via rim:: insert tage. See the help wizzard for al list and examples.');
$GLOBALS['TL_LANG']['tl_module']['rim_do_syslog']				= array('activate logging', 'activatin loggs all mails to syslog.');
$GLOBALS['TL_LANG']['tl_module']['rim_mailto']				= array('recipient', 'place a list of recipients here. eg: office@foobar.com, private@foobar.com');

/*
 * activation mails
 */
$GLOBALS['TL_LANG']['tl_module']['rim_act_active']			= array('activate activity message', 'klick here if you want to activate sending of activity information.');
$GLOBALS['TL_LANG']['tl_module']['rim_act_mailtemplate']				= array('mailtemplate', 'please choose the template for this mail. There are all standard-insert-tags available. All user attributes are avalible via rim:: insert tage. See the help wizzard for al list and examples.');
$GLOBALS['TL_LANG']['tl_module']['rim_act_do_syslog']			= array('activate logging', 'activatin loggs all mails to syslog.');
$GLOBALS['TL_LANG']['tl_module']['rim_act_mailto']			= array('recipient', 'place a list of recipients here. eg: office@foobar.com, private@foobar.com');

/*
 * legend
 */
$GLOBALS['TL_LANG']['tl_module']['rim_legend']				= 'Registration Info Mailer';
?>