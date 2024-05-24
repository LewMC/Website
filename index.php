<?php

use Starlight\HTTP\Router;

require_once __DIR__ . '/starlight/HTTP/Router.php';

$Router = new Router();

// Plugins
$Router->route('/plugin/essence', '/Views/Asset.php');
$Router->route('/plugin/kryptonite', '/Views/Asset.php');

// API
$Router->route('/api/hangar', '/API/Hangar.php');