<?php
session_start();

include $_SERVER['DOCUMENT_ROOT'].'/api/autoload.php';
$panier = new Commande;
$panierinfo = $panier->getInfo('d6444e8ad1e79c6ff452c5aeef80fcae',true);

$utilisateur = new Utilisateur;
$utilisateurinfo = $utilisateur->details("13df9047801911bb8ea92bf142eeedfc");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style type="text/css">  #outlook a { padding: 0; }  .ReadMsgBody { width: 100%; }  .ExternalClass { width: 100%; }  .ExternalClass * { line-height:100%; }  body { margin: 0; padding: 0; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }  table, td { border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; }  img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; }  p { display: block; margin: 13px 0; }</style>
  <!--[if !mso]><!-->
  <style type="text/css">  @media only screen and (max-width:480px) {    @-ms-viewport { width:320px; }    @viewport { width:320px; }  }</style>
  <!--<![endif]--><!--[if mso]>
  <xml>
  <o:OfficeDocumentSettings>
  <o:AllowPNG/>
  <o:PixelsPerInch>96</o:PixelsPerInch>
</o:OfficeDocumentSettings>
</xml>
<![endif]--><!--[if lte mso 11]>
<style type="text/css">  .outlook-group-fix {    width:100% !important;  }</style>
<![endif]--><!--[if !mso]><!-->
<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet" type="text/css">
<style type="text/css">        @import url(https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700);    </style>
<!--<![endif]-->
<style type="text/css">  @media only screen and (min-width:480px) {    .mj-column-per-100 { width:100%!important; }.mj-column-per-33 { width:33.333333%!important; }.mj-column-per-50 { width:50%!important; }  }</style>
</head>
<body style="background: #FFFFFF;">
  <div class="mj-container" style="background-color:#FFFFFF;">
    <!--[if mso | IE]>
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="670" align="center" style="width:670px;">
    <tr>
    <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
    <![endif]-->
    <div style="margin:0px auto;max-width:670px;">
      <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0">
        <tbody>
          <tr>
            <td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:9px 0px 9px 0px;">
              <!--[if mso | IE]>
              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
              <tr>
              <td style="vertical-align:top;width:670px;">
              <![endif]-->
              <div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;">
                <table role="presentation" cellpadding="0" cellspacing="0" style="vertical-align:top;" width="100%" border="0">
                  <tbody>
                    <tr>
                      <td style="word-wrap:break-word;font-size:0px;padding:0px 0px 0px 0px;" align="center">
                        <table role="presentation" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0px;" align="center" border="0">
                          <tbody>
                            <tr>
                              <td style="width:114px;"><img alt height="auto" src="./images/1554450515.jpg" style="border:none;border-radius:0px;display:block;font-size:13px;outline:none;text-decoration:none;width:100%;height:auto;" width="114"></td>
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
                              <td style="width:402px;"><img alt height="auto" src="./images/1554452301.jpg" style="border:none;border-radius:0px;display:block;font-size:13px;outline:none;text-decoration:none;width:100%;height:auto;" width="402"></td>
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
                        <!--[if mso | IE]>
                        <table role="presentation" align="center" border="0" cellpadding="0" cellspacing="0" style="font-size:1px;margin:0px auto;border-top:1px solid #000;width:100%;" width="670">
                        <tr>
                        <td style="height:0;line-height:0;"> </td>
                      </tr>
                    </table>
                    <![endif]-->
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
                            <td align="left"><span style="font-size:14px;">Bonjour <?=$_SESSION['nom']?>,&#xA0;<br>			Nous avons bien re&#xE7;u votre commande. Nous vous enverrons une confirmation d&apos;exp&#xE9;dition avec un num&#xE9;ro de suivi une fois celle-ci&#xA0;envoy&#xE9;e.&#xA0;<br>			<br>			Si votre commande comporte une erreur, vous disposez de 1 jours pour l&apos;annuler sur la page de d&#xE9;tails de votre&#xA0;commande.&#xA0;<br>			<br>			L&apos;&#xE9;quipe StockPro.</span></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td style="word-wrap:break-word;font-size:0px;padding:10px 25px;padding-top:10px;padding-right:10px;">
                    <p style="font-size:1px;margin:0px auto;border-top:1px solid #000;width:100%;"></p>
                    <!--[if mso | IE]>
                    <table role="presentation" align="center" border="0" cellpadding="0" cellspacing="0" style="font-size:1px;margin:0px auto;border-top:1px solid #000;width:100%;" width="670">
                    <tr>
                    <td style="height:0;line-height:0;"> </td>
                  </tr>
                </table>
                <![endif]-->
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
      <!--[if mso | IE]>
    </td>
  </tr>
</table>
<![endif]-->
</td>
</tr>
</tbody>
</table>
</div>



