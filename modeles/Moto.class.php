<?php
class Moto{
  private $numero_de_serie;
  private $marque;
  private $modele;
  private $cylindre;
  private $categorie;
  private $prix;
  
  // public function __construct(array $data){
  //   $this->hydrate($data);
  // }
  
  
  public function hydrate(array $data){
    foreach ($data as $key => $value){
      $method='set'.ucfirst($key);
      if(method_exists($this,$method)){
        $this->$method($value);
      }
    }
  }

   //les setteurs
   public function setNuméro_de_serie($numero_de_serie){
    if (is_string($numero_de_derie)){
      $this->numero_de_serie=$numero_de_derie;
    }
  }

  public function setMarque($marque){
    if (is_string($marque)){
      $this->marque=$marque;
    }
  }

  public function setModele($modele){
    if (is_string($modele)){
      $this->modele=$modele;
    }
  }

  public function setCylindre($cylindre){
    if (is_string($cylindre)){
      $this->cylindre=$cylindre;
    }
  }

  public function setCatégorie($categorie){
    if (is_string($categorie)){
      $this->categorie=$categorie;
    }
  }

 

  public function setPrix($prix){
    if (is_string($prix)){
      $this->prix=$prix;
    }
  }


   //les getters
   public function numero_de_serie(){
    return $this->numero_de_serie;
   }

   public function marque(){
    return $this->marque;
   }

   public function modele(){
    return $this->_modele;
   }

   public function cylindre(){
    return $this->cylindre;
   }

   public function categorie(){
    return $this->categorie;
   }

  

   public function prix(){
    return $this->prix;
   }
}
