<?php

/**
 * Contao Open Source CMS
 *
 * @copyright  Leo Unglaub 2011, MEN AT WORK 2014 
 * @package    registration_info_mailer
 * @license    GNU/LGPL 
 * @filesource
 */

/*
 * registration mails
 */
$GLOBALS['TL_LANG']['tl_module']['rim_active']              = array('Registrierungebenachichtigung aktivieren', 'Klicken Sie diese Schaltfläche an wenn Sie das Senden von Registrierungsinfos aktivieren wollen.');
$GLOBALS['TL_LANG']['tl_module']['rim_mailtemplate']        = array('Mailtemplate', 'Wählen Sie hier das Template für die Mail aus. Im Template sind alle Standard-Insert-Tags verfügbar. Die Eigenschaften des Benutzers sind in den rim:: Insert Tags verfügbar (siehe Hilswizard). ');
$GLOBALS['TL_LANG']['tl_module']['rim_do_syslog']           = array('Logging aktivieren', 'Durch Aktivieren dieser Option werden alle verschickten E-Mails im Systemlog vermerkt.');
$GLOBALS['TL_LANG']['tl_module']['rim_mailto']              = array('Empfänger', 'Hier können Sie eine Liste beliebig vieler Empfänger der Benachichtigung angeben. BSP: office@foobar.com, private@foobar.com');

/*
 * activation mails
 */
$GLOBALS['TL_LANG']['tl_module']['rim_act_active']          = array('Aktivierungsbenachichtigung aktivieren', 'Klicken Sie diese Schaltfläche an wenn Sie das Senden von Aktivierungsinformationen aktivieren wollen.');
$GLOBALS['TL_LANG']['tl_module']['rim_act_mailtemplate']    = array('Mailtemplate', 'Wählen Sie hier das Template für die Mail aus. Im Template sind alle Standard-Insert-Tags verfügbar. Die Eigenschaften des Benutzers sind in den rim:: Insert Tags verfügbar (siehe Hilswizard). ');
$GLOBALS['TL_LANG']['tl_module']['rim_act_do_syslog']       = array('Logging aktivieren', 'Durch Aktivieren dieser Option werden alle verschickten E-Mails im Systemlog vermerkt.');
$GLOBALS['TL_LANG']['tl_module']['rim_act_mailto']          = array('Empfänger', 'Hier können Sie eine Liste beliebig vieler Empfänger der Benachichtigung angeben. BSP: office@foobar.com, private@foobar.com');

/*
 * legend
 */
$GLOBALS['TL_LANG']['tl_module']['rim_legend']              = 'Registration Info Mailer';