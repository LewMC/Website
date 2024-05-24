<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require __DIR__ . '/Common/Head.php'; ?>

        <script src="/Assets/JS/LewMCAPI.js"></script>

        <title>LewMC</title>
    </head>
    <body>
    <?php require __DIR__ . '/Common/Nav.php'; ?>

        <main
            class="padding bg-cover bg-no-repeat bg-center grid gap-2 sm:gap-4 md:gap-8 lg:gap-16"
            style="background-image: url('/Assets/Images/pixels.webp');"
        >
            <img src="https://brand.pixelset.dev/lewmc/logo.png" alt="LewMC" class="w-1/2 mx-auto" />

            <div class="grid md:grid-cols-3 gap-2 text-center">
                <div class="card">
                    <h2>4</h2>
                    <p><strong>Modpacks</strong></p>
                </div>
                <div class="card">
                    <h2>2</h2>
                    <p><strong>Plugins</strong></p>
                </div>
                <div class="card">
                    <h2><span id="downloads"><i class="fa-solid fa-spinner fa-spin-pulse"></i></span></h2>
                    <p><strong>Downloads</strong></p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-2">
                <div class="card col-span-2 text-center">
                    What we do
                </div>
                <a href="/modpack" class="card-link">
                    Modpacks
                </a>
                <a href="/plugin" class="card-link">
                    Plugins
                </a>
            </div>

            <div class="grid md:grid-cols-2 gap-2">
                <div class="card col-span-2 text-center">
                    Join our Community
                </div>
                <a href="/news" class="card-link">
                    News
                </a>
                <a href="/discord" class="card-link">
                    Discord
                </a>
                <a href="/wiki" class="card-link">
                    Wiki
                </a>
            </div>
        </main>
        <?php require __DIR__ . '/Common/Footer.php'; ?>
        <script>getDownloadCount('all','downloads')</script>
    </body>
</html>