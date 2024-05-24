<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require __DIR__ . '/Common/Head.php'; ?>

        <title>LewMC</title>
    </head>
    <body>
    <?php require __DIR__ . '/Common/Nav.php'; ?>
        <header>
            <div>
                <img src="/Assets/Images/pixels.webp" class="h-48 w-full object-cover" alt="Banner Image">
                <h1>Welcome to LewMC</h1>
            </div>
            <div class="flex space-x-8 padding">
                <div class="pt-2">
                    <h1>Welcome to LewMC</h1>
                </div>
            </div>
        </header>

        <main class="padding">
            <div class="grid md:grid-cols-2 gap-2">
                <a href="/modpack" class="card-link">
                    Modpacks
                </a>
                <a href="/mod" class="card-link">
                    Mods
                </a>
                <a href="/plugin" class="card-link">
                    Plugins
                </a>
                <a href="/server" class="card-link">
                    Servers
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
    </body>
</html>