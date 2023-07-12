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
    <style>

    </style>
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
<section id="section-vehicule">
<div id="divartvehicule">
<!--****************************************-->
<?php
$messagesParPage=4;
$retour_total=$connect->query("select COUNT(*) as total from voiture");
$donnees_total=$retour_total->fetch();
$total=$donnees_total['total'];
$nombreDePages=ceil($total/$messagesParPage);

if(isset($_GET['page'])) // Si la variable $_GET['page'] existe...
{
    $pageActuelle=intval($_GET['page']);

    if($pageActuelle>$nombreDePages) // Si la valeur de $pageActuelle (le numéro de la page) est plus grande que $nombreDePages...
    {
        $pageActuelle=$nombreDePages;
    }
}
else // Sinon
{
    $pageActuelle=1; // La page actuelle est la n°1
}

$premiereEntree=($pageActuelle-1)*$messagesParPage; // On calcul la première entrée à lire

$i=1;
$ligne=array();
$retour_messages=$connect->query("SELECT * FROM voiture ORDER by id DESC  LIMIT $premiereEntree , $messagesParPage ");
while($row=$retour_messages->fetch())
{$ligne[$i]=array($row["image"],$row["types"],$row["prix"],$row["marque"],$row["reservation"],$row["nbpersonne"],$row["bagage"],$row["portes"],$row["boite"]);
    $i++;}
$j=0;
while($j<sizeof($ligne)){
    $j=$j+1;
?>
    <hr>
<article class="art1">
<img src="admin/image/vehicules/<?php echo $ligne[$j][0];?>" alt="voiture">
<h4><?php echo $ligne[$j][1];?></h4>
<h5>Prix:<b><?php echo $ligne[$j][2];?></b>/Jour</h5>
<p><?php echo $ligne[$j][3];?><b><?php echo $ligne[$j][4];?></b></p>
<div id="span1cont">
<span><img src="image/personnes.png" alt="pers"><i><?php echo $ligne[$j][5];?></i></span>
<span><img src="image/bagage.png" alt="bag"><i><?php echo $ligne[$j][6];?></i></span>
<span><img src="image/portes.png" alt="port"><i><?php echo $ligne[$j][7];?></i></span>
<span><img src="image/boite.png" alt="boite"><i><?php echo $ligne[$j][8];?></i></span>
</div>
<a href="Contact.php"><button>RESERVER</button></a>
</article>
<hr>
    <?php $j=$j+1;
    if($j<$i){
    ?>
<article class="art2">
<h4><?php echo $ligne[$j][1];?></h4>
<h5>Prix:<b><?php echo $ligne[$j][2];?></b>/Jour</h5>
<p><b><?php echo $ligne[$j][4];?></b><?php echo $ligne[$j][3];?></p>
<a href="Contact.php"><button >RESERVER</button></a>
<div id="span2cont">
<span><i><?php echo $ligne[$j][8];?></i><img src="image/boite.png" alt="boite"></span>
<span><i><?php echo $ligne[$j][7];?></i><img src="image/portes.png" alt="port"></span>
<span><i><?php echo $ligne[$j][6];?></i><img src="image/bagage.png" alt="bag"></span>
<span><i><?php echo $ligne[$j][5];?></i><img src="image/personnes.png" alt="pers"></span>
</div>
<img src="admin/image/vehicules/<?php echo $ligne[$j][0];?>" alt="voiture">
</article>

<?php }}
echo '<p align="left" style="position: absolute; top: 95%;">Page : '; //Pour l'affichage, on centre la liste des pages
for($i=1; $i<=$nombreDePages; $i++) //On fait notre boucle
{
    //On va faire notre condition
    if($i==$pageActuelle) //Si il s'agit de la page actuelle...
    {
        echo ' [ '.$i.' ] ';
    }
    else //Sinon...
    {
        echo ' <a href="Vehicules.php?page='.$i.'">'.$i.'</a> ';
    }
}
echo '</p>';
?>
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

