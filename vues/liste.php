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
<div class="d-flex justify-content-between p-4">
<span class=""><b>Nombres :<?php echo $nombre?></b></span>
<div class="d-flex">
<span class="pt-1"><b>Filtrer par marque :</b></span>
<a href="index.php?page=ControlleurListe" class="btn btn-light">TOUS</a>
<a href="index.php?page=ControlleurListe&marque=Yamaha" class="btn btn-light">YAMAHA</a>
<a href="index.php?page=ControlleurListe&marque=Rato" class="btn btn-light">RATO</a>
<a href="index.php?page=ControlleurListe&marque=Kaizer" class="btn btn-light">KAIZER</a>
</div>
</div>
<table class="table table-bordered table-striped table-responsive">
    <thead>
       <th>Numero de serie </th>
       <th>Marque </th>
       <th>Modèle</th>
       <th>Cylindre</th>
       <th>Categorie</th>
       <th>Prix</th>
       <th>Détail</th>
       <th>supprimer</th>
    </thead>
    <tbody>
        <?php
        foreach ($motoliste as $moto) {
        ?>
        <tr>
          <td><?php echo $moto->numero_de_serie(); ?></td>
          <td><?php echo $moto->marque(); ?></td>
          <td><?php echo $moto->modele(); ?></td>
          <td><?php echo $moto->cylindre(); ?></td>
          <td><?php echo $moto->categorie() ?></td>
          <td><?php echo $moto->prix() ?></td>
          <td>
           <a href="index.php?page=ContolleurFormulaire&numero_de_serie=<?php echo $moto->getsnumero_de_serie(); ?>" class="btn btn-success">Update</a>
           <!-- <a href="index.php?page=vente&serie=<?php echo $moto->getserie(); ?>" class="btn btn-info" <?php toUpdate($moto->getdisponibilite()) ?>>Vendre</a> -->
           <a href="index.php?page=ControlleurListe&snumero_de_serie=<?php echo $moto->getnumero_de_serie(); ?>" class="btn btn-danger">Delete</a>
           
           </td>
        </tr>
        <?php
        }
        ?>
    </tbody>

</table>
<a class="btn btn-primary" href="#" role="button">Link</a>

<!-- < <section class="col-md-6 bg-info">
      <h1 style="text-align:center">Ajout D'une Nouvelle Moto</h1>
  </section> -->
<!-- <button> <a href="formulaire.php">Nouveau</a></button> -->
<?php
require_once ("footer.php");
?>    
  