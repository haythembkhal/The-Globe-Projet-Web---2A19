<?php
require '../../config.php';
require_once '../../Model/Achat.php';

class AchatC {
    public function ajouterAchat($Achat)
    {
        $reqSQL = "INSERT INTO Achats (idAchat, idClient, idSpectacle, prixTotal, dateAchat, adresseEmail, nbrePlaces)
        VALUES (:idAchat, :idClient, :idSpectacle, :prixTotal, :dateAchat, :adresseEmail, :nbrePlaces)";
        $db = config::getConnexion();

        try{
            /*$query = $db->prepare($reqSQL);
            $query->bindValue(':idClient', $Achat->get_idClient());
            $query->bindValue(':idSpectacle', $Achat->get_idSpectacle());
            $query->bindValue(':prixTotal', $Achat->get_prixTotal());
            $query->bindValue(':dateAchat', $Achat->get_dateAchat());
            $query->bindValue(':adresseEmail', $Achat->get_adresseEmail());
            $query->bindValue(':nbrePlaces', $Achat->get_nbrePlaces());*/

            $query = $db->prepare($reqSQL);
            $query->execute([
                'idAchat' => $Achat->get_idAchat(),
                'idClient' => $Achat->get_idClient(),
                'idSpectacle' => $Achat->get_idSpectacle(),
                'prixTotal' => $Achat->get_prixTotal(),
                'dateAchat' => $Achat->get_dateAchat(),
                'adresseEmail'=> $Achat->get_adresseEmail(),
                'nbrePlaces' => $Achat->get_nbrePlaces()
            ]);
        }
        catch (Exception $e){
            echo 'ERREUR: '.$e->getMessage();
            //die('Erreur: '.$e->getMessage());
        }
    }


    public function afficherAchat()
    {
        $reqSQL = "SELECT * FROM Achats";
        $db = config::getConnexion();

        try{
            $liste = $db->query($reqSQL);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }  
    }

    public function supprimerAchat($idAchat)
    {
        $reqSQL = "DELETE FROM Achats WHERE idAchat= :idAchat";
        $db = config::getConnexion();

        try{
            $query = $db->prepare($reqSQL);
            $query->bindValue(':idAchat', $idAchat);
            $query->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }  
    }

    public function modifierAchat(int $idAchat, int $idClient, int $idSpectacle, float $prixTotal, string $dateAchat, string $adresseEmail, int $nbrePlaces)
    {
        $reqSQL = "UPDATE Achats SET idClient= '$idClient', idSpectacle= '$idSpectacle', prixTotal= '$prixTotal', dateAchat= '$dateAchat', adresseEmail= '$adresseEmail', nbrePlaces= '$nbrePlaces' WHERE idAchat= '$idAchat'";
        $db = config::getConnexion();

        try{
            $query = $db->prepare($reqSQL);
            $query->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }  
    }
}
?>