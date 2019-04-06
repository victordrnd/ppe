<?php
include '../includes/header.php';
echo 'Curl: ', function_exists('curl_version') ? 'Enabled' : 'Disabled';
$url = 'http://178.128.166.86/ppe/';
$var = '{"0":{"COMRef":"03b29c7d08f7cd9029a944e6cb7878cd","0":"03b29c7d08f7cd9029a944e6cb7878cd","COMDate":"2019-04-02","1":"2019-04-02","COMPrix":"1159","2":"1159","COMStatus":"En traitement","3":"En traitement","COMVille":"Lyon","4":"Lyon","COMCP":"3","5":"3","COMAdresse":"test","6":"test","COMCliId":"2568399c7d0dd02563c90124ecc76008","7":"2568399c7d0dd02563c90124ecc76008"},"Products":[{"LIGNProdCode":"IPHONEXS64GR","0":{"PRODRef":"IPHONEXS64GR","0":"IPHONEXS64GR","PRODLibelle":"iPhone XS 64Go Gris Sidral","1":"iPhone XS 64Go Gris Sidral","PRODPrix":"1159","2":"1159","PRODDesc":"","3":"","PRODCatCode":"TEL","4":"TEL","Categorie":{"CATCode":"TEL","0":"TEL","CATLibelle":"TELEPHONIE","1":"TELEPHONIE","CATDesc":null,"2":null}},"LIGNComRef":"03b29c7d08f7cd9029a944e6cb7878cd","1":"03b29c7d08f7cd9029a944e6cb7878cd","LIGNQte":"1","2":"1"}]}';
echo $url.'?panierinfo='.urlencode($var).'&nom='.$_SESSION['nom'].'&prenom='.$_SESSION['prenom'].'&mail='.$_SESSION['mail'];

 ?>
