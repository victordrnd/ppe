

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

