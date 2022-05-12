<?php
class Reservation{
    private $idReservation;
    private $idAchat;
    private $numSiege;

    //constructeur
    public function __construct($idReservation, $idAchat, $numSiege)
    {
        $this->idReservation=$idReservation;
        $this->idAchat=$idAchat;
        $this->numSiege=$numSiege;
    }


    //getters
    public function get_idReservation()
    {
        return $this->idReservation;
    }

    public function get_idAchat()
    {
        return $this->idAchat;
    }

    public function get_numSiege()
    {
        return $this->numSiege;
    }


    //setters
    public function set_idAchat($idAchat)
    {
        $this->idAchat = $idAchat;
    }

    public function set_numSiege($numSiege)
    {
        $this->numSiege = $numSiege;
    }
}
?>