<?php
class Achat{
    private int $idAchat;
    private int $idClient;
    private int $idSpectacle;
    private float $prixTotal;
    private string $dateVente;
    private string $adresseEmail;
    private int $nbrePlaces;

    //constructeur
    public function __construct($idAchat, $idClient, $idSpectacle, $prixTotal, $dateVente, $adresseEmail, $nbrePlaces)
    {
        $this->idAchat=$idAchat;
        $this->idClient=$idClient;
        $this->idSpectacle=$idSpectacle;
        $this->prixTotal=$prixTotal;
        $this->dateVente=$dateVente;
        $this->adresseEmail=$adresseEmail;
        $this->nbrePlaces=$nbrePlaces;
    }


    //getters
    public function get_idAchat()
    {
        return $this->idAchat;
    }

    public function get_idClient()
    {
        return $this->idClient;
    }

    public function get_idSpectacle()
    {
        return $this->idSpectacle;
    }

    public function get_prixTotal()
    {
        return $this->prixTotal;
    }
    
    public function get_dateVente()
    {
        return $this->dateVente;
    }

    public function get_adresseEmail()
    {
        return $this->adresseEmail;
    }

    public function get_nbrePlaces()
    {
        return $this->nbrePlaces;
    }


    //setters
    public function set_idClient($idClient)
    {
        $this->idClient = $idClient;
    }

    public function set_idSpectacle($idSpectacle)
    {
        $this->idSpectacle = $idSpectacle;
    }

    public function set_prixTotal($prixTotal)
    {
        $this->prixTotal = $prixTotal;
    }

    public function set_dateVente($dateVente)
    {
        $this->dateVente = $dateVente;
    }

    public function set_adresseEmail($adresseEmail)
    {
        $this->adresseEmail = $adresseEmail;
    }

    public function set_nbrePlaces($nbrePlaces)
    {
        $this->nbrePlaces = $nbrePlaces;
    }

}
?>