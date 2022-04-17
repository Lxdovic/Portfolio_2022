<?php include('views/layout/nav.inc.php'); ?>

            <div id='weakfish-about' class='bg-gray-100 md:p-20 p-6'>
                <div class='flex flex-col w-full justify-center p-20'>
                    <h1 class='text-center font-["Abril_Fatface"] text-[#232342] text-[2.1em]'>Weakfish </h1>
                    <a class='text-center text-violet-500 underline text-xs font-["Poppins"]' href='https://github.com/Lxdovic/Weakfish'>view on Github</a>
                </div>

                <div class='flex flex-col md:flex-row justify-center gap-16'>
                    <div class='flex flex-col md:w-5/12'>

                        <p class='text-justify py-4'>
                            This is a simple chess computer written in Javascript. The name was inspired by the famous 
                            <a class='text-violet-500 underline' href='https://en.wikipedia.org/wiki/Stockfish_(chess)'>Stockfish</a>, which dominated the chess 
                            computer scene for years. (Only the name was inspired, mine is really weak)
                        </p>

                        <p class='text-justify py-4'>
                            So what exactly does a chess computer? 
                            It plays chess as you would expect but the interesting part is : How does 
                            it work?

                        </p>

                        <p class='text-justify py-4'>
                            Chess is a turn-based game, and for most trun-based game computers, we use an algorithm 
                            called <a  class='text-violet-500 underline'  href='https://www.chessprogramming.org/Minimax'>minimax.</a>
                            For short, we represent the game as a tree of possibilities and we iterate 
                            through them as fast as possible to find the best move.
                        </p>

                        <p class='text-justify py-4'>
                            Many improvements to the basic minimax algorithm exists such as <a  class='text-violet-500 underline'  href='https://www.chessprogramming.org/Negamax'>negamax</a> which in our case is slightly faster than minimax. 
                            And this is the one I used for my project.
                        </p>

                        <p class='text-justify py-4'>
                            Now a simple minimax or negamax algorithm won't take us really far into the search. It needs the help of other algorithms to make it's task easier.
                            This is where <a  class='text-violet-500 underline'  href='https://www.chessprogramming.org/Alpha-Beta'>alpha-beta pruning</a> comes in, the goal of this algorithm is to cut as many branches 
                            as possible to reduce the amount of work negamax has to do. And now how do we get this to be even faster? First there's one thing you need to know about 
                            alpha-beta. It cuts branches of the tree by comparing the result of each branch with the best it found, so if it finds a good branch early, it'll go faster. 
                            You may have already guessed the next step, we need to use <a  class='text-violet-500 underline'  href='https://www.chessprogramming.org/Move_Ordering'>move ordering</a> algorithms. For a simple move 
                            ordering, we need to guess which move is going to have higher chances of being a good move. First we can look for captures as every capture that gives us a positive value
                            (ex : pawn for a queen) will be a decent, we can also look for checks or promotions.
                        </p>

                        <p class='text-justify py-4'>
                            Did this seem complicated? Well these are only the basics of a chess computer. Nowadays computers dominate over humans, there are chess competitions where every computer gets 
                            a rating. The best ones reach around 3500 elo (rating) and Magnus carlsen, the highest rated player, reached a peak of 2882 in 2014. Computers are far ahead now.
                        </p>
                    </div>

                    <div class='flex flex-col md:w-5/12'>
                        <link rel='stylesheet' href='weakfish/css/chessboard-1.0.0.css'>
                        <script src='weakfish/js/chess.js'></script>
                        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
                        <script src='weakfish/js/chessboard-1.0.0.js'></script>
                        <span id='timeblack' class='text-center text-xl bg-gray-700 text-violet-300 py-1 font-["Poppins"]'>10:00</span>
                        <div id='board-container' style='width: 100%'></div>
                        <span id='timewhite' class='text-center text-xl bg-gray-700 text-violet-300 py-1 font-["Poppins"]'>10:00</span>
                        <script defer src='weakfish/main.js'></script>
                    </div>
                </div>
            </div>

            <div id='weakfish-comment' class='bg-white md:p-20 p-6'>
                <h2 class='text-center font-["Abril_Fatface"] text-[#232342] text-[2.1em]'>Comment section</h2>

                <div class='p-20'>
                    <?php foreach ($data as $onedata){ ?>
                        <div class='flex flex-col gap-2 m-auto md:w-1/3'>
                            <p class=''><?= $onedata['name'] ?></p>
                            
                            <p class='bg-gray-100 rounded border-2 border-gray-200'>
                                <?= $onedata['content'] ?>
                            </p>
                            
                            <small class='ml-auto'><?= $onedata['date'] ?></small>

                            <hr class='py-2'>
                        </div>
                    <?php } ?>
                </div>

                <h2 class='text-center font-["Poppins"] text-[#232342] text-[1em]'>Add a comment</h2>
                
                <div class='flex sm:w-1/3 gap-16 py-16 m-auto justify-center'>
                    <form action='comment.add.php' method='post' class='sm:p-1 p-6 flex flex-col justify-center gap-4'>
                        <input class='indent-2 w-[50vw] border-2 border-gray-100 rounded sm:w-1/2' required id='name' type='text' name='name' placeholder='name'>
                        <textarea class='indent-2 sm:w-full w-[80vw] border-2 border-gray-100 rounded'  maxlength='500' required id='content' name='content' rows="10" cols="100" placeholder="Your comment"></textarea>
                        <input class='hover:cursor-pointer' type='submit'>
                    </form>
                </div>
            </div>

<?php include('views/layout/footer.inc.php'); ?>