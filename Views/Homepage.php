<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require __DIR__ . '/Common/Head.php'; ?>

        <script src="/Assets/JS/LewMCAPI.js"></script>

        <title>LewMC</title>
    </head>
    <body>
    <?php require __DIR__ . '/Common/Nav.php'; ?>
        <header>
            <div>
                <img src="/Assets/Images/pixels.webp" class="h-48 w-full object-cover" alt="Banner Image">
            </div>
            <div class="flex space-x-8 padding">
                <div class="pt-2 text-center">
                    <h1>Welcome to LewMC</h1>
                </div>
            </div>
        </header>

        <main class="padding">
            <div class="grid md:grid-cols-3 gap-2">
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
            <br><br><br>
            <h2>Take a look around!</h2>
            <br>
            <div class="grid md:grid-cols-2 gap-2">
                <a href="/modpack" class="card-link">
                    Modpacks
                </a>
                <a href="/plugin" class="card-link">
                    Plugins
                </a>
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