<?php session_start();
    if(!isset($_SESSION['usuario'])){
        header("location:perfil.php");
    }
?>
<?php require ('./layouts/header.php') ?>

  <h1 class="mt-4"><?php echo $_SESSION['usuario']; ?></h1>
  <p>Panel de control de usuario</p>

  <?php require ('./layouts/footer.php') ?>