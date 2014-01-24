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
  `rim_mailtemplate` int(5) unsigned NOT NULL default '0',
  `rim_do_syslog` char(1) NOT NULL default '',
  `rim_act_active` char(1) NOT NULL default '',
  `rim_act_mailtemplate` int(5) unsigned NOT NULL default '0',
  `rim_act_do_syslog` char(1) NOT NULL default '',
  `rim_mailto` blob NULL,
  `rim_act_mailto` blob NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Table `tl_member`
-- 

CREATE TABLE `tl_member` (
  `rim_send_mail` char(1) NOT NULL default '',
  `rim_deactivate_mailtemplate` int(5) unsigned NOT NULL default '0',
  `rim_activate_mailtemplate` int(5) unsigned NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;