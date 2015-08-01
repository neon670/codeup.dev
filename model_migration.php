<?php

require 'model_login.php';
require 'db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS users');


$query = 'CREATE TABLE users (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	first_name VARCHAR(100) NOT NULL, 
	last_name VARCHAR(100) NOT NULL,
	email VARCHAR(100) NOT NULL,
	dob DATE NOT NULL,
	PRIMARY KEY (id)
	)';
$dbc->exec($query);

?>