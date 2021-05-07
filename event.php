<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once "./models/event.php";
    $eventModel = new EventModel(PDOSocket::instance());
    if(isset($_GET['event'])){
        $eventData = $eventModel->get($_GET['event']);
        if ($eventData == false && !isset($_SESSION['uid'])){
            header("Location: ./index.php");
        }
        session_start();
        var_dump($eventData);
    }else{
        header("Location: ./index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/main.min.css">
    <link rel="stylesheet" href="./styles/reset.css">
    <link href="//fonts.googleapis.com/css?family=Lora:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap&amp;subset=cyrillic" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Sora:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap&amp;subset=latin" rel="stylesheet" type="text/css">    
    <title>Eventify | <?php echo $eventData->name; ?></title>
</head>
<body class="relative" data-modalToggled="false">

    <nav class="navbar-container flex flex-row p-4 transition-all duration-1000 items-center">
                <div class="transition-all duration-1000">
                    Eventify
                </div>
                
                <div class="ml-auto transition-all duration-1000">
                    <ul class="flex flex-row">
                        <li class="mr-2">
                            <a href="./login.php" class="hover:text-gray-700">Login</a>
                        </li>

                        <li class="mr-2">
                            <a href="./signup.php" class="hover:text-gray-700">Signup</a>
                        </li>                        
                    </ul>
                </div>

        </nav>    

    <header class="flex flex-row m-auto justify-center pb-20">
        <div class="w-4/12">
            <img src="<?php echo $eventData->image_url; ?>" class="rounded-md m-auto"/>
        </div>
        <div class="w-6/12">
            <div class="flex flex-row text-gray-400">
                <span class="mr-2 mb-4"><?php echo $eventData->organizer_name; ?></span>
                <span class="event-detail-date"><?php echo $eventData->date; ?></span>
            </div>
            <h1 class="event-detail-name"><?php echo $eventData->name; ?></h1>

            <p class="text-gray-500 leading-8 mb-4">
            <?php echo $eventData->description; ?>
            </p>

            <div class="flex flex-row items-center">
                <span class="mr-4">Share On</span>

                <div class="flex flex-row">
                    <a href="" class="mr-2">
                        <svg enable-background="new 0 0 512 512" height="24" viewBox="0 0 512 512" width="24" xmlns="http://www.w3.org/2000/svg"><path d="m512 256c0-141.4-114.6-256-256-256s-256 114.6-256 256 114.6 256 256 256c1.5 0 3 0 4.5-.1v-199.2h-55v-64.1h55v-47.2c0-54.7 33.4-84.5 82.2-84.5 23.4 0 43.5 1.7 49.3 2.5v57.2h-33.6c-26.5 0-31.7 12.6-31.7 31.1v40.8h63.5l-8.3 64.1h-55.2v189.5c107-30.7 185.3-129.2 185.3-246.1z"/></svg>
                    </a>
                    <a href="" class="mr-2">
                        <svg height="24" viewBox="0 0 512 512" width="24" xmlns="http://www.w3.org/2000/svg"><path d="m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm116.886719 199.601562c.113281 2.519532.167969 5.050782.167969 7.59375 0 77.644532-59.101563 167.179688-167.183594 167.183594h.003906-.003906c-33.183594 0-64.0625-9.726562-90.066406-26.394531 4.597656.542969 9.277343.8125 14.015624.8125 27.53125 0 52.867188-9.390625 72.980469-25.152344-25.722656-.476562-47.410156-17.464843-54.894531-40.8125 3.582031.6875 7.265625 1.0625 11.042969 1.0625 5.363281 0 10.558593-.722656 15.496093-2.070312-26.886718-5.382813-47.140624-29.144531-47.140624-57.597657 0-.265624 0-.503906.007812-.75 7.917969 4.402344 16.972656 7.050782 26.613281 7.347657-15.777343-10.527344-26.148437-28.523438-26.148437-48.910157 0-10.765624 2.910156-20.851562 7.957031-29.535156 28.976563 35.554688 72.28125 58.9375 121.117187 61.394532-1.007812-4.304688-1.527343-8.789063-1.527343-13.398438 0-32.4375 26.316406-58.753906 58.765625-58.753906 16.902344 0 32.167968 7.144531 42.890625 18.566406 13.386719-2.640625 25.957031-7.53125 37.3125-14.261719-4.394531 13.714844-13.707031 25.222657-25.839844 32.5 11.886719-1.421875 23.214844-4.574219 33.742187-9.253906-7.863281 11.785156-17.835937 22.136719-29.308593 30.429687zm0 0"/></svg>
                    </a>
                    <a href="" class="mr-2">
                        <svg height="24" viewBox="0 0 512 512" width="24" xmlns="http://www.w3.org/2000/svg"><path d="m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm-74.390625 387h-62.347656v-187.574219h62.347656zm-31.171875-213.1875h-.40625c-20.921875 0-34.453125-14.402344-34.453125-32.402344 0-18.40625 13.945313-32.410156 35.273437-32.410156 21.328126 0 34.453126 14.003906 34.859376 32.410156 0 18-13.53125 32.402344-35.273438 32.402344zm255.984375 213.1875h-62.339844v-100.347656c0-25.21875-9.027343-42.417969-31.585937-42.417969-17.222656 0-27.480469 11.601563-31.988282 22.800781-1.648437 4.007813-2.050781 9.609375-2.050781 15.214844v104.75h-62.34375s.816407-169.976562 0-187.574219h62.34375v26.558594c8.285157-12.78125 23.109375-30.960937 56.1875-30.960937 41.019531 0 71.777344 26.808593 71.777344 84.421874zm0 0"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main class="event-detail-main pb-20">
        <section class="w-7/12 m-auto pt-20">
            <h2 class="font-bold text-3xl mb-10">About The Event</h2>

            <div class="event-detail-description text-gray-600 mb-10">
                <p class="leading-8">
                    <?php echo $eventData->description; ?>
                </p>
            </div>
            <button id="event-registration" type="submit" name="create-account" class="p-4 bg-black text-white rounded-md w-1/2 mb-4">
                                    Register for Event
            </button>     
        </section>


    </main>

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
    
    <div id="modal-bg" class="hidden bg-black w-screen h-screen bg-opacity-70 top-0 left-0 right-0 bottom-0 absolute"></div>
    <div id="modal-container" class="hidden flex flex-row top-0 left-0 right-0 bottom-0 absolute w-full h-full">
            <div class="w-6/12 bg-white rounded-md m-auto">
                    <div class="flex flex-row p-4">
                        <h3 class="font-bold text-2xl">Register for Event</h3>
                            <div id="close" class="text-red-500 cursor-pointer ml-auto">close</div>
                    </div>
                    <div class="p-4">
                        <form>
                                <div class="flex flex-col mb-6">
                                        <label class="mb-2">Firstname</label>
                                        <input name="firstname" class="outline-none bg-gray-100 p-2 rounded-md focus:ring-2 focus:ring-gray-200" type="text" placeholder="Mathew">
                                </div>   

                                <div class="flex flex-col mb-6">
                                        <label class="mb-2">Lastname</label>
                                        <input name="lastname" class="outline-none bg-gray-100 p-2 rounded-md focus:ring-2 focus:ring-gray-200" type="text" placeholder="Adams">
                                </div>    
                                

                                <div class="flex flex-col mb-6">
                                        <label class="mb-2">Email</label>
                                        <input name="email" value="<?php echo $_SESSION['email'];?>" class="outline-none bg-gray-100 p-2 rounded-md focus:ring-2 focus:ring-gray-200" type="text" placeholder="Adams">
                                </div>                                    

                                <button type="submit" name="create-account" class="font-bold p-4 bg-black text-white rounded-md w-4/12 ml-auto mb-4">
                                Register for Event
                                </button>                                    
                        </form>
                    </div>
            </div>
    </div>

    <script type="text/javascript">
            const registrationButton = document.querySelector('#event-registration');
            const closeButton = document.querySelector('#close');
            const bodyDataset = document.body.dataset;
            const modalBg = document.querySelector('#modal-bg');
            const modalContainer = document.querySelector('#modal-container');


            registrationButton.addEventListener('click', () => {
                bodyDataset.modaltoggled = 'true';
                document.body.classList.add('modal-toggled');
                window.scrollTo(0,0);
                modalBg.classList.replace('hidden', 'block');
                modalContainer.classList.replace('hidden', 'block');
            })

            closeButton.addEventListener('click',  () => {
                bodyDataset.modaltoggled = 'false';
                document.body.classList.add('modal-default');
                modalBg.classList.replace('block', 'hidden');
                modalContainer.classList.replace('block', 'hidden');
            })
    </script>
</body>
</html>