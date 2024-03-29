<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="media/logo1.ico" type="image/x-icon">
    <title>MasaruGang - Mist The Game</title>
</head>
<body>
    <header>
        <section>
            <nav class="header">
                <ul class="navlist">
                    <a href="index.php"><li>Главная</li></a> 
                    <a href="about.php"><li>Кто мы такие?</li></a>
                    <a href="mist.php"><li>Mist The Game</li></a>
                    <a href="contacts.php"><li>Контакты</li></a>
                </ul>
                <?php 
                    if($_COOKIE['user'] == ''): 
                ?>
                <span class="logreg">
                    <p><a href="loginpage.php">Log In</a> / <a href="regpage.php"> Register</a></p>
                </span>
                <?php 
                    else: 
                ?>
                    <span class="logreg">
                        <p><?=$_COOKIE['user']?> - <a href="exit.php"> Exit</a></p>
                    </span>
                
                <?php 
                    endif; 
                ?>
            </nav>
            
        </section>
    </header>
    <div class="main">
        <section>
            <div class="head-logo">
                <div class="title">
                    <img src="media/mistlogo.png">
            </div>
            <div class="maininfo">
                <div class="pagetext">

                    <h2>Mist The Game</h2>
                    <p>You have arrived in MistLands — a fantasy world where the seven elements flow and converge.
In the distant past, the Archons granted mortals unique elemental abilities. With the help of such powers, people formed a bountiful homeland out of the wilderness. However, 500 years ago, the collapse of an ancient civilization turned the universe upside down...
Though the calamity the world suffered has ceased, peace has yet to be restored.
                    </p>
                    
                </div>
                
                <div class="pagetext">
                    <p class="aligncenter"><img class="mistimg" src="media/map.jpg" width="800px"></p>
                    </div>
                <div class="pagetext">

                    <p id="misttext">Action starts in Japanese village, located on island. Here you can exchange the money from defeated enemies for new sword, armor and experience scrolls. EXP scroll will provide you a skill point, required to obtain or upgrade skill
                        Around the Mist Village will be a fog, which disappear than you kill all monsters and disactivate special "fog generator". After you destroy all "fog generators" you can come down to caves with labyrinth, puzzles and special bosses.
                        Player can use skills, sword and hands to produce a damage.
                    </p>
                    <div class="pagetext">

                        <h2>Main Menu</h2>
                        <p class="aligncenter"><img class="mistimg" src="media/mainmenu.jpg" width="800px"></p>
                        
                    </div>

                </div>

                <div class="pagetext">
                    <h2>Mist Island</h2>

                    <p>The main territory An Isolated Archipelago Far East of MistLands
Overcome endless thunderstorms and set foot on the islands of red maple and cherry blossoms. On winding shores and towering cliffs, and in forests and mountains full of secrets, witness the Eternity pursued by Her Excellency, the Almighty Narukami Ogosho.
                    </p>
                    <p class="aligncenter">
                        <img class="mistimg" src="media/isl.jpg" width="600px">
                        <img class="mistimg" src="media/decor.jpg">
                        <img class="mistimg" src="media/prop1.jpg" width="200px">
                        <img class="mistimg" src="media/house.jpg" width="400px">
                        <img class="mistimg" src="media/room.jpg" width="400px">



                    </p>


                </div>
                
                <div class="pagetext">
                    <h2>Main Character</h2>
                    <p>The main character Faruzan An outstanding scientist of the Academy "a century ago" and one of the founders of ancient mechanics as a field of study. Although she hailed from Harawat, she was renowned for her talents in mechanical engineering throughout Sumeru... Although those honors had been forgotten by the river of time, just like herself.</p>
                    <h2>Character Concepts:</h2>
                    
                    <p class="aligncenter"><img class="mistimg" src="media/mainchar.jpg" width="500px"><img class="mistimg" src="media/mainchar.png"><img class="mistimg" src="media/char.jpg" width="500px"></p>
                </div>
                    
                        
            </div>
        </section>
    </div>
    <footer>
        <section>
            <div class="footblock">
                <nav class="footnav">
                    <ul class="footlist">
                        <li><img src="media/logo1.png" height="24px"></li>
                        <a href="index.php"><li>Главная</li></a> 
                    <a href="about.php"><li>Кто мы такие?</li></a>
                    <a href="mist.php"><li>Mist The Game</li></a>
                    <a href="contacts.php"><li>Контакты</li></a>
                    </ul>
                </nav>        
            </div>
            <div class="footblock">
                <div>
                    <p>© 2022 Masaru Ltd. All Rights Reserved.</p>
                </div>
                <div class="policy">
                    <p><a href="/copyright/">Privacy &amp; Cookie Policy</a>
                    <a href="/terms-of-use/">Terms of Use</a></p>
                </div>
            </div>
        </section>
    </footer>
</body>
</html>
