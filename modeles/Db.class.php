<?php
class Db
{
   private $base;
   function __construct(){
    $this->base=new PDO("mysql:host=localhost;dbname=moto_bf","root","");
   }
   function getBase(){
   return $this->base;
   }
}
?>
