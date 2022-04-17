<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset=UTF-8>
        <meta http-equiv=X-UA-Compatible content=IE=edge>
        <meta name=viewport content=width=device-width, initial-scale=1.0>
        <script src='https://cdn.tailwindcss.com'></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
        <link rel=stylesheet href=index.css>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins&display=swap" rel="stylesheet">
        <title>Ludovic Debever</title>
    </head>

    <body>
        <div id='app'>
            <nav class='z-20 sticky top-0 flex sm:h-24 sm:backdrop-blur-md sm:bg-white/50'>
                <?php if (isset($_GET['notif'])) { ?>
                
                <div class='absolute z-20 top-4 bg-emerald-400 w-1/3 p-4 rounded notif text-white'>
                    <?php if ($_GET['notif'] == 1) echo('Your message has been sent!') ?>
                </div>
                    
                <?php } if (isset($_GET['error'])) { ?>

                    <div class='absolute z-30 top-4 bg-amber-400 w-1/3 p-4 rounded notif text-white'>
                        <?php if ($_GET['error'] == 1) echo("Error. Please retry later.") ?>
                    </div>
                <?php } ?>

                <a @click='menu_open = !menu_open; setOpacity("mobile-menu", 1)' class='sm:hidden flex flex-col gap-1 m-3 z-10'>
                    <span v-bind:class="{'rotate-45 bg-violet-600 mt-2' : menu_open}" class='flex w-8 h-1 rounded bg-amber-400'></span>
                    <span v-bind:class="{'rotate-[-45deg] bg-violet-600 mt-[-8px]' : menu_open}" class='flex w-8 h-1 rounded bg-amber-400'></span>
                    <span v-if='!menu_open' class='flex w-8 h-1 rounded bg-amber-400'></span>
                </a>

                <!-- Desktop & tablet menu -->
                <ul class='hidden sm:flex w-screen  px-32 gap-14 my-auto justify-center'>
                    <li class='mx-auto'><a class='text-xl font-["Abril_Fatface"] text-violet-600' href='index.php#home'>Portfolio</a></li>
                    <li><a class='text-sm font-["Poppins"]' href='index.php#home'>Home</a></li>
                    <li><a class='text-sm font-["Poppins"]' href='index.php#about'>About</a></li>
                    <li><a class='text-sm font-["Poppins"]' href='index.php#cv'>CV</a></li>
                    <li><a class='text-sm font-["Poppins"]' href='index.php#projects'>Projects</a></li>
                    <li class='mr-auto'><a class='text-sm font-["Poppins"]' href='index.php#contact'>Contact</a></li>
                </ul>

                <!-- Mobile menu -->
                <ul id='mobile-menu' v-bind:class="{'show_menu' : menu_open, 'hide_menu' : !menu_open}" class='opacity-0 sm:hidden flex flex-col gap-2 p-16 w-screen h-screen bg-rose-200 absolute top-0'>
                    <li class='mx-auto p-16'><a class='text-[2em] font-["Abril_Fatface"] text-[#232342]' href='index.php#home'>Portfolio</a></li>
                    <li><a @click='menu_open = false' class='text-[1.3em] text-[#232342] font-["Poppins"]' href='index.php#home'>Home</a></li>
                    <li><a @click='menu_open = false' class='text-[1.3em] text-[#232342] font-["Poppins"]' href='index.php#about'>About</a></li>
                    <li><a @click='menu_open = false' class='text-[1.3em] text-[#232342] font-["Poppins"]' href='index.php#cv'>CV</a></li>
                    <li><a @click='menu_open = false' class='text-[1.3em] text-[#232342] font-["Poppins"]' href='index.php#projects'>Projects</a></li>
                    <li class='mr-auto'><a @click='menu_open = false' class='text-[1.3em] text-[#232342] font-["Poppins"]' href='index.php#contact'>Contact</a></li>
                    <img id='shadow-1-mobile-menu' class='absolute z-10 w-[20vw] bottom-10 right-20' src='assets/shadow.svg'>
                    <img id='shadow-2-mobile-menu' class='absolute z-10 h-[30vh] bottom-40 right-0' src='assets/shadow-2.svg'>
                    <img id='character-mobile-menu' class='absolute z-10 h-[50vh] bottom-20 right-20' src='assets/character-mobile-menu.svg'>
                </ul>
            </nav>