<?php
	$table = CREATE TABLE 'student' (
	'id' int(10) unsigned NOT NULL AUTO_INCREMENT,
	'ime' varchar(70) NOTNULL,
	'prezime' varchar(70) NOT NULL,
	PRIMARY KEY ('id')
	);
	use Phalcon\Mvc\Micro;

	$app = new Micro();
	$config = [
		"host" => "localhost",
		"username" => "tusek",
		"password" => "zoran",
		"dbname" => "tusek",
	];
	$connection = new \Phalcon\Db\Adapter\Pdo\mysql($config);
	$app->get(
		"/test/listAll",
		function () {
		}
	);
	$app->post(
		"/test/insert",
		function () {
		}
	);
	$app->delete(
		"/test/delete/{id:[0-9]+",
		function() {
		}
	);
	$app->handle();
?>
