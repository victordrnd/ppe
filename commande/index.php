<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
 ?>
<body>


  <div class="container mt-5 mb-5">
    <div class="row ">

      <div class="col-6 mt-3 d-flex">
        <div class="card shadow-small border-0 p-3 flex-fill">
          <h2>Etes vous déjà client ?</h2>
          <form>
            <label>Adresse email:</label>
            <input type="mail" class="form-control" />
            <label class="mt-2">Mot de passe</label>
            <input type="password" class="form-control"/>
            <button type="submit" class="btn btn-warning mt-3 d-block ml-auto">Me connecter</button>
          </form>
        </div>
      </div>

      <div class="col-6 mt-3 d-flex">
        <div class="card shadow-small border-0 p-3 flex-fill">
          <h2>Nouveau client ?</h2>
          <p class="text-muted">Vous devez être connecté afin de passer commande</p>
          <button class="btn btn-warning w-50 d-block m-auto">M'inscrire</button>
        </div>
      </div>

    </div>
  </div>
</body>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/footer/footer.php';
 ?>
