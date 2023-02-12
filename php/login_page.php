<?php
    session_start();
    $login = filter_var(trim($_POST['login']));
    $psw = filter_var(trim($_POST['psw']));

    $pswhash = md5($psw."1212spwppfd2123");

    require("connectdb.php");
    
    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `psw` = '$pswhash'");
    $user = $result->fetch_assoc(); 

    if(mysqli_num_rows($result) == 0) {
        $_SESSION['message'] = "User is not found";
        header('Location: ../loginpage.php');
        exit();
    }

    setcookie('user', $user['login'], time() + 3600 * 24, "/");
    $mysql->close();
    header('Location: /');
?>