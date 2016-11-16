<?php

	use Phalcon\Mvc\Micro;

	$app = new Micro();
	$app->get(
	"/test/{ime}",
	function ($ime) {
		echo "<h1>Hello! $ime</h1>;
	}
	);
?>
