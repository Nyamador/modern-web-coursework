<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    session_start();
    require_once './includes/head.php' 
    ?>
    <title>Document</title>
</head>
<body>
        <?php require_once './includes/navbar.php' ?>

        <main class="mt-20 w-9/12 m-auto">
            <h1 class="text-3xl mb-10">Manage Your Events</h1>

            <div>
                <section class="bg-gray-100 p-4 rounded-md flex flex-row">
                    <p class="typo-heading">Event</p>

                    <p class="ml-auto typo-heading">Reservations</p>
                </section>
                <section class="flex flex-row p-4 boder-b">
                    <a href="/" class="hover:text-gray-500">
                            An Ecent with latif abubakar
                    </a>

                    <p class="ml-auto">200</p>
                </section>
            </div>
        </main>
</body>
</html>