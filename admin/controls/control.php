<?php
try{
include("../model/Config.cls.php");
include("../model/Vehicule.cls.php");
include("../model/Infos.cls.php");
$base=new Connection();
$connect=$base->connect();
$vehicule=new Vehicule();
$info=new Infos();
session_start();

if(isset($_POST["pg"])){
    if($_POST["pg"]=="ajoutV"){
      try{
          $vehicule->setType($_POST["type"]);
	    $vehicule->setMarque($_POST["marque"]);
        $vehicule->setPrix($_POST["prix"]);
        $vehicule->setNbpers($_POST["nbpers"]);
        $vehicule->setBagage($_POST["bagage"]);
        $vehicule->setPorte($_POST["porte"]);
        $vehicule->setBoite($_POST["boite"]);
          $vehicule->setReservation($_POST["reservation"]);
        $imgName=$_FILES['photo']['name'];
        $tmp_nom=$_FILES['photo']['tmp_name'];
        $taille=$_FILES['photo']['size'];
        $err=$vehicule->Ajouter_Vehicule($imgName,$tmp_nom,$taille,$connect);
        if($err=='yes'){
            header("Location:../index.php?page=listevehicule");
        }else{header("Location:../index.php?page=ajoutervehivule");}
      }catch(Exception $ex){ header("Location:../index.php?page=ajoutervehivule");}
    }
	else if($_POST["pg"]=="modifier"){
try{
           $vehicule->setType($_POST["type"]);
           $vehicule->setMarque($_POST["marque"]);
           $vehicule->setPrix($_POST["prix"]);
           $vehicule->setNbpers($_POST["nbpers"]);
           $vehicule->setBagage($_POST["bagage"]);
           $vehicule->setPorte($_POST["porte"]);
           $vehicule->setBoite($_POST["boite"]);
           $vehicule->setReservation($_POST["reservation"]);
        $imgName=$_FILES['photo']['name'];
        $tmp_nom=$_FILES['photo']['tmp_name'];
        $taille=$_FILES['photo']['size'];
        $res="";
        if(($imgName=="") || ($imgName==$_POST["photo_old"])){$res="ok";}
        $err=$vehicule->modifier_Vehicule($res,$imgName,$_POST["photo_old"],$tmp_nom,$taille,$_POST["id"],$connect);
        if($err=='yes'){
           header("Location:../index.php?page=listevehicule");
        }
        else{header("Location:../index.php?page=ajoutervehivule");}
    }catch(Exception $ex){ header("Location:../index.php?page=ajoutervehivule");}
		}

		else if($_POST["pg"]=="Nos_info"){
          try{
		    $info->setNom($_POST["nom"]);
            $info->setTel($_POST["tel"]);
            $info->setEmail($_POST["email"]);
            $info->setAdr($_POST["adr"]);
            $info->modifier_infos($connect,$_POST["ids"]);
            echo "aaa";
           header("Location:../index.php?page=infos");
			}catch(Exception $ex){}
        }else if($_POST["pg"]=="login"){
               try{
			    $rep=$connect->query("select * from login where email='".$_POST['log']."' and pass='".$_POST['pass']."'");
                $ligne=$rep->fetch();
                if(isset($ligne['nom'])){
                    $_SESSION['nom']=$ligne['nom'];
                   header("Location:../index.php");
                }else{
				 header("location: ../inc/login.php");
                }
				}catch(Exception $ex){}
            }

     

}

////////////////////////////////////////////////////////////////////
if(isset($_GET['delete_id']))
{try{
    $connect->query("DELETE FROM voiture WHERE id=".$_GET['delete_id']);
    header("Location:../index.php?page=listevehicule");
	}catch(Exception $ex){}
} else if(isset($_GET['deconnecter']))
{
  try{ session_destroy();
    header("Location:../inc/login.php");}catch(Exception $ex){}
}
}catch(Exception $ex){}


