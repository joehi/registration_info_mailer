<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
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
 */

$GLOBALS['TL_LANG']['tl_module']['rim_active']			= array('Aktivieren', 'Klicken Sie diese Schaltfläche an wenn Sie das Senden von Registrierungsinfos aktivieren wollen.');
$GLOBALS['TL_LANG']['tl_module']['rim_mail_from']		= array('Absenderadresse', 'E-Mail Adresse des Absenders (BSP: noreply@foobar.com)');
$GLOBALS['TL_LANG']['tl_module']['rim_mail_from_name'] 	= array('Name des Absenders', 'Name des Absenders (BSP: Dont Answer Me)');
$GLOBALS['TL_LANG']['tl_module']['rim_subject'] 		= array('Betreff', 'Betreff des Info-Mails');
$GLOBALS['TL_LANG']['tl_module']['rim_mailto']			= array('Empfänger', 'Hier können Sie eine Liste beliebig vieler Empfänger der Benachichtigung angeben. BSP: office@foobar.com,private@foobar.com');
$GLOBALS['TL_LANG']['tl_module']['rim_mailto_cc']		= array('CC Empfänger', 'Hier können Sie eine Liste beliebig vieler CC-Empfänger angeben. BSP: office@foobar.com,private@foobar.com');
$GLOBALS['TL_LANG']['tl_module']['rim_mailto_bcc']		= array('BCC Empfänger', 'Hier können Sie eine Liste beliebig vieler BCC-Empfänger angeben. BSP: office@foobar.com,private@foobar.com');
$GLOBALS['TL_LANG']['tl_module']['rim_mailtext']		= array('Mailtext', 'Dieser Text wird per E-Mail verschickt. Es sind alle Standard-Insert-Tags verfügbar und alle verfügbaren Usereigenschaften. Siehe dazu den Hilfe Wizard.');

$GLOBALS['TL_LANG']['tl_module']['rim_legend']			= 'Registration Info Mailer';
?>