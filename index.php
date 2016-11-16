<?php

	use Phalcon\Mvc\Micro;

	$app = new Micro();
	$config = [
		"host" => "localhost",
		"username" => "tusek",
		"password" => "zoran",
		"dbname" => "tusek",
	];
	$app->get(
	"/test/{ime}",
	function ($ime) {
		$connection = new \Phalcon\Db\Adapter\Pdo\mysql($config);
		if($connection)
		{
			echo "<h1>Uspjesno spojen na bazu $ime</h1>";
		}
	}
	);
	$app->handle();
?>
