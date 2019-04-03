

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

