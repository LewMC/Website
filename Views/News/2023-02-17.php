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
                    <h1>Galactica Community Server Lag Updates</h1>
                </div>
            </div>
        </header>

        <main class="padding">
            <p>
                Hi everyone, since the community server came back online we've seen an influx of players and a lot of
                lag. We've been working hard to fix this and we've made some progress.
            </p>
            <p>
                We've been monitoring the server's TPS and we've noticed that it tends to hold around 12 TPS, which
                causes most blocks such as pipes and furnaces to experience lags, and can be very frustrating for
                players.
            </p>
            <p>
                We've identified the cause of the lag to be the pedestals with the time watches on them. In response to
                this we've temporarily disabled these pedestals starting 6am GMT on the 17th of February.
            </p>
            <p>
                If this does improve the server's performance we'll see if we can re-enable them in a less power hungry
                way or they may remain disabled. If this does not improve the server's performance they'll be
                re-enabled.
            </p>
            <p>
                We plan to run another timings report at 6pm GMT on the 17th of February to see if the server's lag
                issues are resolved.
            </p>
            <p>
                As always, we'll keep you updated on the progress of the GCS on our Discord server.
            </p>
            <p>
                Thanks, Lew
            </p>
        </main>
        <?php require __DIR__ . '/../Common/Footer.php'; ?>
    </body>
</html>