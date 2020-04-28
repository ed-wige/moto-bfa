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

</div>
       <div class="col-sm-6"><img src="../Style/img/moto.jpg" width="80%"class="img-fluid" alt="Responsive image"></div><br>
  </div>
<div class="row justify-content-around">
  <section class="col-md-5 accueil-nb">
  <div>MOTOS EN STOCK</div>
     <b><?php echo $stock; ?></b>
  </section>

  <?php
require_once ("footer.php");
?>
</body>
  </html>