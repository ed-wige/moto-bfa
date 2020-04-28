<?php
function toUpdate($statu){
    if ($statu=='vendu') {
        echo('hidden');
    }
}
$motos=new Mmanager();
$motoliste=$motos->getMarque();
$nombre=$motos->getNombre();
if(isset($_GET["serie"])){
    $motos->supprimer($_GET["serie"]);
}
if(isset($_GET["marque"])){
    $motoliste=$motos->getMarque($_GET["marque"]);
    $nombre=$motos->getNombre($_GET["marque"]);
}
$contenu="../vues/liste.vue.php";
require("../vues/app.vue.php");
?>