<?php
include_once("Moto.class.php");
class Motomanager{
    private $base;
    function __construct(){
        $this->base=$GLOBALS["base"];
    }

    function getMarque($marque=""){
        $motoliste=[];
        $get=$this->base->query("SELECT * FROM moto");
        if ($marque!=""){
            $get=$this->base->prepare("SELECT * ,COUNT(marque) as nombre FROM moto WHERE marque=:marque");
           $get->execute(array("marque"=>$marque));
        }
        $don= $get->fetchAll();
        foreach($don as $key=>$tom) {
            $moto=new Moto($tom);
            $motoliste[$key]=$moto;
        }
        return $motoliste;
    }
    
    function getNombre($marque=""){
        $nb=$this->base->query("SELECT COUNT(marque) as nombre  FROM moto");
        if ($marque!=""){
            $nb=$this->base->prepare("SELECT COUNT(marque) as nombre FROM moto WHERE marque=:marque");
            $nb->execute(array("marque"=>$marque));
        }
        $nomb=$nb->fetch();
        return $nomb["nombre"];
    }

    function get($serie){
        $tomo=$this->base->prepare("SELECT * FROM moto WHERE numero_de_serie=:numero_de_serie");
       $tomo->execute(array(
            "numero_de_serie"=>$numero_de_serie
        ));
        return new Moto($tomo->fetch()); 
    }

function enregistrer($moto){
    // print_r($motoregister);
    $inserer=$this->base->prepare("INSERT INTO moto(numero_de_serie,marque, modele,cylindre,categorie, prix) VALUES(:numero_de_serie,:marque,:modele,:cylindre,:categorie,:prix)");
    $inserer->execute(array(
        "numero_de_serie"=>$motoregister->getnumero_de_serie(),
        "marqueM"=>$motoregister->getmarque(),
        "modeleM"=>$motoregister->getmodele(),
        "categorie"=>$motoregister->getctegorie(),
        "cylindreM"=>$motoregister->getcylindre(),
        "prixM"=>$motoregister->getprix()
    ));
}

function misejour($motojour){
    $modi=$this->base->prepare("UPDATE moto SET modele=:modeleM,couleur=:couleurM,cylindre=:cylindreM,disponibilite=:disponibleM,marque=:marqueM,numero_de_serie=:serieM,prix=:prixM WHERE numero_de_serie=:serieM");
    $modi->execute(array(

        "modeleM"=>$motojour->getmodele(),
        "couleurM"=>$motojour->getcouleur(),
        "cylindreM"=>$motojour->getcylindre(),
        "disponibleM"=>$motojour->getdisponibilite(),
        "serieM"=>$motojour->getnumero_de_serie(),
        "marqueM"=>$motojour->getmarque(),
        "prixM"=>$motojour->getprix()
    ));
}

function supprimer($motodelete){
    $supr=$this->base->prepare("DELETE FROM moto WHERE numero_de_serie=:numerie_de_serie");
    $supr->execute(array(
        "serieM"=>$motodelete
    ));
}

function stock_vente($statu){
        $nb=$this->base->prepare("SELECT COUNT(marque) as nombre FROM moto WHERE disponibilite=:stat");
        $nb->execute(array("stat"=>$statu));
    $nomb=$nb->fetch();
    return $nomb["nombre"];
}

} 
?>