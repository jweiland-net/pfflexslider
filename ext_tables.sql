#
# Table structure for table 'tx_pfflexslider_domain_model_slider'
#
CREATE TABLE tx_pfflexslider_domain_model_slider (
	image int(11) unsigned NOT NULL default '0',
	title varchar(255) DEFAULT '' NOT NULL,
	links int(11) unsigned DEFAULT '0' NOT NULL
);

#
# Table structure for table 'tx_pfflexslider_domain_model_link'
#
CREATE TABLE tx_pfflexslider_domain_model_link (
	slider int(11) unsigned DEFAULT '0' NOT NULL,
	title varchar(255) DEFAULT '' NOT NULL,
	link varchar(255) DEFAULT '' NOT NULL
);
