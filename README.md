# Projet PPE




### Class: Database

> Classe qui permet de se connecter à la base de donnée

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em> |
| public static | <strong>connect()</strong> : <em>void</em><br /><em>Permet l'instatiation de l'objet PDO</em> |
| public static | <strong>disconnect()</strong> : <em>void</em><br /><em>Permet de détruire l'objet self::$pdo</em> |




### Class: Crud

> Classe qui permet la lecture et l'écriture dans la base de donnée

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em> |
| public | <strong>delete(</strong><em>string</em> <strong>$table</strong>, <em>string</em> <strong>$where=null</strong>)</strong> : <em>void</em><br /><em>Permet de supprimer des données dans la base de données</em> |
| public | <strong>insert(</strong><em>string</em> <strong>$table</strong>, <em>string</em> <strong>$value</strong>, <em>array</em> <strong>$row=null</strong>)</strong> : <em>void</em><br /><em>Permet d'insérer des données dans la base de données</em> |
| public | <strong>query(</strong><em>mixed</em> <strong>$requete</strong>)</strong> : <em>void</em><br /><em>Permet d'exécuter la requête@param string $requete@return array</em> |
| public | <strong>select(</strong><em>string</em> <strong>$table</strong>, <em>string</em> <strong>$row=`'*'`</strong>, <em>string</em> <strong>$where=null</strong>, <em>string</em> <strong>$order=null</strong>, <em>string</em> <strong>$groupby=null</strong>)</strong> : <em>array</em><br /><em>Permet de sélectionner des données dans la base de données</em> |
| public | <strong>update(</strong><em>string</em> <strong>$table</strong>, <em>array</em> <strong>$rows</strong>, <em>string</em> <strong>$where</strong>)</strong> : <em>void</em><br /><em>Permet de modifier des données dans la base de données</em> |

*This class extends \Database*




### Class: Utilisateur

> Permet l'accès aux informations de la table client

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em> |
| public | <strong>connexion(</strong><em>string</em> <strong>$mail</strong>, <em>string</em> <strong>$password</strong>, <em>string</em> <strong>$url=null</strong>)</strong> : <em>void</em><br /><em>Permet de vérifier la connexion d'un utilisateur</em> |
| public | <strong>details(</strong><em>string</em> <strong>$clientid</strong>)</strong> : <em>void</em><br /><em>Permet d'obtenur des informations sur un utilisateur</em> |
| public | <strong>inscription(</strong><em>string</em> <strong>$mail</strong>, <em>string</em> <strong>$password1</strong>, <em>string</em> <strong>$password2</strong>, <em>string</em> <strong>$nom</strong>, <em>string</em> <strong>$prenom</strong>)</strong> : <em>void</em><br /><em>Permet l'inscription d'un nouvel Utilisateur</em> |
| public | <strong>setAdresse(</strong><em>string</em> <strong>$clientid</strong>, <em>string</em> <strong>$adresse</strong>)</strong> : <em>void</em><br /><em>Permet de modifier une adresse pour un utilisateur</em> |
| public | <strong>setDateNaissance(</strong><em>string</em> <strong>$clientid</strong>, <em>string</em> <strong>$date</strong>)</strong> : <em>void</em><br /><em>Permet de modifier une date de naissance pour un utilisateur</em> |
| public | <strong>setZip(</strong><em>string</em> <strong>$clientid</strong>, <em>string</em> <strong>$zip</strong>)</strong> : <em>void</em><br /><em>Permet de modifier un code postal pour un utilisateur</em> |
| public | <strong>verify(</strong><em>string</em> <strong>$clientid</strong>)</strong> : <em>void</em><br /><em>Permet de vérifier un utilisateur</em> |




### Class: Produit

