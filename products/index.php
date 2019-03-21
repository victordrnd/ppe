<?php
header('Content-type: text/html; charset=ISO-8859-1');
$root = '';
include  $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>

<?php
$tel = new Produit;
$telinfo = $tel->getProduitByCat('TEL');
//var_dump($telinfo);
?>

<div style="background-color:white;">
<div  class="nav-link active color-dark h6 d-none d-md-block" style="text-align: center; font-size: 2em;">
  TELEPHONIE
</div>
<div class="container-fluid"  style="padding-bottom: 40px;">
  <div class="row">

     <?php
         foreach($telinfo as $telephone){
      ?>
      <div class="col-sm-1 col-md-3">
        <div class="card border-0 shadow-small mt-3" >
          <img src="https://launches-media.endclothing.com/EE3709_launches_thumbnail.jpg" class="card-img-top" alt="">
          <div class="card-body">
            <h6 class="card-title"><?=$telephone["PRODLibelle"]?></h6>
            <p class="text-muted small text-truncate"><?=$telephone["PRODDesc"] ?></p>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-8"><a href="#" class="btn btn-warning">Ajoutez au panier</a></div>
                    <div class="col-4 mt-auto mb-auto"><strong><?=$telephone["PRODPrix"]?> &euro;</strong></div>
                </div>
            </div>
          </div>
        </div>
      </div>


      <?php
        }
      ?>

    </div>
  </div>
</div>

      <?php
      $imageson = new Produit;
      $infoson = $imageson->getProduitByCat('IMAGESON');
      //var_dump($telinfo);
      ?>
      <div style="background-color: black;">
      <div  class="nav-link active color-dark h6 d-none d-md-block" style="text-align: center; font-size: 2em; padding-top: 50px; color:white;">
        IMAGE & SON
      </div>
      <div class="container-fluid"  style="padding-bottom: 40px;">
        <div class="row">

          <?php
          foreach($infoson as $imageson){
            ?>

            <div class="col-sm-1 col-md-3">
              <div class="card border-0 shadow-small mt-3" >
                <img src="https://launches-media.endclothing.com/EE3709_launches_thumbnail.jpg" class="card-img-top" alt="">
                <div class="card-body">
                  <h6 class="card-title"><?=$imageson["PRODLibelle"]?></h6>
                  <p class="text-muted small text-truncate"><?=$imageson["PRODDesc"] ?></p>
                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-8"><a href="#" class="btn btn-warning">Ajoutez au panier</a></div>
                          <div class="col-4 mt-auto mb-auto px-0"><strong><?=$imageson["PRODPrix"]?> &euro;</strong></div>
                      </div>
                  </div>
                </div>
              </div>
            </div>

            <?php
                }
            ?>
          </div>
      </div>
    </div>



            <?php
            $informatique = new Produit;
            $infoinformatique = $informatique->getProduitByCat('INFORMATIQUE');
            //var_dump($telinfo);
            ?>

            <div  class="nav-link active color-dark h6 d-none d-md-block" style="text-align: center; font-size: 2em;">
              INFORMATIQUE
            </div>
            <div class="container-fluid"  style="padding-bottom: 40px;">
              <div class="row">

                <?php
                foreach($infoinformatique as $informatique){
                  ?>

                  <div class="col-sm-1 col-md-3">
                    <div class="card border-0 shadow-small mt-3" >
                      <img src="https://launches-media.endclothing.com/EE3709_launches_thumbnail.jpg" class="card-img-top" alt="">
                      <div class="card-body">
                        <h6 class="card-title"><?=$informatique["PRODLibelle"]?></h6>
                        <p class="text-muted small text-truncate"><?=$informatique["PRODDesc"] ?></p>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-8"><a href="#" class="btn btn-warning">Ajoutez au panier</a></div>
                                <div class="col-4 mt-auto mb-auto px-0"><strong><?=$informatique["PRODPrix"]?> &euro;</strong></div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <?php
                      }
                  ?>
              </div>
          </div>



          <?php
          $console = new Produit;
          $infoconsole = $console->getProduitByCat('CONS');
          //var_dump($telinfo);
          ?>
          <div style="background-color: black;">
          <div  class="nav-link active color-dark h6 d-none d-md-block" style="text-align: center; font-size: 2em; color:white">
            CONSOLE & JEUX VIDEO
          </div>
          <div class="container-fluid"  style="padding-bottom: 40px;">
            <div class="row">

              <?php
              foreach($infoconsole as $console){
                ?>

                <div class="col-sm-1 col-md-3">
                  <div class="card border-0 shadow-small mt-3" >
                    <img src="https://launches-media.endclothing.com/EE3709_launches_thumbnail.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                      <h6 class="card-title"><?= $console["PRODLibelle"]?></h6>
                      <p class="text-muted small text-truncate"><?=$console["PRODDesc"] ?></p>
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-8"><a href="#" class="btn btn-warning">Ajoutez au panier</a></div>
                              <div class="col-4 mt-auto mb-auto px-0"><strong><?=$console["PRODPrix"]?> &euro;</strong></div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>

                <?php
                    }
                ?>
            </div>
        </div>
      </div>




        <?php
        $objet = new Produit;
        $infoobjet = $objet->getProduitByCat('OBJETSCO');
        //var_dump($telinfo);
        ?>

        <div  class="nav-link active color-dark h6 d-none d-md-block" style="text-align: center; font-size: 2em;">
          OBJET CONNECTE
        </div>
        <div class="container-fluid"  style="padding-bottom: 40px;">
          <div class="row">

            <?php
            foreach($infoobjet as $objet){
              ?>

              <div class="col-sm-1 col-md-3">
                <div class="card border-0 shadow-small mt-3" >
                  <img src="https://launches-media.endclothing.com/EE3709_launches_thumbnail.jpg" class="card-img-top" alt="">
                  <div class="card-body">
                    <h6 class="card-title"><?= $objet["PRODLibelle"]?></h6>
                    <p class="text-muted small text-truncate"><?=$objet["PRODDesc"] ?></p>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-8"><a href="#" class="btn btn-warning">Ajoutez au panier</a></div>
                            <div class="col-4 mt-auto mb-auto px-0"><strong><?=$objet["PRODPrix"]?> &euro;</strong></div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>

              <?php
                  }
              ?>
          </div>
      </div>



      <?php
      $occasion = new Produit;
      $infooccasion = $occasion->getProduitByCat('OCCAS');
      //var_dump($telinfo);
      ?>
      <div style="background-color: black;">
      <div  class="nav-link active color-dark h6 d-none d-md-block" style="text-align: center; font-size: 2em; color:white">
        OCCASION
      </div>
      <div class="container-fluid"  style="padding-bottom: 40px;">
        <div class="row">

          <?php
          foreach($infooccasion as $occasion){
            ?>

            <div class="col-sm-1 col-md-3">
              <div class="card border-0 shadow-small mt-3" >
                <img src="https://launches-media.endclothing.com/EE3709_launches_thumbnail.jpg" class="card-img-top" alt="">
                <div class="card-body">
                  <h6 class="card-title"><?= $occasion["PRODLibelle"]?></h6>
                  <p class="text-muted small text-truncate"><?=$occasion["PRODDesc"] ?></p>
                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-8"><a href="#" class="btn btn-warning">Ajoutez au panier</a></div>
                          <div class="col-4 mt-auto mb-auto px-0"><strong><?=$occasion["PRODPrix"]?> &euro;</strong></div>
                      </div>
                  </div>
                </div>
              </div>
            </div>

            <?php
                }
            ?>
        </div>
      </div>
    </div>







    </div>

  </div>
</div>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/footer/footer.php';
?>
