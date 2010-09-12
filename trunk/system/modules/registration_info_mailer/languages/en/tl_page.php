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

/*
 * registration mails
 */
$GLOBALS['TL_LANG']['tl_page']['rim_active']				= array('activate registristration message', 'click here if you want to activate sending of registration information.');
$GLOBALS['TL_LANG']['tl_page']['rim_mail_from']				= array('sender adress', 'senders eMail adress (eg: noreply@foobar.com)');
$GLOBALS['TL_LANG']['tl_page']['rim_do_syslog']				= array('activate logging', 'activatin loggs all mails to syslog.');
$GLOBALS['TL_LANG']['tl_page']['rim_mail_from_name']		= array('senders name', 'senders name (eg: Dont Answer Me)');
$GLOBALS['TL_LANG']['tl_page']['rim_subject']				= array('subject', 'subject of the mail');
$GLOBALS['TL_LANG']['tl_page']['rim_mailto']				= array('recipient', 'place a list of recipients here. eg: office@foobar.com, private@foobar.com');
$GLOBALS['TL_LANG']['tl_page']['rim_mailto_cc']				= array('CC recipients', 'place here a list of CC-recipients. eg: office@foobar.com, private@foobar.com');
$GLOBALS['TL_LANG']['tl_page']['rim_mailto_bcc']			= array('BCC recipients', 'place here a list of BCC-recipients eg: office@foobar.com ,private@foobar.com');
$GLOBALS['TL_LANG']['tl_page']['rim_mailtext']				= array('mailtext', 'Place mailtext here. There are all standard-insert-tags and all userattributes avalible. These are via RIM:: Insert Tags avalible. See help wizzard for help.');

/*
 * activation mails
 */
$GLOBALS['TL_LANG']['tl_page']['rim_act_active']			= array('activate activity message', 'klick here if you want to activate sending of activity information.');
$GLOBALS['TL_LANG']['tl_page']['rim_act_mail_from']			= array('senders adress', 'senders eMail adress (eg: noreply@foobar.com)');
$GLOBALS['TL_LANG']['tl_page']['rim_act_do_syslog']			= array('activate logging', 'activatin loggs all mails to syslog.');
$GLOBALS['TL_LANG']['tl_page']['rim_act_mail_from_name'] 	= array('senders name', 'senders name (eg: Dont Answer Me)');
$GLOBALS['TL_LANG']['tl_page']['rim_act_subject']			= array('subject', 'subject of the mail');
$GLOBALS['TL_LANG']['tl_page']['rim_act_mailto']			= array('recipient', 'place a list of recipients here. eg: office@foobar.com, private@foobar.com');
$GLOBALS['TL_LANG']['tl_page']['rim_act_mailto_cc']			= array('CC recipients', 'place here a list of CC-recipients. eg: office@foobar.com ,private@foobar.com');
$GLOBALS['TL_LANG']['tl_page']['rim_act_mailto_bcc']		= array('BCC recipients', 'place here a list of BCC-recipients. eg: office@foobar.com, private@foobar.com');
$GLOBALS['TL_LANG']['tl_page']['rim_act_mailtext']			= array('mailtext', 'Place mailtext here. There are all standard-insert-tags avalible.');

/*
 * legend
 */
$GLOBALS['TL_LANG']['tl_page']['rim_legend']				= 'Registration Info Mailer';
?>