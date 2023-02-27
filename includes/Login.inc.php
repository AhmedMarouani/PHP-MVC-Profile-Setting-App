<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $uid = htmlspecialchars($_POST["uid"], ENT_QUOTES, 'UTF-8');
        $pwd = htmlspecialchars($_POST["pwd"], ENT_QUOTES, 'UTF-8');
        include ("../classes/Dbh.php");
        include ("../classes/Login.php");
        include ("../classes/LoginController.php");

        $login = new LoginController($uid, $pwd);
        $login->loginUser();
        header("location: ../index.php?error=none");
    }