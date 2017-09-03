<?php

require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

$app->get('/', function() use($app) {
    
	$Actividad1 = "Christian Daniel Gallegos Sanchez; Numero De Cuenta: 415139405";
	
	return $app -> json($Actividad1);
});

$app->run();