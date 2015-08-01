<?php

require 'parks_login.php';
require 'db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS national_parks');


$query = 'CREATE TABLE national_parks (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	name VARCHAR(100) NOT NULL, 
	location VARCHAR(100) NOT NULL,
	date_established DATE NOT NULL,
	area_in_acres DOUBLE(10,2) NOT NULL,
	description TEXT NOT NULL,
	PRIMARY KEY (id)


	)';
$dbc->exec($query);

?>