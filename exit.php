<?php 
    setcookie('user', $user['login'], time() * 0, "/");
    header('Location: /');
?>