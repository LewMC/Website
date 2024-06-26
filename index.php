<?php

use Starlight\HTTP\HTTPS;
use Starlight\HTTP\Router;

require_once __DIR__ . '/starlight/HTTP/Router.php';
require_once __DIR__ . '/starlight/HTTP/HTTPS.php';

if (!file_exists(__DIR__ . '/settings.php')) {
    echo '<h1>Error 503</h1><p>The server is temporarily unavailable.</p><p><sub>Error: Missing settings.php</sub></p>';
    exit;
}

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
$Router->route('/modpack/lews-client-pack', '/Views/Asset.php');
$Router->route('/modpack/simplyaesthetic', '/Views/Asset.php');

// Mods
$Router->route('/mod', '/Views/Assets.php');

// Servers
$Router->route('/server', '/Views/Assets.php');

// API
$Router->route('/api/modrinth', '/API/Modrinth.php');
$Router->route('/api/curseforge', '/API/CurseForge.php');
$Router->route('/api/lewmc', '/API/LewMC.php');

// News
$Router->route('/news', '/Views/News.php');
$Router->route('/news/2024-05-24-thank-you-for-10000-downloads', '/Views/News/2024-05-24.php');
$Router->route('/news/2023-02-20-galactica-distribution-update', '/Views/News/2023-02-20.php');
$Router->route('/news/2023-02-17-galactica-community-server-lag-updates', '/Views/News/2023-02-17.php');

// Other
$Router->route('/', '/Views/Homepage.php');
$Router->route('/discontinued', '/Views/Discontinued.php');

echo 'Error 404';