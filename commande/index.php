<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
if(isset($_POST['submit'])){
  $mail = htmlspecialchars($_POST['mail']);
  $password = $_POST['password'];
  $user = new Utilisateur;
  $response = $user->connexion($mail,$password);
  $display='d-block';
}else{
  $response =NULL;
  $display='d-none';
}
 ?>
<body>
  <div class="alert alert-danger container mt-5 <?= $display?>" role="alert">
    <i class="fas fa-exclamation-triangle"></i> <?=$response?>
  </div>

  <div class="container mt-5 mb-5">
    <div class="row ">

      <div class="col-6 mt-3 d-flex">
        <div class="card shadow-small border-0 p-3 flex-fill">
          <h2>Etes vous déjà client ?</h2>
          <form method="post" action="">
            <label>Adresse email:</label>
            <input type="mail" name="mail" class="form-control" />
            <label class="mt-2">Mot de passe</label>
            <input type="password" name="password" class="form-control"/>
            <button type="submit" name="submit" class="btn btn-warning mt-3 d-block ml-auto">Me connecter</button>
          </form>
        </div>
      </div>

      <div class="col-6 mt-3 d-flex">
        <div class="card shadow-small border-0 p-3 flex-fill">
          <h2>Nouveau client ?</h2>
          <p class="text-muted">Vous devez être connecté afin de passer commande</p>
          <a class="btn btn-warning w-75 d-block m-auto" href="../inscription">M'inscrire</a>
        </div>
      </div>

    </div>
  </div>
</body>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/footer/footer.php';
 ?>
