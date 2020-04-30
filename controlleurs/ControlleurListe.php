<?php
function toUpdate($statu){
    if ($statu=='vendu') {
        echo('hidden');
    }
}
$motos=new MotoManager();
$motoliste=$motos->getMarque();
$nombre=$motos->getNombre();
if(isset($_GET["numero_de_serie"])){
    $motos->supprimer($_GET["numero_de_serie"]);
}
if(isset($_GET["marque"])){
    $motoliste=$motos->getMarque($_GET["marque"]);
    $nombre=$motos->getNombre($_GET["marque"]);
}
require_once ("../vues/liste.php")

?>