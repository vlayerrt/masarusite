<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="media/logo1.ico" type="image/x-icon">
    <title>MasaruGang</title>
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
                <div class="title"><div class="logo"></div><h1 id="title"><span id="title-span">Masaru</span>Gang</h1></div>
                <p class="afterlogo">
                    A group of enthusiasts with no experience in developing <br>computer games
                    </p>
            </div>
            <div class="maininfo">
                <div class="pagetext">
                    <p>Добро пожаловать на сайт студии!</p>
                    <p>Наша команда - интузиасты-программисты, осваивающие все возможности геймдева!</p>
                    <p>Всей дружной командой мы создаем игру: <a href="mist.php">Mist The Game</a>.</p>

                    <p>
                        At MasaruGang, we pour our hearts and souls into everything we create. We embrace our core values every day so that we can creating epic entertainment experiences for all our players. It doesn’t matter who you are or where you’re located—if you’re a member of our evolving and vibrant community, working with us at one of our offices around the globe, or taking a piece of MasaruGang with you’re welcome here.</p>
                        <h2 id="caption">What We Stand For?</h2>
 
                        <p>Dedicated to creating the most epic entertainment experiences... ever. MasaruGang’s eight core values represent the principles and beliefs that have guided our company throughout the years.
                    </p>
                    

                </div>  
                <h2 id="caption">Our team</h2>
                    <ul>
                        <li>Dmitriy <span id="title-span">Masaru</span> Merinov - boss, game-designer, producer, sound-designer, soft-programmer, art-director</li>
                        <li>Vladislav <span id="title-span">vlayerrt</span> Ershov - main programmer, soft-level design.</li>
                        <li>Daniel <span id="title-span">CHVRXN</span> Savitskiy - main designer, level design.</li>
                        <li>Daniel <span id="title-span">MeganFoxTerminator</span> Komarov - soft-producer, sound designer, marketing</li>
                        <li>Michael <span id="title-span">Mihromkahail</span> Kalashnikov - lead-painter, animnation, soft-art-director.</li>
                        <li>Denis <span id="title-span">kapotnyabanana</span> Karabchikov - soft-painter</li>
                    </ul>
                        
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
