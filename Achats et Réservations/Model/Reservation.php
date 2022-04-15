<?php
class Achat{
    private int $idReservation;
    private int $numSiege;

    //constructeur
    public function __construct($idReservation, $numSiege)
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
        return $this->idRAchat;
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