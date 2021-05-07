<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once './models/event.php';

    $eventModel = new EventModel(PDOSocket::instance());
    $events = $eventModel->getAllWithRowLimit(6);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/main.min.css">
    <link rel="stylesheet" href="./styles/reset.css">
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
    <link href="//fonts.googleapis.com/css?family=Lora:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap&amp;subset=cyrillic" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Sora:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap&amp;subset=latin" rel="stylesheet" type="text/css">    
    <title>Eventify | Home</title>
</head>
<body>

    <header class="header pb-10">
        <nav class="navbar-container flex flex-row p-4 transition-all duration-1000 items-center">
                <div class="transition-all duration-1000">
                    <img src="./assets/logo_dim.svg" id="logo"/>
                </div>
                
                <div class="ml-auto transition-all duration-1000">
                    <ul class="flex flex-row">
                        <?php
                            session_start();
                            if(isset($_SESSION['logged_in'])){
                                if($_SESSION['logged_in'] != true){
                                    echo '<li class="mr-2"><a href="./login.php" class="hover:text-gray-700">Login</a></li>';
                                    echo '<li class="mr-2"><a href="./signup.php" class="hover:text-gray-700">Signup</a></li>';
                                }else{
                                    echo '<li class="mr-6 hover:text-white"><a href="./create.php" class="hover:text-gray-700">Create Event</a></li>';
                                    echo '<li class="mr-6 hover:text-white"><a href="./dashboard.php" class="hover:text-gray-700">Dashboard</a></li>';
                                    echo '<li class="mr-6 hover:text-white"><a href="./auth/logout.php" class="hover:text-gray-700">Logout</a></li>';
                                }
                            }
                        ?>           
                    </ul>
                </div>

        </nav>

        <div class="pt-20 pb-10">
            <div class="w-8/12 m-auto text-center mb-6">
                <h1 class="text-7xl font-semibold">All Your Favourite</h1>
            </div>
            
            <div class="w-8/12 m-auto text-center">
                <p class="text-7xl">Events In One Place</p>
            </div>
        </div>


        <section class="carousel-container">
                <div class="flex flex-row">
                    <div class="pl-2 pr-2 w-1/4 h-full event-card-container flex flex-col">
                        <a href="/">
                            <div class="event-card-bg rounded-md text-white" style="background-image: url('./assets/images/african.jpg');">
                                        <div class="h-1/2 mt-auto w-full p-4 flex flex-col">
                                            <div class="border-b border-white pb-4 mb-4">
                                                <p class="text-3xl event-name">Imprisoned nearly 40 years for slave trade</p>
                                            </div>
                                            <div>
                                                <p class="text-sm">By Ronald Richards</p>
                                                <p class="text-sm">20th January, 2021</p>
                                            </div>
                                        </div>
                            </div>
                        </a>
                    </div>

                    <div class="pl-2 pr-2 w-1/4 h-full event-card-container flex flex-col">
                        <a href="/">
                            <div class="event-card-bg rounded-md text-white" style="background-image: url('./assets/images/image-2.jpg');">
                                        <div class="h-1/2 mt-auto w-full p-4 flex flex-col">
                                            <div class="border-b border-white pb-4 mb-4">
                                                <p class="text-3xl event-name">Fox News personalities attack Bill Gates for pandemic comments</p>
                                            </div>
                                            <div>
                                                <p class="text-sm">By Ronald Richards</p>
                                                <p class="text-sm">20th January, 2021</p>
                                            </div>
                                        </div>
                            </div>
                        </a>
                    </div>    
                    
                    <div class="pl-2 pr-2 w-1/4 h-full event-card-container flex flex-col">
                        <a href="/">
                            <div class="event-card-bg rounded-md text-white" style="background-image: url('./assets/images/image-3.jpg');">
                                        <div class="h-1/2 mt-auto w-full p-4 flex flex-col">
                                            <div class="border-b border-white pb-4 mb-4">
                                                <p class="text-3xl event-name">'Fantastic' Barca wins on landmark night for Lionel Messi in la liga football</p>
                                            </div>
                                            <div>
                                                <p class="text-sm">By Ronald Richards</p>
                                                <p class="text-sm">20th January, 2021</p>
                                            </div>
                                        </div>
                            </div>
                        </a>
                    </div>     
                    
                    <div class="pl-2 pr-2 w-1/4 h-full event-card-container flex flex-col">
                        <a href="/">
                            <div class="event-card-bg rounded-md text-white" style="background-image: url('./assets/images/image-4.jpg');">
                                        <div class="h-1/2 mt-auto w-full p-4 flex flex-col">
                                            <div class="border-b border-white pb-4 mb-4">
                                                <p class="text-3xl event-name">Actor Ian McKellen receives Covid-19 vaccine, says he feels 'euphoric'</p>
                                            </div>
                                            <div>
                                                <p class="text-sm">By Ronald Richards</p>
                                                <p class="text-sm">20th January, 2021</p>
                                            </div>
                                        </div>
                            </div>
                        </a>
                    </div>                         
                    
                </div>
        </section>


    </header>

    <section class="trending-container">
        <div class="w-9/12 m-auto pt-20 pb-20">
            <h2 class="text-2xl mb-4">Popular Events</h2>

            <div class="grid grid-cols-4 mb-10">
                <?php
                    foreach($events as $event){
                    $eventUrl = $event['public_id'];
                    echo "<div class='pl-2 pr-2 mb-20'>
                        <a href=\"./event.php?event=${eventUrl}\" class='rounded-sm bg-white'>
                            <div class='rounded-sm'>

                                <div>
                                    <img class='rounded-md' src='{$event["image_url"]}'/>
                                </div>

                                <div class='card-details'>
                                    <p class='font-bold card-details-name'>{$event["name"]}</p>
                                    <div class='mt-4'>
                                        {$event["date"]}
                                    </div>
                                </div>
                            </div>                            
                        </a>
                    </div>";
                    }
                ?>

                    <div class="pl-2 pr-2 mb-20">
                        <a href="" class="rounded-sm bg-white">
                            <div class="rounded-sm">

                                <div>
                                    <img class="rounded-md" src="./assets/images/author.jpg"/>
                                </div>

                                <div class="card-details">
                                    <p>An event dubbed crazy with monie is ono</p>
                                </div>
                            </div>                            
                        </a>
                    </div>
                    
                    <div class="pl-2 pr-2 mb-20">
                        <a href="" class="rounded-sm bg-white">
                            <div class="rounded-sm">

                                <div>
                                    <img class="rounded-md" src="./assets/images/author.jpg"/>
                                </div>

                                <div class="card-details">
                                    <p>An event dubbed crazy with monie is ono</p>
                                </div>
                            </div>                            
                        </a>
                    </div>
                    
                    <div class="pl-2 pr-2 mb-20">
                        <a href="" class="rounded-sm bg-white">
                            <div class="rounded-sm">

                                <div>
                                    <img class="rounded-md" src="./assets/images/author.jpg"/>
                                </div>

                                <div class="card-details">
                                    <p>An event dubbed crazy with monie is ono</p>
                                </div>
                            </div>                            
                        </a>
                    </div>                    
            </div>
            
            
    
            <!-- <div class="trending-event-container flex flex-row relative items-center mb-20">
                <div class="event-card-bg rounded-md text-white w-1/2 absolute" style="background-image: url('./assets/images/image-3.jpg');">
                    <a href="/" class="flex flex-col">
                        <div class="p-10">
                            <span class="uppercase">Nov 11</span>
                            <p>Accra International Conference Center</p>
                        </div>
                    </a>
                </div>
                <div class="flex flex-row h-5/6 bg-white shadow-sm rounded-md absolute trending-text-card">
                        <div class="w-1/2"></div>
                        <div class="w-1/2 p-10">
                            <h3 class="text-3xl font-bold mb-6">China flight attendants advised to wear diapers for Covid protection</h3>
                            <div>
                                <p class="text-gray-600 mb-4">
                                Once you’ve started to read his blog, you’ll probably be hungry for more of his wisdom. He’s written over eighteen bestselling books on business and marketing. ...
                                </p>

                                <button class="bg-black rounded-md p-2 text-white w-full">
                                    Buy Ticket
                                </button>
                            </div>
                        </div>
                </div>
            </div> -->

        
        </div>


    </section>

    <section class="ad-container p-6">
            <img class="m-auto" src="./assets/images/ad.jpg"/>
    </section>

    
    <footer class="bg-black flex flex-row text-white p-20">
            <section class="w-3/12">
                <h3>Eventify</h3>
                <p class="text-sm text-gray-400 mb-6">&copy;&nbsp;2021, Eventify. All Right Reserved</p>

                <div class="flex flex-row">
                    <p>Follow Us -&nbsp;</p>
                    <div class="flex flex-row text-white">
                        <a href="/">Fb.</a>
                        <span>/</span>
                        <a href="/">Tw.</a>
                        <span>/</span>
                        <a href="/">Inst.</a>
                    </div>
                </div>
            </section>
            <section class="w-9/12">
                <h2 class="text-2xl mb-4 ">We collaborate with ambitious brands and people; to create memorable experiences.</h2>

                <div>
                    <div></div>
                    <div class="newsletter-form">
                        <p class="mb-2">Weekly Newsletter</p>
                        <div class="newsletter-form  flex flex-row">
                            <form>
                                <input type="text" placeholder="Email" required class="font-bold p-4 transition-all bg-transparent focus:outline-none text-white">
                                <button type="submit" class="p-4 transition-all duration-500 outline-none hover:bg-white hover:text-black">SUBSCRIBE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
    </footer>
    
    <script type="text/javascript">
            const navBar = document.querySelector('.navbar-container');
            window.addEventListener('scroll', (e) => {
                    window.scrollY > '100' ? navBar.classList.add('bg-white', 'fixed', 'w-full', 'z-20') : navBar.classList.replace('bg-white', 'bg-transparent');
                    window.scrollY > '100' ? document.querySelector('#logo').src = './assets/logo_dark.svg' : './assets/logo_dim.svg';
            })
    </script>
</body>
</html>