
<?php 
// $rep=();
$rep=verif();
if($rep=='ok')
{
    header("location: formulaire.php");
}

 else {
 $erreur=$rep; 
 echo $erreur;
}
?> 
<!Doctype html>
<html>
  <header>
  <meta charset='utf-8'>
  <title>gestion</title>
  <link rel="stylesheet" href="../style/bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</headerd>
<body>
  

<div class="card text-center">
  <div class="card-header">
    <h1>BF-Motors, la référence</h1>
  </div>
  <div class="card-body">
  <h2>Bienvenu sur la plateforme de gestion de vente de motos</h2><br>
  <div class="row">
    <div class="col-sm-6">
    <form class="form-signin" action="" method="POST">
      <h1 class="h3 mb-3 font-weight-normal">Entrez vos identifiants</h1><br>
      <div class="form-group">
							<label for="username" class="sr-only">Username</label>
							<input type="text" class="form-control" name="user" id="username" placeholder="Username" autocomplete="off" required>
						</div>
						<div class="form-group">
							<label for="password" class="sr-only">Password</label>
							<input type="password" class="form-control" name="pwd" id="password" placeholder="Password" autocomplete="off">
						</div>
      <div class="checkbox mb-3">
        <label><input type="checkbox" value="remember-me">Se souvenir de moi</label>
      </div>
      <div class="form-group">
							<button type="submit" class="btn btn-primary"> Se Connecter</button>
						</div>
    </form>
    </div>
    <div class="col-sm-6">
    <img src="../Style/img/moto.jpg" width="50%"class="img-fluid" alt="Responsive image"></div><br>
  </div>
  </body>