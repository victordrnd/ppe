<?php
if(isset($_SESSION['id'])){
  $right = '<div class="ml-auto mr-4 d-none d-md-block">
  <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="inbox"></i>
  '.$_SESSION['nom'].' '.$_SESSION['prenom'].'
  </a>
  <div class="dropdown-menu border-0 shadow-small" aria-labelledby="dropdownMenuLink" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
  <a class="dropdown-item" href="'.ROOTDIR.'client"><i data-feather="bookmark"></i> Espace Membre</a>
  <a class="dropdown-item" href="'.ROOTDIR.'client/"><i data-feather="bell"></i> Mes réservations</a>
  <a class="dropdown-item" href="'.ROOTDIR.'client/process/logout.php"><i data-feather="power"></i> Déconnexion</a>
  </div>
  </div>
  </div>';
}
else{
  $right = '
  <li class="nav-item col-1 ml-auto d-none d-md-block"><a class="nav-link active text-dark mt-0 d-none d-md-block" href="'.ROOTDIR.'panier/"><i class="fas fa-shopping-cart"></i> <span class="badge badge-primary">0</span></a></li>
  <li class= rounded  d-none d-md-block text-dark" style="max-width:160px;text-align:center;">
  <a class="nav-link active color-dark h6 d-none d-md-block" href="'.ROOTDIR.'inscription/" style="color:#212529">INSCRIPTION</a>
  </li>
  <a class="nav-link shadow-sm ml-3  h6 bg-white rounded  d-none d-md-block" href="'.ROOTDIR.'connexion/">CONNEXION</a>';
}
if(isset($_SESSION['id']) && (!isset($_SESSION['CLIVerif']) || $_SESSION['CLIVerif'] == 0) ){
  $right = '<div class="ml-auto mr-4 d-none d-md-block">
  <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="inbox"></i>
  '.$_SESSION['nom'].' '.$_SESSION['prenom'].' <span class="badge badge-pill badge-warning text-white"><i class="fas fa-exclamation"></i></span>
  </a>
  <div class="dropdown-menu border-0 shadow-small" aria-labelledby="dropdownMenuLink" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
  <span class="small p-3 text-center text-warning">Pensez à vérifier votre mail</span>
  <a class="dropdown-item" href="'.ROOTDIR.'client"><i data-feather="bookmark"></i> Espace Membre</a>
  <a class="dropdown-item" href="'.ROOTDIR.'client/"><i data-feather="bell"></i> Mes réservations</a>
  <a class="dropdown-item" href="'.ROOTDIR.'client/process/logout.php"><i data-feather="power"></i> Déconnexion</a>
  </div>
  </div>
  </div>';
}
?>
<html>
<title>StockPro</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<meta charset="utf-8">
<script src="https://unpkg.com/feather-icons"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Audiowide|Orbitron:900" rel="stylesheet">
<header>
  <ul class="nav shadow-sm p-3 mb-5 " style="min-height:70px;">
    <li class="nav-item d-none d-md-block">
      <a class="nav-link active text-dark" href="#"><i class="fab fa-mailchimp fa-2x"></i></a>
      </li
      <li class="nav-item">
        <a class="nav-link color-grey  d-none d-md-block" href="<?=ROOTDIR?>">ACCUEIL</a>
      </li>
      <li class="nav-item">
        <a class="nav-link color-grey d-none d-md-block" href="<?=ROOTDIR?>products/">PRODUITS</a>
      </li>
      <li class="stockpro"><a class="text-dark no-underline" href="<?=ROOTDIR?>">STOCKPRO</a></li>
      <?php echo $right ?>
      <!--Hamburger-->
      <li class="float-right d-block d-sm-none"><a data-toggle="collapse" class="text-dark" href="#navbarmobile"><i data-feather="menu" class=" mt-2 ml-2"></i></a></li>
      <div class="collapse bg-white mt-5  d-sm-none" id="navbarmobile">
        <ul class="nav d-block">
          <li class="nav-item "><a class="nav-link color-grey" href="<?=ROOTDIR?>">ACCUEIL</a></li>

          <li class="nav-item"><a class="nav-link color-grey" href="<?=ROOTDIR?>products/">PRODUITS</a></li>

          <li class="nav-item "><a class="nav-link  shadow-sm rounded h6 text-dark" href="<?=ROOTDIR?>connexion">CONNEXION</a> </li>
          <li class="nav-item mt-3"><a class="nav-link rounded  active h6 text-dark" href="<?=ROOTDIR?>inscription/">INSCRIPTION</a></li>
        </ul>
      </div>
    </ul>
  </header>
  <style>
  .color-grey{
    color:#737373 !important;
  }
  .color-grey:hover{
    color:#007bff !important;
  }
  .color-white{
    color:white !important;
  }
  ::-webkit-scrollbar {
    display: none;
  }
  .shadow-small{
    box-shadow: 0 5px 15px rgba(0,0,0,.08);
  }
  .stockpro{
    position:absolute;
    left:50%;
    transform:translateX(-50%);
    font-family: 'Orbitron', sans-serif;
    font-weight:bolder;
    font-size:22px;
  }
  .no-underline:hover{
    text-decoration: none;
  }
  img[src=""] {
    display: none;
  }
</style>
