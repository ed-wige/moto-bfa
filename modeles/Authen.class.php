<?php
class Authen{

   private $base;
   function __construct(){
    $base=$GLOBALS["base"];
   }

    function isAuthen($id,$password){
        $aut=$this->base->prepare("SELECT * FROM authen WHERE username=:user AND password=:pwd");
        $conn=$aut->execute(array(
            "user"=>$id,
            "pwd"=>$password
        ));
        if(count($min->fetch()!=0)){
            return $min->fetch();
        }
        else{ 
            return false;
        }
    }
}
?>
