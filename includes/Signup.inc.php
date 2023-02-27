<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $uid = htmlspecialchars($_POST["uid"], ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');
        $pwd = htmlspecialchars($_POST["pwd"], ENT_QUOTES, 'UTF-8');
        $pwdrepeat = htmlspecialchars($_POST["pwdrepeat"], ENT_QUOTES, 'UTF-8');
        include ("../classes/Dbh.php");
        include ("../classes/Login.php");
        include ("../classes/Signup.php");
        include ("../classes/SignupController.php");
        include ("../classes/ProfileInfo.php");
        include ("../classes/ProfileInfoController.php");

        $signup = new SignupController($uid, $email, $pwd, $pwdrepeat);
        $signup->signupUser();

        $userId = $signup->fetchUseId($uid);
        $profileInfo = new ProfileInfoController($userId, $uid);
        $profileInfo->defaultProfileInfo();
        header("location: ../index.php?error=none");
    }