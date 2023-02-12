<?php
    session_start();
    $login = filter_var(trim($_POST['login']));
    $email = filter_var(trim($_POST['email']));
    $psw = filter_var(trim($_POST['psw']));
    $psw_repeat = filter_var(trim($_POST['psw_repeat']));

    if(strlen($login) < 4 || strlen($login) > 99) {
        $_SESSION['message'] = "Minimum username length is 4.";
        header('Location: ../regpage.php');
        exit();
    }
    else if(strlen($email) < 3 || strlen($email) > 99) {
        $_SESSION['message'] = "Minimum e-mail length is 3.";
        header('Location: ../regpage.php');
        exit();
    }
    else if(strlen($psw) < 5 || strlen($psw) > 99) {
        $_SESSION['message'] = "Minimum password length is 5.)";
        header('Location: ../regpage.php');
        exit();
    }
    else if ($psw != $psw_repeat) {
        $_SESSION['message'] = "Mismatch passwords!";
        header('Location: ../regpage.php');
        exit();
    }

    $pswhash = md5($psw."1212spwppfd2123");

    require("connectdb.php");
    

    $mysql->query("INSERT INTO `users`(`login`, `email`, `psw`) 
    VALUES('$login', '$email', '$pswhash')  ");

    $mysql ->close();
    $_SESSION['successmsg'] = "Successful registration.";
    header('Location: ../regpage.php');
    exit();
?>