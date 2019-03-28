<?php
include  $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-white">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-6 col-12 d-flex">
    <div class="card border-0 shadow small mt-3 ml-md-5 flex-fill mx-5">
      <img class="w-50 d-block mx-auto mt-5" src="../../assets/index/gghome1.png" alt="">
    </div>
  </div>
  <div class="col-md-6 col-12 d-flex">
    <div class="card border-0 mx-5 flex-fill">
      <h3 class="mt-3 text-center display-4">Nom produit</h3>
      <h6 class="mt-5 ml-md-3 h2"><strong>999€</strong></h6>
      <h6 class="mt-3 ml-md-3"><span class="badge badge-warning">En stock</span></h6>
      <h6 class="mt-5 ml-md-3 font-weight-light"><span class="float-right mt-5">*Livraison gratuite à partir de 100€ d'achat</span></h6>
      <a class="btn btn-warning float-right mx-3 mt-md-3" href="#">Achetez</a>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card border-0 mx-5 mt-5">
        <h4 class="mt-3 text-center">Descriptif technique</h4>
        <h5 class="mt-3 ml-md-3 font-weight-light text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</h5>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="card border-0 shadow-small p-3 mt-5">
        <h4>Jean Bambois <span class="text-warning float-right"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span></h4>
        <div class="comment">
          <h5>Excellent</h5>
          <p class="lead"> Un Excellent produit qu'on ne présente plus.<br>
            Vous pouvez l'acheter les yeux fermés, il est génial.<br>
            Commandé un mardi après-midi et reçu le Jeudi matin.<br>
            Idéal pour les débutants.</p>
          </div>
        </div>
        <div class="card border-0 shadow-small p-3 mt-5">
          <h4>Jean Duvoyaje<span class="text-warning float-right"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span></h4>
          <div class="comment">
            <h5>Super</h5>
            <p class="lead"> Reçu dans les temps.<br>
              Très satisfait je recommande et pour finir la qualité est superbe.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card border-0 shadow-small p-3 mt-5">
          <h4>Jean Peuplu <span class="text-warning float-right"><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></span></h4>
          <div class="comment">
            <h5>Gros problème</h5>
            <p class="lead">Nul !<br>
              Reçu avec 2 semaines de retard, carton déchiré avec le produit endommagé, je ne recommande pas du tout.
             </p>
          </div>
        </div>
        <div class="card border-0 shadow-small p-3 mt-5">
          <h4>Luc Ratif <span class="text-warning float-right"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></span></h4>
          <div class="comment">
            <h5>Bon produit</h5>
            <p class="lead"> Bon produit en soit, je regrette quand même de ne pas avoir attendu les soldes car 1 semaine plus tard il était 35% moins cher. il faut aussi savoir que la concurrence est au même pied d'égalité et souvent moins cher</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  include $_SERVER['DOCUMENT_ROOT'].'/includes/footer/footer.php';
  ?>
