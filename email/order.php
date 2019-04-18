<?php
session_start();



$array =  json_decode($_SESSION['panierinfo_to_send']);
$panierinfo = json_decode(json_encode($array),true);



?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style type="text/css">  #outlook a { padding: 0; }  .ReadMsgBody { width: 100%; }  .ExternalClass { width: 100%; }  .ExternalClass * { line-height:100%; }  body { margin: 0; padding: 0; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }  table, td { border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; }  img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; }  p { display: block; margin: 13px 0; }</style>
  <style type="text/css">  @media only screen and (max-width:480px) {    @-ms-viewport { width:320px; }    @viewport { width:320px; }  }</style>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet" type="text/css">
  <style type="text/css">        @import url(https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700);    </style>
  <style type="text/css">  @media only screen and (min-width:480px) {    .mj-column-per-100 { width:100%!important; }.mj-column-per-33 { width:33.333333%!important; }.mj-column-per-50 { width:50%!important; }  }</style>
</head>
<body style="background: #FFFFFF;">
  <div class="mj-container" style="background-color:#FFFFFF;">
    <div style="margin:0px auto;max-width:670px;">
      <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0">
        <tbody>
          <tr>
            <td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:9px 0px 9px 0px;">
              <div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;">
                <table role="presentation" cellpadding="0" cellspacing="0" style="vertical-align:top;" width="100%" border="0">
                  <tbody>
                    <tr>
                      <td style="word-wrap:break-word;font-size:0px;padding:0px 0px 0px 0px;" align="center">
                        <table role="presentation" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0px;" align="center" border="0">
                          <tbody>
                            <tr>
                              <td style="width:114px;"><img alt height="auto" src="http://cr-devtux16.leschartreux.com/~j.clear/email/images/1554450515.jpg" style="border:none;border-radius:0px;display:block;font-size:13px;outline:none;text-decoration:none;width:100%;height:auto;" width="114"></td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td style="word-wrap:break-word;font-size:0px;padding:0px 0px 50px 0px;" align="center">
                        <table role="presentation" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0px;" align="center" border="0">
                          <tbody>
                            <tr>
                              <td style="width:402px;"><img alt height="auto" src="http://cr-devtux16.leschartreux.com/~j.clear/email/images/1554452301.jpg" style="border:none;border-radius:0px;display:block;font-size:13px;outline:none;text-decoration:none;width:100%;height:auto;" width="402"></td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td style="word-wrap:break-word;font-size:0px;padding:15px 15px 15px 15px;" align="left">
                        <div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:11px;line-height:1.5;text-align:left;">
                          <h2 style="line-height: 100%;"><strong>Votre commande &#xE0; bien &#xE9;t&#xE9; pris en compte.</strong></h2>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td style="word-wrap:break-word;font-size:0px;padding:10px 25px;padding-top:10px;padding-right:10px;">
                        <p style="font-size:1px;margin:0px auto;border-top:1px solid #000;width:100%;"></p>
                      </td>
                    </tr>
                    <tr>
                      <td style="word-wrap:break-word;font-size:0px;padding:15px 15px 15px 15px;" align="left">
                        <div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:11px;line-height:1.5;text-align:left;">
                          <table border="0" cellpadding="0" cellspacing="0" width="640">
                            <tbody>
                              <tr>
                                <td align="left" id="yiv0911303640body-order-number-text">
                                  <p><strong><span style="font-size:16px;">NUMERO DE LA COMMANDE <?=substr($panierinfo[0]['COMRef'], 0, 8)?></span></strong></p>
                                </td>
                              </tr>
                              <tr>
                                <td align="left"><span style="font-size:14px;">Bonjour <?=$_SESSION['prenom']?> <?=$_SESSION['nom']?> ,&#xA0;<br>			Nous avons bien re&#xE7;u votre commande. Nous vous enverrons une confirmation d&apos;exp&#xE9;dition avec un num&#xE9;ro de suivi une fois celle-ci&#xA0;envoy&#xE9;e.&#xA0;<br>			<br>			Si votre commande comporte une erreur, vous disposez d'un d&eacute;lai de 14 jours pour l&apos;annuler sur la page de d&#xE9;tails de votre&#xA0;commande.&#xA0;<br>			<br>			L&apos;&#xE9;quipe StockPro.</span></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td style="word-wrap:break-word;font-size:0px;padding:10px 25px;padding-top:10px;padding-right:10px;">
                        <p style="font-size:1px;margin:0px auto;border-top:1px solid #000;width:100%;"></p>
                      </td>
                    </tr>
                    <tr>
                      <td style="word-wrap:break-word;font-size:0px;padding:15px 15px 15px 15px;" align="left">
                        <div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:11px;line-height:1.5;text-align:left;">
                          <p><span style="font-size:16px;"><strong>R</strong><b>&#xC9;CAPITULATIF DE VOTRE COMMANDE</b></span></p>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div style="margin:0px auto;max-width:670px;">
      <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0">
        <tbody>
          <tr>
            <td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:9px 0px 9px 0px;">
              <div class="mj-column-per-33 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;">
                <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                  <tbody>
                    <tr>
                      <td style="word-wrap:break-word;font-size:0px;padding:15px 15px 15px 15px;" align="left">
                        <div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:17px;line-height:1;text-align:left;">
                          <div class="mt-5">
                            <h3 style="text-align:center;" class="mt-3">Livraison</h3>
                            <ul class="list-unstyled mt-3">
                              <h6 class="mt-3">Ville: <span class="float-right"><?=$panierinfo[0]['COMVille']?></span></h6>
                              <h6>Code Postal : <span class="float-right"><?=$panierinfo[0]['COMCP']?></span></h6>
                              <h6>Adresse : <span class="float-right"><?=$panierinfo[0]['COMAdresse']?></span></h6>
                              <h6>Date estim&eacute;e : <span class="float-right"><?=date('Y-m-d', strtotime($panierinfo[0]['COMDate']. ' + 3 days'));?></span></h6>
                            </ul>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="mj-column-per-33 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;">
                <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                  <tbody>
                    <tr>
                      <td style="word-wrap:break-word;font-size:0px;padding:15px 15px 15px 15px;" align="left">
                        <div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:17px;line-height:1;text-align:left;">
                          <h3 style="text-align:center;" class="mt-3">facturation</h3>
                          <ul class="list-unstyled mt-3">
                            <h6 class="mt-3">Ville: <span class="float-right"><?=$panierinfo[0]['COMVille']?></span></h6>
                            <h6>Code Postal : <span class="float-right"><?=$panierinfo[0]['COMCP']?></span></h6>
                            <h6>Adresse : <span class="float-right"><?=$panierinfo[0]['COMAdresse']?></span></h6>
                          </ul>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="mj-column-per-33 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;">
                <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                  <tbody>
                    <tr>
                      <td style="word-wrap:break-word;font-size:0px;padding:15px 15px 15px 15px;" align="left">
                        <div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:17px;line-height:1;text-align:left;">
                          <h3 style="text-align:center;" class="mt-3">R&eacute;capitulatif</h3>
                          <ul class="list-unstyled mt-3">
                            <h6>Livraison : <span class="float-right">Gratuite</span></h6>
                            <h6 class="mt-3">Total HT : <span class="float-right"><?=$panierinfo[0]['COMPrix'] * 0.8?>&euro;</span></h6>
                            <h6>TVA : <span class="float-right"><?=$panierinfo[0]['COMPrix'] * 0.2?>&euro;</span></h6>
                            <h6>Total : <span class="float-right"><?=$panierinfo[0]['COMPrix']?>&euro;</span></h6>
                          </ul>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div style="margin:0px auto;max-width:670px;">
      <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0">
        <tbody>
          <tr>
            <td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:9px 0px 9px 0px;">

              <div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;">
                <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                  <tbody>
                    <tr>
                      <td style="word-wrap:break-word;font-size:0px;padding:10px 25px;padding-top:10px;padding-right:10px;">
                        <p style="font-size:1px;margin:0px auto;border-top:1px solid #000;width:100%;"></p>
                      </td>
                    </tr>
                    <tr>
                      <td style="word-wrap:break-word;font-size:0px;padding:15px 15px 15px 15px;" align="left">
                        <div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:11px;line-height:1.5;text-align:left;">
                          <p><strong><span style="font-size:16px;">CE QUE VOUS AVEZ COMMAND&#xC9;</span></strong></p>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <?php
    $qte = 1;
    foreach($panierinfo['Products'] as $produit){
      $qte++;
      ?>
      <div style="margin:0px auto;max-width:670px;">
        <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0">
          <tbody>
            <tr>
              <td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:9px 0px 9px 0px;">
                <div class="mj-column-per-50 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;">
                  <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                    <tbody>
                      <tr>
                        <td style="word-wrap:break-word;font-size:0px;padding:0px 0px 0px 0px;" align="center">
                          <table role="presentation" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0px;" align="center" border="0">
                            <tbody>
                              <tr>
                                <td style="width:100px;"><img alt height="auto" src="http://cr-devtux16.leschartreux.com/~j.clear/assets/upload/produits/<?=$produit[0]['PRODRef']?>.png" style="border:none;border-radius:0px;display:block;font-size:13px;outline:none;text-decoration:none;width:100%;height:auto;" width="300"></td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="mj-column-per-50 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;">
                  <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                    <tbody>
                      <tr>
                        <td style="word-wrap:break-word;font-size:0px;padding:15px 15px 15px 15px;" align="left">
                          <div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:11px;line-height:1.5;text-align:left;">
                            <p><strong><?=$produit[0]['PRODLibelle']?></strong></p>
                            <p><strong><?=$produit[0]['PRODPrix']?>&euro;</strong></p>
                            <p><strong>Qte : <?=$produit['LIGNQte']?></strong></p>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </td>
  </tr>
</tbody>
</table>
</div>
<?php
if ($qte > 1) { ?>
  <tr class="hide_on_mobile">
    <td style="word-wrap:break-word;font-size:0px;padding:10px 25px;padding-top:10px;padding-bottom:10px;padding-right:10px;padding-left:10px;">
      <p style="font-size:1px;margin:5px auto;border-top:1px solid #00000040;width:20%;"></p>
    </td>
  </tr>
  <?php
}
}
?>

</div>
</body>
</html>