<!--[if mso | IE]>
</td>
</tr>
</table>
<![endif]-->      <!--[if mso | IE]>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="670" align="center" style="width:670px;">
<tr>
<td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
<![endif]-->
<div style="margin:0px auto;max-width:670px;">
  <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0">
    <tbody>
      <tr>
        <td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:9px 0px 9px 0px;">
          <!--[if mso | IE]>
          <table role="presentation" border="0" cellpadding="0" cellspacing="0">
          <tr>
          <td style="vertical-align:top;width:198px;">
          <![endif]-->
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
                          <h6>Date estimée : <span class="float-right"><?=date('Y-m-d', strtotime($panierinfo[0]['COMDate']. ' + 3 days'));?></span></h6>
                        </ul>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!--[if mso | IE]>
        </td>
        <td style="vertical-align:top;width:198px;">
        <![endif]-->
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
        <!--[if mso | IE]>
      </td>
      <td style="vertical-align:top;width:198px;">
      <![endif]-->
      <div class="mj-column-per-33 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;">
        <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody>
            <tr>
              <td style="word-wrap:break-word;font-size:0px;padding:15px 15px 15px 15px;" align="left">
                <div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:17px;line-height:1;text-align:left;">
                  <h3 style="text-align:center;" class="mt-3">Récapitulatif</h3>
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
      <!--[if mso | IE]>
    </td>
  </tr>
</table>
<![endif]-->
</td>
</tr>
</tbody>
</table>
</div>
<!--[if mso | IE]>
</td>
</tr>
</table>
<![endif]-->      <!--[if mso | IE]>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="670" align="center" style="width:670px;">
<tr>
<td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
<![endif]-->
<div style="margin:0px auto;max-width:670px;">
  <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0">
    <tbody>
      <tr>
        <td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:9px 0px 9px 0px;">
          <!--[if mso | IE]>
          <table role="presentation" border="0" cellpadding="0" cellspacing="0">
          <tr>
          <td style="vertical-align:top;width:670px;">
          <![endif]-->
          <div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;">
            <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
              <tbody>
                <tr>
                  <td style="word-wrap:break-word;font-size:0px;padding:10px 25px;padding-top:10px;padding-right:10px;">
                    <p style="font-size:1px;margin:0px auto;border-top:1px solid #000;width:100%;"></p>
                    <!--[if mso | IE]>
                    <table role="presentation" align="center" border="0" cellpadding="0" cellspacing="0" style="font-size:1px;margin:0px auto;border-top:1px solid #000;width:100%;" width="670">
                    <tr>
                    <td style="height:0;line-height:0;"> </td>
                  </tr>
                </table>
                <![endif]-->
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
      <!--[if mso | IE]>
    </td>
  </tr>
</table>
<![endif]-->
</td>
</tr>
</tbody>
</table>
</div>
<!--[if mso | IE]>
</td>
</tr>
</table>
<![endif]-->      <!--[if mso | IE]>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="670" align="center" style="width:670px;">
<tr>
<td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
<![endif]-->
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
                          <td style="width:100px;"><img alt height="auto" src="../assets/upload/produits/<?=$produit[0]['PRODRef']?>.png" style="border:none;border-radius:0px;display:block;font-size:13px;outline:none;text-decoration:none;width:100%;height:auto;" width="300"></td>
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
                      <p><strong><?=$produit[0]['PRODPrix']?>€</strong></p>
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
                    <!--[if mso | IE]>
                    <table role="presentation" align="center" border="0" cellpadding="0" cellspacing="0" style="font-size:1px;margin:0px auto;border-top:1px solid #000;width:100%;" width="670">
                    <tr>
                    <td style="height:0;line-height:0;"> </td>
                  </tr>
                </table>
                <![endif]-->
              </td>
            </tr>
<?php
}
}
?>
<!--[if mso | IE]>
</td>
</tr>
</table>
<![endif]-->      <!--[if mso | IE]>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="670" align="center" style="width:670px;">
<tr>
<td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
<![endif]-->
<div style="margin:0px auto;max-width:670px;">
  <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0">
    <tbody>
      <tr>
        <td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:9px 0px 9px 0px;">
          <!--[if mso | IE]>
          <table role="presentation" border="0" cellpadding="0" cellspacing="0">
          <tr>
          <td style="vertical-align:top;width:670px;">
          <![endif]-->
          <div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;">
            <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
              <tbody>
                <tr class="hide_on_mobile">
                  <td style="word-wrap:break-word;font-size:0px;padding:10px 25px;padding-top:10px;padding-bottom:10px;padding-right:10px;padding-left:10px;">
                    <p style="font-size:1px;margin:0px auto;border-top:1px solid #000;width:100%;"></p>
                    <!--[if mso | IE]>
                    <table role="presentation" align="center" border="0" cellpadding="0" cellspacing="0" style="font-size:1px;margin:0px auto;border-top:1px solid #000;width:100%;" width="670">
                    <tr>
                    <td style="height:0;line-height:0;"> </td>
                  </tr>
                </table>
                <![endif]-->
              </td>
            </tr>
            <tr class="hide_on_mobile">
              <td style="word-wrap:break-word;font-size:0px;padding:15px 15px 15px 15px;" align="left">
                <div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:11px;line-height:1.5;text-align:left;">
                  <p><strong><span style="font-size:16px;">REGOIGNEZ-NOUS</span></strong></p>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!--[if mso | IE]>
    </td>
  </tr>
