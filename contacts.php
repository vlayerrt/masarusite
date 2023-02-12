<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="media/logo1.ico" type="image/x-icon">
    <title>MasaruGang - Contacts</title>
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
                    <h2>Contacts</h2>
                    <p>Email: masarugangstudio@gmail.com </p>
                    <p>Phone: 8 (495) 049-14-88 </p>

                    <p>Address:</p>
                    <div class="map">
                        <iframe src="https://yandex.ru/map-widget/v1/-/CCUrEKXl2C" width="900" height="400" frameborder="1" allowfullscreen="true" style="position:relative;">
                        </iframe>
                    </div>
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
