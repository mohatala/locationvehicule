<?php session_start(); if(isset($_SESSION["nom"])){?>
<html>
<head>
	<title>GESTIONNAIRE DE SITE LOCVOITURE</title>
    <meta charset="utf-8"/>
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div id="container">
    <header >
    <img src="image/logo.png">
    <h3><strong>Bonjour Mr.</strong><?php echo $_SESSION["nom"];?></h3>
    <a href="controls/control.php?deconnecter" id="deco">Deconnecter</a>
    <a href="../index.php" id="site"  role="button">Voir Mon Site</a>
    </header>
    <nav>
   <ul >
      <a href="index.php?page=ajoutervehivule" ><li class="active">Ajouter Vehicule</li></a>
      <a href="index.php?page=listevehicule"><li>Liste Vehicule</li></a>
   <a href="index.php?page=infos"> <li>Societé Infos</li></a>
</ul>
    </nav>
    <section>
    
    <?php 
	
	if(isset($_GET["page"])){
		if($_GET["page"]=="ajoutervehivule"){
	include("inc/AjouterVehicule.php");
    }
		else if($_GET["page"]=="listevehicule"){
	include("inc/ListeVehicule.php");
    }
	   else if($_GET["page"]=="infos"){
	include("inc/Nos_Infos.php");
    }
       else if($_GET["page"]=="AffichevehiculeInfo"){
           include("inc/Affiche_Vehicule_Infos.php");
       }
	}else{include("inc/AjouterVehicule.php");}?>
    </section>
    <footer>All Rights Reserved 2015-Revolution Tech </footer>
    </div>
</body>
</html>
<?php }
else{header('Location:inc/login.php');}
?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
