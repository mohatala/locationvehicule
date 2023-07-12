<?php include_once("model/Config.cls.php");
$base=new Connection();
$connect=$base->connect();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" type="text/css">
<title>Voitures</title>
</head>

<body>
<div id="container">
<nav id="menutop">
<ul>
<a href="index.php"><li>Accueil</li></a>
<a href="Presentation.php"><li>Presentation</li></a>
<a href="Vehicules.php"><li>Vehicules</li></a>
<a href="Services.php"><li>Services</li></a>
<a href="Contact.php"><li>Contact</li></a>
</ul>
</nav>
<section id="section-contact">
<div id="divartContact">
<div id="contactform">
<table width="100%"  >
   <form  action="Contact.php" method="post">
  <tbody>
    <tr>
        <input name="en" type="hidden">
      <td class="widthlab">Nom</td>
      <td><input type="text" required name="nom"></td>
    </tr>
    <tr>
      <td class="widthlab">Prenom</td>
      <td><input type="text" required name="prenom"></td>
    </tr>
    <tr>
      <td class="widthlab">Email</td>
      <td><input type="email" required name="email"></td>
    </tr>
    <tr>
      <td class="widthlab">Tel</td>
      <td><input type="tel" required name="tel"></td>
    </tr>
    <tr>
      <td class="widthlab">Question/Messages</td>
      <td><textarea id="textarea1" name="message"></textarea></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" name="submit" id="btnsubmit2" ></td>
    </tr>
  </tbody>
   </form>
</table>
</div>
  <?php
  ///////////////envoi mail
  if(isset($_POST['en'])){
    try{
      $nom = $_POST['nom'];
        $prenom=$_POST['prenom'];
      $email = $_POST['email'];
        $tel=$_POST['tel'];
      $message = $_POST['message'];
      $from = 'From: Test';
      $to = 'talainimohammed@gmail.com';
      $subject = 'Hello';
      $body = "From: $nom $prenom\n E-Mail: $email\n Tel: $tel\n  Message:\n $message";
      $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
      $headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML
      $headers .= 'Reply-To: '.$email."\n"; // Mail de reponse
      $headers .= 'From: "Nom_de_expediteur"<'.$email.'>'."\n"; // Expediteur
      $headers .= 'Delivered-to: '.$to."\n"; // Destinataire
      $message = '<div style="width: 100%; text-align: center; font-weight: bold">'.$message.'</div>';

      if ($_POST['submit']) {
        if ($nom != '' && $email != '') {
          if (mail ($to, $subject, $body, $from)) {
            echo "<script>alert('Votre Message est envoye!');</script>";
          } else {
            echo "<script>alert('Votre Message n est pas  envoye!')</script>";}
        }
        else {
          echo "<script>alert('Remplire tout les champs !')</script>";
        }
      }}catch (Exception $ex){}} ?>
<div id="contactinfo">
    <?php
    $rep=$connect->query("select * from societe_infos ORDER BY id DESC ");
    $ligne=$rep->fetch();
    ?>
<div>
<img src="image/email5.png"  >
<span><p><?php echo $ligne["email"];?></p></span>
</div>
<div>
<img src="image/phone325.png">
<span><p><?php echo $ligne["tel"];?></p></span>
</div>
<div>
<img src="image/pin56.png" >
<span><p><?php echo $ligne["adresse"];?></p></span>
</div>
</div>
<div id="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.803760265456!2d-7.60756717924823!3d33.58444409987706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xe39dea083be59e93!2scentre+commerciale+erac!5e0!3m2!1sfr!2s!4v1449753853017" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
</div>
</section>

<footer>
<nav id="menubuttom">
<ul>
<a href="index.php"><li>Accueil</li></a>
<a href="Presentation.php"><li>Presentation</li></a>
<a href="Vehicules.php"><li>Vehicules</li></a>
<a href="Services.php"><li>Services</li></a>
<a href="Contact.php"><li>Contact</li></a>
</ul>
</nav>
<h5>COPYRIGHT@2015.REVOLUTION TECH</h5></footer>
<span id="ligne1"></span>
</div>
</body>
</html>
