<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;

$app->get('/hola/{visitante}', function($visitante) use($app) { 
    return 'Bienvenido '.$app->escape($visitante); 
}); 

// ... definitions

$app->run();