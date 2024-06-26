<?php
$url = htmlspecialchars($_SERVER['REQUEST_URI']);

if ($url == "/plugin") { $asset_type = 'Plugins'; }
elseif ($url == "/modpack") { $asset_type = 'Modpacks'; }
elseif ($url == "/mod") { $asset_type = 'Mods'; }
elseif ($url == "/server") { $asset_type = 'Servers'; }
else { header('Location: /404'); exit; }

$assets = json_decode(file_get_contents(__DIR__ . "/../Assets.json"));

if ($assets == null) {
    header('Location: /404');
    exit;
}

?><!DOCTYPE html>
<html lang="en">
    <head>
        <?php require __DIR__ . '/Common/Head.php'; ?>

        <script src="/Assets/JS/LewMCAPI.js"></script>

        <title><?= $asset_type; ?> - LewMC</title>
    </head>
    <body>
    <?php require __DIR__ . '/Common/Nav.php'; ?>
        <header>
            <div>
                <img src="/Assets/Images/pixels.webp" class="h-48 w-full object-cover" alt="Banner Image">
            </div>
            <div class="flex space-x-8 padding">
                <div class="pt-2">
                    <h1><?= $asset_type; ?></h1>
                </div>
            </div>
        </header>

        <main class="padding">
            <div class="grid gap-2">
                <?php foreach ($assets as $slug => $asset) {
                    if ($asset->type == $asset_type) {
                        ?>
                        <a href="<?= $url; ?>/<?= $slug; ?>" class="card-link">
                            <h3><?= $asset->name; ?></h3>
                            <span id="<?= $slug; ?>-downloads"><i class="fa-solid fa-spinner fa-spin-pulse"></i></span> Downloads
                        </a>
                        <script>getDownloadCount('<?= $slug; ?>','<?= $slug; ?>-downloads')</script>
                    <?php }
                } ?>
            </div>
        </main>
        <?php require __DIR__ . '/Common/Footer.php'; ?>
    </body>
</html>