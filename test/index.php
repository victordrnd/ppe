<?php

  //Connexion à la bdd
  $bdd = new PDO('mysql:host=localhost;dbname=formaweb;charset=utf8', 'victor', 'root');

  $req = $bdd->prepare('select intituleConf FROM Conference');

  $req->execute();
$tableau= $req->fetchAll();

  foreach ($tableau as $conference ) {
    echo $conference['intituleConf'].'';
  }

 ?>
