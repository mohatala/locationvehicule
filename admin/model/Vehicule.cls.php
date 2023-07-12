<?php
class Vehicule{
    private $id;
    private $marque;
    private $type;
    private $prix;
    private $nbpers;
    private $bagage;
    private $porte;
    private $boite;
    private $reservation;
    private $image;

    public function __construct(){}

    public function getId()
    {
        return $this->id;
    }

    public function getMarque()
    {
        return $this->marque;
    }
    public function getBoite()
    {
        return $this->boite;
    }

    public function getImage()
    {return $this->image;}

    public function setBoite($boite)
    {$this->boite = $boite;}

    public function getBagage()
    {
        return $this->bagage;
    }

    public function getNbpers()
    {
        return $this->nbpers;
    }

    public function getPorte()
    {
        return $this->porte;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function getReservation()
    {
        return $this->reservation;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setBagage($bagage)
    {
        $this->bagage = $bagage;
    }

    public function setNbpers($nbpers)
    {
        $this->nbpers = $nbpers;
    }

    public function setPorte($porte)
    {
        $this->porte = $porte;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    public function setReservation($reservation)
    {
        $this->reservation = $reservation;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
    public function setId($id)
    {$this->id = $id;}

    public function setImage($image)
    {$this->image = $image;}

    public function setMarque($marque)
    {$this->marque = $marque;}

   public  function Ajouter_Vehicule($imgName,$tmp_nom,$taille,$connect){
       $ext=strchr($imgName,'.');
       $extentions=array('.jpg','.png','.jpeg','.gif');
       $taille_max=1000000;

       if(!in_array($ext,$extentions)){
           $erreur="ext";
       } else if($taille>$taille_max){
           $erreur="taille";
       } else{
           move_uploaded_file($tmp_nom,'../image/vehicules/'.$imgName);
           $connect->query("INSERT into voiture VALUES (null,'".$this->getType()."','".$this->getMarque()."','".$this->getPrix()."','".$this->getNbpers()."','".$this->getBagage()."','".$this->getPorte()."','".$this->getBoite()."','".$this->getReservation()."','".$imgName."')");
           $erreur="yes";
       }
     return $erreur;
       }
    public function  supprimer_Vehicule($idV,$connect){
        $connect->query("delete from voiture where id='".$idV."'");
    }
    public function modifier_Vehicule($res,$imgName,$image1,$tmp_nom,$taille,$idV,$connect){

       if($res=="ok"){
		$connect->query("UPDATE voiture set types='".$this->getType()."',marque='".$this->getMarque()."',prix='".$this->getPrix()."',nbpersonne='".$this->getNbpers()."',bagage='".$this->getBagage()."',portes='".$this->getPorte()."',boite='".$this->getBoite()."',reservation='".$this->getReservation()."' where id='".$idV."'");
      $erreur="yes";
        }
		else{
		$ext=strchr($imgName,'.');
       $extentions=array('.jpg','.png','.jpeg','.gif');
       $taille_max=1000000;
       if(!in_array($ext,$extentions)){
           $erreur="ext";
       } else if($taille>$taille_max){
           $erreur="taille";
       } else{
		   unlink("../image/vehicules/".$image1);
           move_uploaded_file($tmp_nom,'../image/vehicules/'.$imgName);
        $connect->query("UPDATE voiture set types='".$this->getType()."', marque='".$this->getMarque()."',prix='".$this->getPrix()."',nbpersonne='".$this->getNbpers()."',bagage='".$this->getBagage()."',portes='".$this->getPorte()."',boite='".$this->getBoite()."',reservation='".$this->getReservation()."',image='".$imgName."' where id='".$idV."'");
	     $erreur="yes";
       }

	   }
        return $erreur;
	}
}

?>