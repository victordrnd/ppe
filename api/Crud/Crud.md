

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

