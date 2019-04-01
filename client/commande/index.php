<?php
include '../../includes/header.php';
$commande = new Commande;
$commandeinfo = $commande->getInfo(htmlspecialchars($_GET['id']), true );

$url='https://api.mapbox.com/geocoding/v5/mapbox.places/Tassin.json?access_token=pk.eyJ1IjoibWF0dGZpY2tlIiwiYSI6ImNqNnM2YmFoNzAwcTMzM214NTB1NHdwbnoifQ.Or19S7KmYPHW8YjRz82v6g&cachebuster=1554043397048&autocomplete=true';

//var_dump($commandeinfo);
?>
<script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' />
<body>
  <h2 class="text-center mt-5 ">Commande n°<?=substr($commandeinfo[0]['COMRef'], 0, 8)?></h2>
  <div class="container">
    <a href="../" class="text-dark"><i data-feather="chevron-left"></i></a>
  </div>
  <div class="row m-md-5">
    <div class="col-12 col-md-8">
      <div class="card shadow-small border-0 mx-md-5 mx-2 p-3">

        <div class="row px-3">
          <div class="col">
            <h2>Détails</h2>
          </div>
          <div class="col">
            <span class="badge badge-warning float-right mt-3 p-2"><?=$commandeinfo[0]['COMStatus']?></span>
          </div>
        </div>

        <div class="row">
          <ul class="list-group list-group-flush mt-3 w-100">
            <?php
            foreach($commandeinfo['Products'] as $produit){
              ?>
              <li class="list-group-item">
                <div class="row">
                  <div class="col-4">

                    <img src="../../assets/upload/produits/<?=$produit[0]['PRODRef']?>.png" class=" mt-4 mt-md-0 img-fluid w-25 mx-auto d-block"/>
                  </div>
                  <div class="col-5">
                    <p class="mt-5 text-center align-middle"><?=$produit[0]['PRODLibelle']?></p>
                  </div>
                  <div class="col-3">
                    <p class="mt-5">Quantité : <?=$produit['LIGNQte']?></p>
                  </div>
                </div></li>
                <?php
              }
              ?>
            </ul>
          </div>

        </div>
      </div>


      <div class="col-12 mt-4 col-md-4">
        <h2>Récapitulatif</h2>
        <ul class="list-unstyled mb-5">
          <h6 class="mt-3">Sous total HT: <span class="float-right"><?=$commandeinfo[0]['COMPrix'] * 0.8?>&euro;</span></h6>
          <p class="small"><strong>TVA : <span class="float-right"><?=$commandeinfo[0]['COMPrix'] * 0.2?>&euro;</span></strong></p>
          <h6 class="mt-5 border-top pt-3">Total : <span class="float-right"><?=$commandeinfo[0]['COMPrix']?>&euro;</span></h6>
        </ul>
        <div class="mt-5">
          <h2 class="mt-3">Livraison</h2>
          <ul class="list-unstyled mt-3">
            <h6 class="mt-3">Ville: <span class="float-right"><?=$commandeinfo[0]['COMVille']?></span></h6>
            <h6>Code Postal : <span class="float-right"><?=$commandeinfo[0]['COMCP']?></span></h6>
            <h6>Adresse : <span class="float-right"><?=$commandeinfo[0]['COMAdresse']?></span></h6>
            <h6>Date estimée : <span class="float-right"><?=date('Y-m-d', strtotime($commandeinfo[0]['COMDate']. ' + 3 days'));?></span></h6>
          </ul>
        </div>


      </div>
    </div>

    <div class="row mt-3">
      <div id='map' class="w-100 h-50"></div>
    </div>
  </body>

  <script>


  var adresse = encodeURIComponent('<?=$commandeinfo[0]['COMVille']?> <?=$commandeinfo[0]['COMAdresse']?>');
  var url = 'https://api.mapbox.com/geocoding/v5/mapbox.places/'+adresse+'.json?access_token=pk.eyJ1IjoibWF0dGZpY2tlIiwiYSI6ImNqNnM2YmFoNzAwcTMzM214NTB1NHdwbnoifQ.Or19S7KmYPHW8YjRz82v6g&cachebuster=1554043397048&autocomplete=true';
  fetch(url)
  .then((resp) => resp.json())
  .then(function(data){
    mapboxgl.accessToken = 'pk.eyJ1IjoidmljdG9yZHJuZCIsImEiOiJjanR3eHhhY3oxNDUwNDNsemE1aG5peGl2In0.YeRJsFQXOp8GFHBiQsoHEQ';
    var map = new mapboxgl.Map({
      container: 'map',
      style: 'mapbox://styles/mapbox/dark-v10',
      zoom: 17,
      center: data['features'][0]['center'],
      pitch: 45,
      bearing: -17.6,
      logo : false,
      attributionControl: false
    });
    map.on('load', function() {
      var layers = map.getStyle().layers;

      var labelLayerId;
      for (var i = 0; i < layers.length; i++) {
        if (layers[i].type === 'symbol' && layers[i].layout['text-field']) {
          labelLayerId = layers[i].id;
          break;
        }
      }





      map.loadImage('../../assets/map/pin.png', function(error, image) {
        if (error) throw error;
        map.addImage('cat', image);
        map.addLayer({
          "id": "points",
          "type": "symbol",
          "source": {
            "type": "geojson",
            "data": {
              "type": "FeatureCollection",
              "features": [{
                "type": "Feature",
                "geometry": {
                  "type": "Point",
                  "coordinates": data['features'][0]['center']
                }
              }]
            }
          },
          "layout": {
            "icon-image": "cat",
            "icon-size": 0.25
          }
        });
        map.addLayer({
          'id': '3d-buildings',
          'source': 'composite',
          'source-layer': 'building',
          'filter': ['==', 'extrude', 'true'],
          'type': 'fill-extrusion',
          'minzoom': 15,
          'paint': {
            'fill-extrusion-color': '#aaa',

            // use an 'interpolate' expression to add a smooth transition effect to the
            // buildings as the user zooms in
            'fill-extrusion-height': [
              "interpolate", ["linear"], ["zoom"],
              15, 0,
              15.05, ["get", "height"]
            ],
            'fill-extrusion-base': [
              "interpolate", ["linear"], ["zoom"],
              15, 0,
              15.05, ["get", "min_height"]
            ],
            'fill-extrusion-opacity': .6
          }
        }, labelLayerId);
        
      });
    });

  })
  .catch(function(error){
    console.log(error);
  });




</script>
<style>
.mapbox-logo{
  display: none !important;
}
</style>
<?php
include '../../includes/footer/footer.php';
?>
