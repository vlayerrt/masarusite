<?php 
    session_start(); 
    if (isset($_COOKIE['user'])) 
    {
        header('Location: /');
    }
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="media/logo1.ico" type="image/x-icon">
    <title>MasaruGang - Login</title>
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
                <span class="logreg">
                    <p><a href="loginpage.php">Log In</a> / <a href="regpage.php"> Register</a></p>
                </span>
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

            
            <div class="loginform">
                <div class="container">
                    <form action="php/login_page.php" method="post">
                      <h1 id="caption"><span id="title-span">Sign In</span></h1>
                      <hr>
                                        
                      <label for="login"><b>Username</b></label>
                      <input type="text" placeholder="Enter Username" name="login" id="login" required>
                  
                      <label for="psw"><b>Password</b></label>
                      <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
                      <hr>
                      <button type="submit" class="registerbtn">Sign In</button>
                      <?php if (isset($_SESSION['message'])):?>
                        <span class="error_message"><p><?=$_SESSION['message']?></p></span>
                        <?php 
                            endif;
                            unset($_SESSION['message']);
                        ?>
                    </div>
                  
                    <div class="container signin">
                      <p>You don't have an account? <a href="regpage.php">Register</a>.</p>
                    </div>
                  </form>
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
                        <a href="#"><li>Главная</li></a> 
                        <a href="about.html"><li>Кто мы такие?</li></a>
                        <a href="mist.html"><li>Mist The Game</li></a>
                        <a href="contacts.html"><li>Контакты</li></a>
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
