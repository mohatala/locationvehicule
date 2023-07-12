<?php
class Infos {
    private $id;
    private $nom;
    private $tel;
    private $email;
    private $adr;

    public function __construct()
    {
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getAdr()
    {
        return $this->adr;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getTel()
    {
        return $this->tel;
    }

    public function setAdr($adr)
    {
        $this->adr = $adr;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setTel($tel)
    {
        $this->tel = $tel;
    }
    public  function  modifier_infos($connect,$ids){
$connect->query("update  societe_infos set nom='".$this->getNom()."',tel=".$this->getTel().",email='".$this->getEmail()."',adresse='".$this->getAdr()."' where id=".$ids."");
    }


}


?>