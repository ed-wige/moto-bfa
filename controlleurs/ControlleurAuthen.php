<?php
require_once ("../modeles/Db.class.php");
  require_once ("../vues/authentification.php");
    function verif()
{
    $db=new Db();
    $base=$db->getBase();
  
if(isset($_POST['user']) AND isset($_POST['pwd']))
{
    $user=htmlspecialchars($_POST['user']);
    $pwd=htmlspecialchars($_POST['pwd']);

        $requette=$base->prepare('SELECT * FROM authen WHERE Username =:user AND Password =:pwd');
        $requette->execute(array('user'=>$user, 'pwd'=>$pwd));
        $rep=$requette->fetch();
        if($rep)
        {
            //   header("location:../vues/formulaire.php");
              header("location:index.php?page=ControlleurFormulaire");

        
        }
        else
        {
            $erreur="mot de passe ou nom d'utilisateur incorect";
            return $erreur;
        }
}    
}

?>

    
