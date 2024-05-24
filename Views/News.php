<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require __DIR__ . '/Common/Head.php'; ?>

        <title>LewMC News</title>
    </head>
    <body>
    <?php require __DIR__ . '/Common/Nav.php'; ?>
        <header>
            <div>
                <img src="/Assets/Images/pixels.webp" class="h-48 w-full object-cover" alt="Banner Image">
            </div>
            <div class="flex space-x-8 padding">
                <div class="pt-2">
                    <h1>News</h1>
                </div>
            </div>
        </header>

        <main class="padding">
            <div class="grid gap-2">
                <a href="/news/2024-05-24-thank-you-for-10000-downloads/" class="card-link">
                    <h3>Thank you for 10,000 downloads</h3>
                    <p>24th May 2024</p>
                </a>
                <a href="/news/2023-02-20-galactica-distribution-update/" class="card-link">
                    <h3>Galactica Distribution Update</h3>
                    <p>20th February 2023</p>
                </a>
                <a href="/news/2023-02-17-galactica-community-server-lag-updates/" class="card-link">
                    <h3>Galactica Community Server Lag Updates</h3>
                    <p>17th February 2023</p>
                </a>
            </div>
        </main>
        <?php require __DIR__ . '/Common/Footer.php'; ?>
    </body>
</html>