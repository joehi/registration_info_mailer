-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the TYPOlight *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************


-- 
-- Table `tl_module`
-- 
CREATE TABLE `tl_module` (
  `rim_active` char(1) NOT NULL default '',
  `rim_do_syslog` char(1) NOT NULL default '',
  `rim_act_active` char(1) NOT NULL default '',
  `rim_act_do_syslog` char(1) NOT NULL default '',
  `rim_mail_from` varchar(255) NOT NULL default '',
  `rim_mail_from_name` varchar(255) NOT NULL default '',
  `rim_subject` varchar(255) NOT NULL default '',
  `rim_mailto` blob NULL,
  `rim_mailto_cc` blob NULL,
  `rim_mailto_bcc` blob NULL,
  `rim_mailtext` blob NULL,
  `rim_act_mail_from` varchar(255) NOT NULL default '',
  `rim_act_mail_from_name` varchar(255) NOT NULL default '',
  `rim_act_subject` varchar(255) NOT NULL default '',
  `rim_act_mailto` blob NULL,
  `rim_act_mailto_cc` blob NULL,
  `rim_act_mailto_bcc` blob NULL,
  `rim_act_mailtext` blob NULL,
) ENGINE=MyISAM DEFAULT CHARSET=utf8;