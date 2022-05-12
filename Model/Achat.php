<?php
class Achat {
    private $idAchat;
    private $idClient;
    private $idSpectacle;
    private $prixTotal;
    private $dateAchat;
    private $adresseEmail;
    private $nbrePlaces;

    //constructeur
    public function __construct($idAchat, $idClient, $idSpectacle, $prixTotal, $dateAchat, $adresseEmail, $nbrePlaces)
    {
        $this->idAchat = $idAchat;
        $this->idClient = $idClient;
        $this->idSpectacle = $idSpectacle;
        $this->prixTotal = $prixTotal;
        $this->dateAchat = $dateAchat;
        $this->adresseEmail = $adresseEmail;
        $this->nbrePlaces = $nbrePlaces;
    }


    //getters
    function get_idAchat(){ return $this->idAchat; }
    function get_idClient(){ return $this->idClient; }
    function get_idSpectacle(){ return $this->idSpectacle; }
    function get_prixTotal(){ return $this->prixTotal; }
    function get_dateAchat(){ return $this->dateAchat; }
    function get_adresseEmail(){ return $this->adresseEmail; }
    function get_nbrePlaces(){ return $this->nbrePlaces; }


    //setters
    function set_idClient(int $idClient){ $this->idClient = $idClient; }
    function set_idSpectacle(int $idSpectacle){ $this->idSpectacle = $idSpectacle; }
    function set_prixTotal(float $prixTotal){ $this->prixTotal = $prixTotal; }
    public function set_dateAchat(string $dateAchat){ $this->dateAchat = $dateAchat; }
    public function set_adresseEmail(string $adresseEmail){ $this->adresseEmail = $adresseEmail; }
    public function set_nbrePlaces(int $nbrePlaces){ $this->nbrePlaces = $nbrePlaces; }
}
?>