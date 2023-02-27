<?php
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id=$_SESSION["userid"];
        $uid=$_SESSION["useruid"];

        $about = htmlspecialchars($_POST["about"], ENT_QUOTES, 'UTF-8');
        $introtitle = htmlspecialchars($_POST["introtitle"], ENT_QUOTES, 'UTF-8');
        $introtext = htmlspecialchars($_POST["introtext"], ENT_QUOTES, 'UTF-8');

        include ("../classes/Dbh.php");
        include ("../classes/ProfileInfo.php");
        include ("../classes/ProfileInfoController.php");

        $profileInfo = new ProfileInfoController($id, $uid);
        $profileInfo->updateProfileInfo($about, $introtitle, $introtext);
        header("location: ../profile.php?error=none");
    }