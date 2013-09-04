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
$GLOBALS['TL_LANG']['tl_module']['rim_active']				= array('Registrierungebenachichtigung aktivieren', 'Klicken Sie diese Schaltfläche an wenn Sie das Senden von Registrierungsinfos aktivieren wollen.');
$GLOBALS['TL_LANG']['tl_module']['rim_mailtemplate']				= array('Mailtemplate', 'Wählen Sie hier das Template für die Mail aus. Im Template sind alle Standard-Insert-Tags verfügbar. Die Eigenschaften des Benutzers sind in den rim:: Insert Tags verfügbar (siehe Hilswizard). ');
$GLOBALS['TL_LANG']['tl_module']['rim_do_syslog']				= array('Logging aktivieren', 'Durch Aktivieren dieser Option werden alle verschickten E-Mails im Systemlog vermerkt.');
$GLOBALS['TL_LANG']['tl_module']['rim_mailto']				= array('Empfänger', 'Hier können Sie eine Liste beliebig vieler Empfänger der Benachichtigung angeben. BSP: office@foobar.com, private@foobar.com');

/*
 * activation mails
 */
$GLOBALS['TL_LANG']['tl_module']['rim_act_active']			= array('Aktivierungsbenachichtigung aktivieren', 'Klicken Sie diese Schaltfläche an wenn Sie das Senden von Aktivierungsinformationen aktivieren wollen.');
$GLOBALS['TL_LANG']['tl_module']['rim_act_mailtemplate']				= array('Mailtemplate', 'Wählen Sie hier das Template für die Mail aus. Im Template sind alle Standard-Insert-Tags verfügbar. Die Eigenschaften des Benutzers sind in den rim:: Insert Tags verfügbar (siehe Hilswizard). ');
$GLOBALS['TL_LANG']['tl_module']['rim_act_do_syslog']			= array('Logging aktivieren', 'Durch Aktivieren dieser Option werden alle verschickten E-Mails im Systemlog vermerkt.');
$GLOBALS['TL_LANG']['tl_module']['rim_act_mailto']			= array('Empfänger', 'Hier können Sie eine Liste beliebig vieler Empfänger der Benachichtigung angeben. BSP: office@foobar.com, private@foobar.com');

/*
 * legend
 */
$GLOBALS['TL_LANG']['tl_module']['rim_legend']				= 'Registration Info Mailer';
?>