<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<body>
  <h1 class="text-center mt-5">Mon espace client</h1>
  <div class="row m-md-5 m-2">

    <div class="col-12 col-md-9 mx-0 mx-md-4">
      <div class="card shadow-small border-0 p-4">
        <h4>Mes commandes StockPro</h4>
      </div>
    </div>

    <div class="col-12 col-md mt-5 mt-md-0">
      <h4>Bonjour <?=$_SESSION['prenom'].' '.$_SESSION['nom']?> <a class="text-right float-right mt-2 text-dark" href="../process/logout.php"><i data-feather="log-out"></i></a></h6>
      <ul class="list-group list-group-flush">
        <li class="list-group-item h6 py-4"><i data-feather="truck" style="width:30px" class="mr-3"></i> Suivi de vos livraisons</li>
        <li class="list-group-item h6 py-4"><i data-feather="package" style="width:30px" class="mr-3"></i> Retourner un article</li>
        <li class="list-group-item h6 py-4"><i data-feather="file-minus" style="width:30px" class="mr-3"></i> Accédez à vos factures</li>
        <li class="list-group-item h6 py-4"><i data-feather="hard-drive" style="width:30px" class="mr-3"></i> Faire réparer un article</li>
      </ul>

    </div>

  </div>
</body>

<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/footer/footer.php';
?>
