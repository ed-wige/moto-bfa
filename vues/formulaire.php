
<!Doctype html>
<html>
  <header>
  <meta charset='utf-8'>
  <title>gestion</title>
  <link rel="stylesheet" href="../style/bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</headerd>
<body>
<?php
require_once ("header.php");
?>

<form method="post" action="" enctype="multipart/form-data" data-toggle="validator" id="frm">
<h2> <center > Enregistrement d'une moto </center></h2> <br>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Numéro de serie</label>
              <input type="text" name="numero" class="form-control" id="inputnom" >   
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Marque</label>
              <input type="text" name="marque" class="form-control" id="inputprenom" >
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Modèle</label>
              <input type="text" name="modele" class="form-control" id="inputprenom" >
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Cylindre</label>
              <input type="text" name="cylindre" class="form-control" id="inputville" >
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Categorie</label>
              <input type="text" name="categorie" class="form-control" id="inputprenom" >
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Prix</label>
              <input type="text" name="prix" class="form-control" id="inputville" >
            </div>
          </div>
          <hr>
          <hr>
          <div class="panel-footer">
                  <input type="submit" class="btn btn-success m-2" >
                  <input type="reset" class="btn btn btn-danger m-2" value="Reinitialiser">
                            </div>
                    </div>
     </form> 
                  <hr>
                  <?php
require_once ("footer.php");
?>
                
                  <!-- <section class="col-md-6 bg-info">
      <h1 style="text-align:center">Ajout D'une Nouvelle Moto</h1>
  </section> -->
  </div>
  
  