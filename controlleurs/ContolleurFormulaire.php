<?php
require_once ("../vues/formulaire.php");

// class ControlleurFormulaire{
$motoManager=new MotoManager(); 
 $moto=new Moto();
$numero_de_serie=" ";
$marque=" ";
$modele=" ";
$cylindre=" ";
$categorie=" ";
$prix=" ";



$titre="Save";
 if(isset($_GET["numero_de_serie"])){
     $moto=$manageur-> get($_GET["numero_de_serie"]);
     $titre="Mettre ajour";
    
$numero='value="'.$moto->getnumero_de_serie().'"';
$marque='value="'.$moto->getmarque().'"';
$modele='value="'.$moto->getmodele().'"';
$cylindre='value="'.$moto->getcylindre().'"';
$categorie='value="'.$moto->getcategorie().'"';
$prix='value="'.$moto->getprix().'"';

}
if(isset($_POST["numero"]) AND isset($_POST["marque"]) AND isset($_POST["modele"]) AND isset($_POST["cylindre"]) AND isset($_POST["categorie"])
AND isset($_POST["prix"])){
    $_POST["disponibilite"]="stock";
    $_POST["nombre"]="";
    $moto=new Moto($_POST);
    if($numero_de_serie!=" "){
     $motomanager->misejour($moto);
    }else{
        $motoManager->enregistrer($moto);
    }

    header("location:index.php?page=ControlleurListe");
    
}

 require_once ("../vues/formulaire.php");
?>