> Cette classe permet l'accès aux données de la table produit

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em> |
| public | <strong>ajouter(</strong><em>string</em> <strong>$ref</strong>, <em>string</em> <strong>$nom</strong>, <em>int</em> <strong>$prix</strong>, <em>string</em> <strong>$desc</strong>, <em>string</em> <strong>$cat</strong>)</strong> : <em>void</em><br /><em>Permet d'enregistrer un nouveau produit</em> |
| public static | <strong>getAll(</strong><em>int</em> <strong>$number=null</strong>)</strong> : <em>array</em><br /><em>Permet d'obtenir la liste des produits existants</em> |
| public | <strong>getProduitByCat(</strong><em>string</em> <strong>$catcode</strong>, <em>int</em> <strong>$number=null</strong>)</strong> : <em>array</em><br /><em>Permet d'obtenir la liste des produits appartenant à une catégorie</em> |
| public | <strong>getProduitById(</strong><em>mixed</em> <strong>$produitid</strong>, <em>mixed</em> <strong>$moreinfo=null</strong>)</strong> : <em>mixed</em><br /><em>Permet d'obtenir des informations sur un produit</em> |
| public | <strong>upload(</strong><em>mixed</em> <strong>$image</strong>, <em>string</em> <strong>$id</strong>)</strong> : <em>void</em><br /><em>Permet d'upload une image d'un produit et la renomme</em> |



### Class: Categorie

> Cette classe permet l'accès aux données de la table catégorie

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em> |
| public | <strong>getCategorieById(</strong><em>string</em> <strong>$catid</strong>)</strong> : <em>mixed</em> |




### Class: Panier

> Permet l'accès aux données du panier d'un client

| Visibility | Function |
|:-----------|:---------|
| public | <strong>addQtyFromCart(</strong><em>string</em> <strong>$productid</strong>, <em>int</em> <strong>$number</strong>)</strong> : <em>void</em><br /><em>Permet d'ajouter une certaine quantité d'un produit au Panier</em> |
| public | <strong>addToCart(</strong><em>string</em> <strong>$productid</strong>)</strong> : <em>array</em><br /><em>Permet l'ajout d'un produit au panier</em> |
| public | <strong>getCart(</strong><em>bool/boolean</em> <strong>$moreinfo=false</strong>)</strong> : <em>array</em><br /><em>*Permet d'obtenir le panier d'un utilisateur</em> |
| public | <strong>removeFromCart(</strong><em>string</em> <strong>$productid</strong>)</strong> : <em>void</em><br /><em>Permet de retirer un produit du Panier</em> |
| public | <strong>removeQtyFromCart(</strong><em>string</em> <strong>$productid</strong>, <em>int</em> <strong>$number</strong>)</strong> : <em>void</em><br /><em>Permet de retirer une certaine quantité d'un produit du Panier</em> |



### Class: Coupon

> Permet l'accès aux données de la table coupon

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em> |
| public | <strong>retrieve(</strong><em>string</em> <strong>$couponcode</strong>)</strong> : <em>array</em><br /><em>Permet de vérifier si le coupon est valide</em> |





### Class: Commande

> Cette classe permet la gestion des commandes

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em> |
| public | <strong>getByUser(</strong><em>string</em> <strong>$userid</strong>, <em>int</em> <strong>$limit=null</strong>)</strong> : <em>array</em><br /><em>Permet d'obtenir la liste des commandes d'un client</em> |
| public | <strong>getInfo(</strong><em>string</em> <strong>$comref</strong>, <em>boolean</em> <strong>$moreinfo=null</strong>)</strong> : <em>array</em><br /><em>Permet d'obtenir des informations sur une commande existante.</em> |
| public | <strong>save()</strong> : <em>void</em><br /><em>Procédure qui permet la sauvegarde d'une commande</em> |





### Class: LigneCommande

> Permet l'accès aux données de la table LigneCommande

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em> |
| public | <strong>getAll(</strong><em>string</em> <strong>$comref</strong>)</strong> : <em>array</em><br /><em>Cette fonction permet d'obtenir les informations d'une ligne de commande</em> |
| public | <strong>save()</strong> : <em>void</em><br /><em>*Cette procédure  permet la sauvegarde d'une ligne d'une commande.</em> |




## To Do List
