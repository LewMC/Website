<?php

use Starlight\HTTP\HTTPS;
use Starlight\HTTP\Router;

require_once __DIR__ . '/starlight/HTTP/Router.php';
require_once __DIR__ . '/starlight/HTTP/HTTPS.php';

$HTTPS = new HTTPS();
$HTTPS->RedirectToHTTPS();

$Router = new Router();

// Plugins
$Router->route('/plugin', '/Views/Assets.php');
$Router->route('/plugin/essence', '/Views/Asset.php');
$Router->route('/plugin/kryptonite', '/Views/Asset.php');

// Modpacks
$Router->route('/modpack', '/Views/Assets.php');
$Router->route('/modpack/galactica', '/Views/Asset.php');
$Router->route('/modpack/lews-jurassic-pack', '/Views/Asset.php');

// Mods
$Router->route('/mod', '/Views/Assets.php');

// Servers
$Router->route('/server', '/Views/Assets.php');

// API
$Router->route('/api/hangar', '/API/Hangar.php');
$Router->route('/api/modrinth', '/API/Modrinth.php');

// Other
$Router->route('/discontinued', '/Views/Discontinued.php');

echo 'Error 404';