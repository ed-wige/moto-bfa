<?php
session_start();
// include('../stylesheet.php');

function auto($class){
require_once("../modeles/".$class.".class.php");
}
spl_autoload_register("auto");

$db=new Db();
$base=$db->getBase();

if(isset($_GET["page"])){
    $controleur=$_GET["page"].".php";
     if(file_exists($controleur)){
         include($controleur);
     }
}

?>