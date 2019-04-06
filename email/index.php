<?php
session_start();

include $_SERVER['DOCUMENT_ROOT'].'/api/autoload.php';
$panier = new Commande;
$panierinfo = $panier->getInfo('53874939da42919b6ad3e181ced9f4fd',true);
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
                                <td align="left"><span style="font-size:14px;">Bonjour <?=$_SESSION['prenom']?> <?=$_SESSION['nom']?> ,&#xA0;<br>			Nous avons bien re&#xE7;u votre commande. Nous vous enverrons une confirmation d&apos;exp&#xE9;dition avec un num&#xE9;ro de suivi une fois celle-ci&#xA0;envoy&#xE9;e.&#xA0;<br>			<br>			Si votre commande comporte une erreur, vous disposez d'un délai de 14 jours pour l&apos;annuler sur la page de d&#xE9;tails de votre&#xA0;commande.&#xA0;<br>			<br>			L&apos;&#xE9;quipe StockPro.</span></td>
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
                              <h6>Date estimée : <span class="float-right"><?=date('Y-m-d', strtotime($panierinfo[0]['COMDate']. ' + 3 days'));?></span></h6>
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
    </td>
  </tr>
  <?php
}
}
?>
<div style="margin:0px auto;max-width:670px;">
  <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0">
    <tbody>
      <tr>
        <td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:9px 0px 9px 0px;">
          <div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;">
            <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
              <tbody>
                <tr class="hide_on_mobile">
                  <td style="word-wrap:break-word;font-size:0px;padding:10px 25px;padding-top:10px;padding-bottom:10px;padding-right:10px;padding-left:10px;">
                    <p style="font-size:1px;margin:0px auto;border-top:1px solid #000;width:100%;"></p>
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
        </td>
      </tr>
    </tbody>
  </table>
</div>
<table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" border="0">
  <tbody>
    <tr>
      <td>
        <div style="margin:0px auto;max-width:670px;">
          <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0">
            <tbody>
              <tr>
                <td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:0px 0px 0px 0px;">
                  <div class="mj-column-per-33 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;">
                    <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                      <tbody>
                        <tr class="hide_on_mobile">
                          <td style="word-wrap:break-word;font-size:0px;padding:0px 10px 10px 10px;" align="right">
                            <div>
                              <table role="presentation" cellpadding="0" cellspacing="0" style="float:none;display:inline-table;" align="right" border="0">
                                <tbody>
                                  <tr>
                                    <td style="padding:4px;vertical-align:middle;">
                                      <table role="presentation" cellpadding="0" cellspacing="0" style="background:none;border-radius:3px;width:50px;" border="0">
                                        <tbody>
                                          <tr>
                                            <td style="font-size:0px;vertical-align:middle;width:50px;height:50px;"><a href="https://www.facebook.com/"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" width="12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 264 512" class="svg-inline--fa fa-facebook-f fa-w-9"><path fill="#000" d="M215.8 85H264V3.6C255.7 2.5 227.1 0 193.8 0 124.3 0 76.7 42.4 76.7 120.3V192H0v91h76.7v229h94V283h73.6l11.7-91h-85.3v-62.7c0-26.3 7.3-44.3 45.1-44.3z" class=""></path></svg></a></td>
                                          </tr>
                                        </tbody>
                                      </table>
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
                  <div class="mj-column-per-33 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;">
                    <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                      <tbody>
                        <tr class="hide_on_mobile">
                          <td style="word-wrap:break-word;font-size:0px;padding:0px 10px 10px 10px;" align="center">
                            <div>
                              <table role="presentation" cellpadding="0" cellspacing="0" style="float:none;display:inline-table;" align="center" border="0">
                                <tbody>
                                  <tr>
                                    <td style="padding:4px;vertical-align:middle;">
                                      <table role="presentation" cellpadding="0" cellspacing="0" style="background:none;border-radius:3px;width:50px;" border="0">
                                        <tbody>
                                          <tr>
                                            <td style="font-size:0px;vertical-align:middle;width:50px;height:50px;"><a href="https://www.twitter.com/"><svg aria-hidden="true" focusable="false" data-prefix="fab" width="20" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-twitter fa-w-16"><path fill="#000" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" class=""></path></svg></a></td>
                                          </tr>
                                        </tbody>
                                      </table>
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
                  <div class="mj-column-per-33 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;">
                    <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                      <tbody>
                        <tr class="hide_on_mobile">
                          <td style="word-wrap:break-word;font-size:0px;padding:0px 10px 10px 10px;" align="left">
                            <div>
                              <table role="presentation" cellpadding="0" cellspacing="0" style="float:none;display:inline-table;" align="left" border="0">
                                <tbody>
                                  <tr>
                                    <td style="padding:4px;vertical-align:middle;">
                                      <table role="presentation" cellpadding="0" cellspacing="0" style="background:none;border-radius:3px;width:50px;" border="0">
                                        <tbody>
                                          <tr>
                                            <td style="font-size:0px;vertical-align:middle;width:50px;height:50px;"><a href="https://www.linkedin.com/"><svg aria-hidden="true" focusable="false" data-prefix="fab" width="20" data-icon="linkedin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-linkedin fa-w-14 fa-5x"><path fill="#000" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" class=""></path></svg></a></td>
                                          </tr>
                                        </tbody>
                                      </table>
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
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
