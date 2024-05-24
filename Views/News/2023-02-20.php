<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require __DIR__ . '/../Common/Head.php'; ?>

        <title>Galactica Community Server Lag Updates - LewMC News</title>
    </head>
    <body>
    <?php require __DIR__ . '/../Common/Nav.php'; ?>
        <header>
            <div>
                <img src="/Assets/Images/pixels.webp" class="h-48 w-full object-cover" alt="Banner Image">
            </div>
            <div class="flex space-x-8 padding">
                <div class="pt-2">
                    <h1>Galactica Distribution Update</h1>
                </div>
            </div>
        </header>

        <main class="padding">
            <p>
                Hi everyone, we're changing how we distribute Galactica and what we include in our distributions to make
                the development and player experience better.
            </p>
            <h2>Discontinuing Technic Launcher Support</h2>
            <p>
                We originally launched our modpack on the Technic Launcher for the world to play, unfortunately with
                great sadness we're today announcing that we're no longer going to be distributing Galactica on this
                platform.
            </p>
            <p>
                Galactica was the only modpack we ever published on the platform, and after reduced player numbers and
                increased time it takes us to prepare a modpack for this platform we've decided to stop. Technic uses a
                completely different format to CurseForge and other platforms, which makes it harder and more
                time-consuming for us to publish on it.
            </p>
            <p>
                We've decided to better our work on the CurseForge and server packs for Galactica, distributing it the
                same way we distribute our other modpacks.
            </p>
            <p>
                Galactica will remain on CurseForge, and the server pack will remain on CurseForge as well. We're not
                removing Galactica from Technic, but we'll no longer be updating it there. You'll still be able to
                download old versions of Galactica in the Technic format on the Technic Launcher and our Files API.
            </p>
            <h2>Discontinuing galactica.cfg and server.png</h2>
            <p>
                We're also discontinuing our distribution of the galactica.cfg and server.png files.
            </p>
            <p>
                galactica.cfg was a file added for a proposed system that would allow you to better manage modpack
                servers and check for updates. However, since the implementation of the Modpack Update Checker mod this
                file has long been added to modpacks never to be used. Removing it won't break anything unless you use
                any third-party services that rely on it, we currently aren't aware of any services that use it.
            </p>
            <p>
                server.png gave your server a neat little icon, by removing it we're encouraging server administrators
                to create new icons for their servers. We also didn't want your server list to be full of the same icons
                that our own server uses, which could be confusing.
            </p>
            <p>
                If you have any questions or feedback on these changes, please do let us know on Discord.
            </p>
            <p>Thanks, Lew</p>
        </main>
        <?php require __DIR__ . '/../Common/Footer.php'; ?>
    </body>
</html>