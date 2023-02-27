<?php 
spl_autoload_register("myAutoloader");
function myAutoloader($className){
    $ext = ".php";
    $fullPath = "classes/".$className . $ext;
    if (!file_exists($fullPath)) {
        return false;
    }
    include_once $fullPath;
}
?>