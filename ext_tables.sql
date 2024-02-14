CREATE TABLE tx_veranstaltungen_domain_model_veranstaltung (
	title varchar(255) NOT NULL DEFAULT '',
	descritpion text,
	organisator int(11) unsigned DEFAULT '0'
);

CREATE TABLE tx_veranstaltungen_domain_model_organisator (
	name varchar(255) NOT NULL DEFAULT ''
);
