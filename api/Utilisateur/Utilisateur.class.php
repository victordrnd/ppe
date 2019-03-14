<?php
class Utilisateur
{
  private $bdd;
  public function __construct(){
    $this->bdd = new Crud;
  }
  public function connexion($mail, $password){
    $password = hash('sha512', $password);
    $user = $this->bdd->select('client', '*', 'CLIMail='.tostring($mail));
    if(isset($user[0])){
      $user = $user[0];
    }
    if(!isset($user['CLIMail'])){
      return "Cet utilisateur n'existe pas";
    }
    if($user['CLIPassword'] === $password){
      $_SESSION['mail'] = $user['CLIMail'];
      $_SESSION['prenom'] = $user['CLIPrenom'];
      $_SESSION['nom'] = $user['CLINom'];
      $_SESSION['id'] = $user['CLIId'];
      $_SESSION['CLIVerif'] = $user['CLIVerif'];
      header('location:../client/');
      return;
    }
    else{
      return "Le mot de passe saisis est incorrect";
    }
  }
  public function inscription($mail, $password1, $password2, $nom , $prenom){
    if($password1 === $password2){
      $password1 = hash('sha512', $password1);
      $date = "('".date("Y-m-d")."')";
      $id = md5(uniqid(rand(), true));
      $mail = htmlspecialchars($mail);
      $nom = htmlspecialchars($nom);
      $prenom = htmlspecialchars($prenom);
      $usertest = $this->bdd->select('client', 'CLIMail', 'CLIMail='.tostring($mail));
      if(isset($usertest[0])){
        $usertest = $usertest[0];
      }
      if(empty($usertest['CLIMail'])){
        $value = array(tostring($id), tostring($mail), tostring($password1), $date, tostring($nom), tostring($prenom));
        $row = "CLIId, CliMail, CLIPassword, CLIDateInscription, CLINom, CLIPrenom";
        $req = $this->bdd->insert('client', $value, $row);
        $nometprenom = $nom.' '.$prenom;
        $mailclass = new Mail;
        $mailclass->inscription($id,$mail,$nometprenom);
        $_SESSION['mail'] = $mail;
        $_SESSION['prenom'] = $prenom;
        $_SESSION['nom'] = $nom;
        $_SESSION['id'] = $id;
        header('location:../client/');
        return;
      }else{
        return "Ce compte existe déjà, merci d'utiliser une autre adresse mail.";
      }
    }else{
      return "Les mots de passe  saisis ne correspondent pas";
    }
  }
  public function details($clientid){
    return $this->bdd->select('client', '*', 'CLIId='.tostring($clientid));
  }
  //modificateur
  public function setDateNaissance($clientid, $date){
    $this->bdd->update('client', array('CLIDateNaissance' => $date), 'CLIId='.tostring($clientid));
  }
  public function setZip($clientid, $zip){
    $this->bdd->update('client', array('CLIZip' => $zip), 'CLIId='.tostring($clientid));
  }
  public function setAdresse($clientid, $adresse){
    $this->bdd->update('client', array('CLIAdresse' => $adresse), 'CLIId='.tostring($clientid));
  }
  public function verify($clientid){
    $this->bdd->update('client', array('CLIVerif' => 1), 'CLIId='.tostring($clientid));
  }
}
?>
