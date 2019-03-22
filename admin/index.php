<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';

if(isset($_POST['submit'])){
  $produit = new Produit;
  $produit->ajouter($_POST['ref'], $_POST['nom'],$_POST['prix'], $_POST['desc'], $_POST['cat']);
  $produit->upload($_FILES['image'], $_POST['ref']);

}
 ?>
 <body>
   <div class="container">

     <div class="card shadow-small border-0">
       <h1 class="text-center">Ajout de produit</h1>
       <form class="p-5" enctype="multipart/form-data" method="post" action="">
         <input type="file" name="image" class="mb-4"/></br>
         <label>Ref du produit</label>
         <input type="text" class="form-control mb-3" name="ref"/>
         <label>Nom du produit</label>
         <input type="text" class="form-control mb-3" name="nom" />
         <label>Prix du produit</label>
         <input type="number" class="form-control mb-3" name="prix"/>
         <label>Description</label>
         <textarea class="form-control mb-3" name="desc"></textarea>
         <label>Catégorie</label>
         <select name="cat">
           <option value="INFORMATIQUE">Informatique</option>
           <option value="IMAGESON">Image & Son</option>
           <option value="OBJETSCo">Objets Connectés</option>
           <option value="ORDI">Ordinateur</option>
           <option value="TEL">Téléphonie</option>
         </select>
         <button type="submit" name="submit" class="btn btn-warning mt-4 d-block mx-auto">Envoyer</button>
       </form>
     </div>
   </div>
 </body>