</table>
<![endif]-->
</td>
</tr>
</tbody>
</table>
</div>
<!--[if mso | IE]>
</td>
</tr>
</table>
<![endif]-->      <!--[if mso | IE]>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="670" align="center" style="width:670px;">
<tr>
<td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
<![endif]-->
<table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" border="0">
  <tbody>
    <tr>
      <td>
        <div style="margin:0px auto;max-width:670px;">
          <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0">
            <tbody>
              <tr>
                <td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:0px 0px 0px 0px;">
                  <!--[if mso | IE]>
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                  <td style="vertical-align:top;width:198px;">
                  <![endif]-->
                  <div class="mj-column-per-33 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;">
                    <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                      <tbody>
                        <tr class="hide_on_mobile">
                          <td style="word-wrap:break-word;font-size:0px;padding:0px 10px 10px 10px;" align="right">
                            <div>
                              <!--[if mso | IE]>
                              <table role="presentation" border="0" cellpadding="0" cellspacing="0" align="undefined">
                              <tr>
                              <td>
                              <![endif]-->
                              <table role="presentation" cellpadding="0" cellspacing="0" style="float:none;display:inline-table;" align="right" border="0">
                                <tbody>
                                  <tr>
                                    <td style="padding:4px;vertical-align:middle;">
                                      <table role="presentation" cellpadding="0" cellspacing="0" style="background:none;border-radius:3px;width:50px;" border="0">
                                        <tbody>
                                          <tr>
                                            <td style="font-size:0px;vertical-align:middle;width:50px;height:50px;"><a href="https://www.facebook.com/"><img alt="facebook" height="50" src="https://s3-eu-west-1.amazonaws.com/ecomail-assets/editor/social-icos/outlinedbw/facebook.png" style="display:block;border-radius:3px;" width="50"></a></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <!--[if mso | IE]>
                            </td>
                          </tr>
                        </table>
                        <![endif]-->
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!--[if mso | IE]>
          </td>
          <td style="vertical-align:top;width:198px;">
          <![endif]-->
          <div class="mj-column-per-33 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;">
            <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
              <tbody>
                <tr class="hide_on_mobile">
                  <td style="word-wrap:break-word;font-size:0px;padding:0px 10px 10px 10px;" align="center">
                    <div>
                      <!--[if mso | IE]>
                      <table role="presentation" border="0" cellpadding="0" cellspacing="0" align="undefined">
                      <tr>
                      <td>
                      <![endif]-->
                      <table role="presentation" cellpadding="0" cellspacing="0" style="float:none;display:inline-table;" align="center" border="0">
                        <tbody>
                          <tr>
                            <td style="padding:4px;vertical-align:middle;">
                              <table role="presentation" cellpadding="0" cellspacing="0" style="background:none;border-radius:3px;width:50px;" border="0">
                                <tbody>
                                  <tr>
                                    <td style="font-size:0px;vertical-align:middle;width:50px;height:50px;"><a href="https://www.twitter.com/"><img alt="twitter" height="50" src="https://s3-eu-west-1.amazonaws.com/ecomail-assets/editor/social-icos/outlinedbw/twitter.png" style="display:block;border-radius:3px;" width="50"></a></td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <!--[if mso | IE]>
                    </td>
                  </tr>
                </table>
                <![endif]-->
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!--[if mso | IE]>
  </td>
  <td style="vertical-align:top;width:198px;">
  <![endif]-->
  <div class="mj-column-per-33 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;">
    <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
      <tbody>
        <tr class="hide_on_mobile">
          <td style="word-wrap:break-word;font-size:0px;padding:0px 10px 10px 10px;" align="left">
            <div>
              <!--[if mso | IE]>
              <table role="presentation" border="0" cellpadding="0" cellspacing="0" align="undefined">
              <tr>
              <td>
              <![endif]-->
              <table role="presentation" cellpadding="0" cellspacing="0" style="float:none;display:inline-table;" align="left" border="0">
                <tbody>
                  <tr>
                    <td style="padding:4px;vertical-align:middle;">
                      <table role="presentation" cellpadding="0" cellspacing="0" style="background:none;border-radius:3px;width:50px;" border="0">
                        <tbody>
                          <tr>
                            <td style="font-size:0px;vertical-align:middle;width:50px;height:50px;"><a href="https://www.linkedin.com/"><img alt="linkedin" height="50" src="https://s3-eu-west-1.amazonaws.com/ecomail-assets/editor/social-icos/outlinedbw/linkedin.png" style="display:block;border-radius:3px;" width="50"></a></td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!--[if mso | IE]>
            </td>
          </tr>
        </table>
        <![endif]-->
      </div>
    </td>
  </tr>
</tbody>
</table>
</div>
<!--[if mso | IE]>
</td>
</tr>
</table>
<![endif]-->
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
<!--[if mso | IE]>
</td>
</tr>
</table>
<![endif]-->
</div>
</body>
</html>
