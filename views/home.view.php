<?php include('views/layout/nav.inc.php'); ?>

            <div id='home' class='h-screen flex justify-center overflow-hidden bg-cover sm:bg-[url("assets/background-home.svg")]'>
                <div class='flex flex-col h-screen sm:w-5/12 px-20 justify-center'>
                    <h1 class='font-["Abril_Fatface"] text-[#232342] text-[2.1em]'>Ludovic Debever</h1>
                    <h2 class='flex gap-2 font-["Poppins"] text-[#232342] text-[1em]'><span class='flex w-1 h-6 bg-amber-500'></span>Web developer</h2>
                    <div class='flex justify-between w-72 mt-20'>
                        <a class='flex py-2 px-10 sm:px-6 bg-violet-600 text-sm text-white' href='#contact'>Contact</a>
                        <a class='flex py-2 px-10 sm:px-6 bg-amber-400 text-sm text-white' href='#about'>About</a>
                    </div>
                </div>

                <div class='hidden sm:flex flex-col h-screen sm:w-5/12 px-20 relative'>
                    <img id='character-home' class='absolute top-60 h-[130vh]' src='assets/character-home.svg'>
                    <img id='bubble-home-1' class='absolute top-72 left-52 w-6' src='assets/bubble-home.svg'>
                    <img id='bubble-home-2' class='absolute top-60 left-40 w-12' src='assets/bubble-home.svg'>
                    <img id='think-home' class='absolute top-20 left-0 w-48' src='assets/think-home.svg'>
                </div>
            </div>

            <div id='about' class='h-screen flex flex-col overflow-hidden py-20 bg-gray-100'>
                <h2 class='text-center text-[2.1em] font-["Abril_Fatface"] text-[#232342] sm:py-6 py-16'>About me</h2>

                <div class='flex justify-center'>
                    <div class='hidden sm:flex h-screen sm:w-5/12 px-20 justify-center relative'>
                        <img class='absolute top-32 h-2/3' src='assets/ludovic2.svg'>
                    </div>
                    
                    <div class='flex flex-col sm:w-5/12 px-10 sm:px-20 justify-center'>
                        <p class='text-justify font-["Poppins"] text-sm'>I'm a 21-year-old web development student passionate about programming. 
                            I like spending time on fixing small details to make my work look as good as i can. Coding feels like a game to me, 
                            I'm just having fun learning new languages and improving my skills. I also happend to be a former graphic design student.
                        </p>

                        <a href='#cv' class='flex bg-gray-700 h-6 mt-32'>
                            <pre class='bg-gray-600 w-12 text-gray-300'> 1     </pre><p class='indent-2 text-white' id='cv-button'></p>
                        </a>
                    </div>
                </div>
            </div>

            <div id='cv' class='sm:h-[130vh] flex flex-col overflow-hidden py-20'>
                <h2 class='text-center text-[2.1em] text-[#232342] font-["Abril_Fatface"] sm:py-6 py-16'>Curriculum Vitae</h2>
                
                <div class='flex justify-center'>
                    <div class='flex flex-col sm:w-5/12 px-10 sm:px-20 py-20 gap-16'>
                        <h2 class='text-xl text-[#232342] font-["Abril_Fatface"]'>Skills</h2>

                        <div class='flex flex-wrap gap-6'>

                            <div class='w-56 relative'>
                                <h3 class='flex font-["Poppins"] text-md'>HTML<span class='ml-auto'>Intermediate</span></h3>
                                <span class='absolute flex w-[100%] h-2 bg-amber-500'></span>
                                <span class='absolute flex w-[70%] h-2 bg-violet-500'></span>
                            </div>

                            <div class='w-56 relative'>
                                <h3 class='flex font-["Poppins"] text-md'>CSS (pure)<span class='ml-auto'>Intermediate</span></h3>
                                <span class='absolute flex w-[100%] h-2 bg-amber-500'></span>
                                <span class='absolute flex w-[70%] h-2 bg-violet-500'></span>
                            </div>

                            <div class='w-56 relative'>
                                <h3 class='flex font-["Poppins"] text-md'>CSS (frameworks)<span class='ml-auto'>Newbie</span></h3>
                                <span class='absolute flex w-[100%] h-2 bg-amber-500'></span>
                                <span class='absolute flex w-[30%] h-2 bg-violet-500'></span>
                            </div>
                            
                            <div class='w-56 relative'>
                                <h3 class='flex font-["Poppins"] text-md'>JS (pure)<span class='ml-auto'>Advanced</span></h3>
                                <span class='absolute flex w-[100%] h-2 bg-amber-500'></span>
                                <span class='absolute flex w-[90%] h-2 bg-violet-500'></span>
                            </div>

                            <div class='w-56 relative'>
                                <h3 class='flex font-["Poppins"] text-md'>JS (frameworks)<span class='ml-auto'>Newbie</span></h3>
                                <span class='absolute flex w-[100%] h-2 bg-amber-500'></span>
                                <span class='absolute flex w-[30%] h-2 bg-violet-500'></span>
                            </div>

                            <div class='w-56 relative'>
                                <h3 class='flex font-["Poppins"] text-md'>PHP (pure)<span class='ml-auto'>Newbie</span></h3>
                                <span class='absolute flex w-[100%] h-2 bg-amber-500'></span>
                                <span class='absolute flex w-[30%] h-2 bg-violet-500'></span>
                            </div>

                            <div class='w-56 relative'>
                                <h3 class='flex font-["Poppins"] text-md'>PHP (frameworks)<span class='ml-auto'>Newbie</span></h3>
                                <span class='absolute flex w-[100%] h-2 bg-amber-500'></span>
                                <span class='absolute flex w-[30%] h-2 bg-violet-500'></span>
                            </div>

                            <div class='w-56 relative'>
                                <h3 class='flex font-["Poppins"] text-md'>C++<span class='ml-auto'>Newbie</span></h3>
                                <span class='absolute flex w-[100%] h-2 bg-amber-500'></span>
                                <span class='absolute flex w-[30%] h-2 bg-violet-500'></span>
                            </div>

                            <div class='w-56 relative'>
                                <h3 class='flex font-["Poppins"] text-md'>Illustrator<span class='ml-auto'>Advanced</span></h3>
                                <span class='absolute flex w-[100%] h-2 bg-amber-500'></span>
                                <span class='absolute flex w-[80%] h-2 bg-violet-500'></span>
                            </div>

                            <div class='w-56 relative'>
                                <h3 class='flex font-["Poppins"] text-md'>Photoshop<span class='ml-auto'>Intermediate</span></h3>
                                <span class='absolute flex w-[100%] h-2 bg-amber-500'></span>
                                <span class='absolute flex w-[40%] h-2 bg-violet-500'></span>
                            </div>

                            <div class='w-56 relative'>
                                <h3 class='flex font-["Poppins"] text-md'>InDesign<span class='ml-auto'>Intermediate</span></h3>
                                <span class='absolute flex w-[100%] h-2 bg-amber-500'></span>
                                <span class='absolute flex w-[40%] h-2 bg-violet-500'></span>
                            </div>

                            <div class='w-56 relative'>
                                <h3 class='flex font-["Poppins"] text-md'>Xd<span class='ml-auto'>Newbie</span></h3>
                                <span class='absolute flex w-[100%] h-2 bg-amber-500'></span>
                                <span class='absolute flex w-[30%] h-2 bg-violet-500'></span>
                            </div>
                        </div>
                        
                        <div class='flex flex-wrap gap-6'>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit molestias minima ipsa odit veritatis. 
                                Magnam provident cum quam. Eum fuga tempora distinctio voluptates minus dolores commodi cum et illo 
                                aspernatur.
                            </p>
                        </div>

                        <h2 class='text-xl text-[#232342] font-["Abril_Fatface"]'>Languages</h2>

                        <div class='flex flex-wrap gap-6'>
                            <div class='w-56 relative'>
                                <h3 class='flex font-["Poppins"] text-md'>French<span class='ml-auto'>Native</span></h3>
                                <span class='absolute flex w-[100%] h-2 bg-amber-500'></span>
                                <span class='absolute flex w-[100%] h-2 bg-violet-500'></span>
                            </div>

                            <div class='w-56 relative'>
                                <h3 class='flex font-["Poppins"] text-md'>English<span class='ml-auto'>Fluent</span></h3>
                                <span class='absolute flex w-[100%] h-2 bg-amber-500'></span>
                                <span class='absolute flex w-[65%] h-2 bg-violet-500'></span>
                            </div>
                        </div>

                        <h2 class='text-xl text-[#232342] font-["Abril_Fatface"]'>Educational background</h2>

                        <div class='flex flex-wrap gap-6'>
                            <div class='w-56 flex flex-col gap-2'>
                                <h3 class='flex font-["Poppins"] text-md'>11/2021 - 07/2022<span class='ml-auto'>Bac +2</span></h3>
                                <p class='font-["Poppins"] text-xs'>Training Developer Web & Web Mobile</p>
                            </div>

                            <div class='w-56 flex flex-col gap-2'>
                                <h3 class='flex font-["Poppins"] text-md'>2019 - 2020<span class='ml-auto'>High school</span></h3>
                                <p class='font-["Poppins"] text-xs'>BAC PRO AMA St.Martin - Palaiseau (France)</p>
                            </div> 

                            <div class='w-56 flex flex-col gap-2'>
                                <h3 class='flex font-["Poppins"] text-md'>2016 - 2019<span class='ml-auto'>High school</span></h3>
                                <p class='font-["Poppins"] text-xs'>STI2D L’essouriau - Les Ulis (France)</p>
                            </div>
                        </div>

                    </div>
                    
                    <div class='hidden sm:flex h-screen sm:w-5/12 px-20 justify-center relative'>
                        <img class='absolute h-[50vh] top-96' src='assets/character-cv.svg'>
                    </div>
                </div>
            </div>

            <div id='projects' class='flex flex-col overflow-hidden pt-20 bg-gray-100'>
                <h2 class='text-center text-[2.1em] text-[#232342] font-["Abril_Fatface"] sm:py-6 py-16'>My projects</h2>

                <p class='text-center px-6 '>Here are some projects i think you should check out.</p>

                <div class='flex flex-wrap w-2/3 justify-center gap-16 py-32 m-auto'>
                    <a href='weakfish.php' class='rounded flex w-80 h-48 bg-rose-100 bg-cover bg-[url("assets/chess.png")]'>
                        <div class='project rounded flex flex-col justify-center gap-2 backdrop-blur-sm w-full bg-white/50 overflow-hidden'>
                            <h2 class='project-title font-["Poppins"] text-lg font-bold mx-auto'>Weakfish</h2>
                            <img class='project-zoom w-8 h-8 mx-auto' src='assets/zoom-croissant-symbole.png'>
                        </div>
                    </a>

                    <a href='https://github.com/Lxdovic/indigo-blog' class='rounded flex w-80 h-48 bg-rose-100 bg-cover bg-[url("assets/blog.png")]'>
                        <div class='project rounded flex flex-col justify-center gap-2 backdrop-blur-sm w-full bg-white/50 overflow-hidden'>
                            <h2 class='project-title font-["Poppins"] text-lg font-bold mx-auto'>Blog template</h2>
                            <img class='project-zoom w-8 h-8 mx-auto' src='assets/zoom-croissant-symbole.png'>
                        </div>
                    </a>

                    <a href='https://github.com/Lxdovic/orichess' class='rounded flex w-80 h-48 bg-rose-100 bg-cover bg-[url("assets/chess.png")]'>
                        <div class='project rounded flex flex-col justify-center gap-2 backdrop-blur-sm w-full bg-white/50 overflow-hidden'>
                            <h2 class='project-title font-["Poppins"] text-lg font-bold mx-auto'>Orichess</h2>
                            <img class='project-zoom w-8 h-8 mx-auto' src='assets/zoom-croissant-symbole.png'>
                        </div>
                    </a>

                    <a href='https://github.com/Lxdovic/tesla-clone' class='rounded flex w-80 h-48 bg-rose-100 bg-cover bg-[url("assets/tesla.png")]'>
                        <div class='project rounded flex flex-col justify-center gap-2 backdrop-blur-sm w-full bg-white/50 overflow-hidden'>
                            <h2 class='project-title font-["Poppins"] text-lg font-bold mx-auto'>Tesla</h2>
                            <img class='project-zoom w-8 h-8 mx-auto' src='assets/zoom-croissant-symbole.png'>
                        </div>
                    </a>

                    <a href='https://github.com/Lxdovic/portfolio' class='rounded flex w-80 h-48 bg-rose-100 bg-cover bg-[url("assets/portfolio.png")]'>
                        <div class='project rounded flex flex-col justify-center gap-2 backdrop-blur-sm w-full bg-white/50 overflow-hidden'>
                            <h2 class='project-title font-["Poppins"] text-lg font-bold mx-auto'>This website</h2>
                            <img class='project-zoom w-8 h-8 mx-auto' src='assets/zoom-croissant-symbole.png'>
                        </div>
                    </a>
                </div>
            </div>

            <div id='contact' class='h-screen flex flex-col overflow-hidden py-20 bg-white'>
                <h2 class='text-center text-[2.1em] text-[#232342] font-["Abril_Fatface"] sm:py-6 py-16'>Contact me</h2>

                <p class='text-center px-6 '>Send me a message! I'll answer as fast as i can.</p>

                <div class='flex sm:w-1/3 gap-16 py-16 sm:py-32 m-auto justify-center'>
                    <form action='contact.add.php' method='post' class='sm:p-1 p-6 flex flex-col justify-center gap-4'>
                        <input class='indent-2 w-[50vw] border-2 border-gray-100 rounded sm:w-1/2' id='email' type='email' name='email' placeholder='email'>
                        <input class='indent-2 w-[50vw] border-2 border-gray-100 rounded sm:w-1/2' id='title' type='text' name='title' placeholder="What's that about ?">
                        <textarea class='indent-2 sm:w-full w-[80vw] border-2 border-gray-100 rounded' maxlength='500' id='content' name='content' rows="10" cols="100" placeholder="Your message"></textarea>
                        <input class='hover:cursor-pointer' type='submit'>
                    </form>
                </div>
            </div>

<?php include('views/layout/footer.inc.php'); ?>