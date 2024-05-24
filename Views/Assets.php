<?php
$asset_type = htmlspecialchars($_SERVER['REQUEST_URI']);
$assets = json_decode(file_get_contents(__DIR__ . "/../Assets.json"));

if ($assets == null) {
    header('Location: /404');
    exit;
}

var_dump($assets,$asset_type);

?><!DOCTYPE html>
<html lang="en">
    <head>
        <?php require __DIR__ . '/Common/Head.php'; ?>

        <title><?= ucfirst($asset_type); ?> - LewMC</title>
    </head>
    <body>
    <?php require __DIR__ . '/Common/Nav.php'; ?>
        <header>
            <div>
                <img src="/Assets/Images/pixels.webp" class="h-48 w-full object-cover" alt="Banner Image">
            </div>
            <div class="flex space-x-8 padding">
                <div class="pt-2">
                    <h1 class="text-size-lg"><?= $asset_type; ?></h1>
                </div>
            </div>
        </header>

        <main class="padding">

            <div class="grid gap-2">
                <?php foreach ($assets as $asset) {
                    var_dump($asset);
                    if ($asset->type == $asset_type) {
                        echo '1';
                    }
                } ?>
            </div>
        </main>
        <?php require __DIR__ . '/Common/Footer.php'; ?>
    </body>
</html>