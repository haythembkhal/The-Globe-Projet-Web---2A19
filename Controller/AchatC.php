<?php
include_once '../../config.php';
include_once '../../Model/Achat.php';
include_once 'notificationC.php';
class AchatC {
    function afficherAchat()
    {
        $reqSQL = "SELECT * FROM Achats";
        $db = config::getConnexion();
        try
        {
            $liste = $db->query($reqSQL);
            return $liste;
        }
        catch (Exception $e)
        {
            die('Error : ' . $e->getMessage());
        }
    }

    function ajouterAchat($Achat)
    {
        $reqSQL = "INSERT INTO Achats (idClient, idSpectacle, prixTotal, dateAchat, adresseEmail, nbrePlaces)
        VALUES (:idClient, :idSpectacle, :prixTotal, :dateAchat, :adresseEmail, :nbrePlaces)";
        $db = config::getConnexion();
        try
        {
            $query = $db->prepare($reqSQL);
            $query->execute([
                'idClient' => $Achat->get_idClient(),
                'idSpectacle' => $Achat->get_idSpectacle(),
                'prixTotal' => $Achat->get_prixTotal(),
                'dateAchat' => $Achat->get_dateAchat(),
                'adresseEmail' => $Achat->get_adresseEmail(),
                'nbrePlaces' => $Achat->get_nbrePlaces(),
            ]);
        }
        catch (Exception $e)
        {
            die('Error : ' . $e->getMessage());
        }
    }

    function supprimerAchat($idAchat)
    {
        $reqSQL="DELETE FROM Achats WHERE idAchat= :idAchat";
        $db = config::getConnexion();
        $req = $db->prepare($reqSQL);
        $req->bindValue(':idAchat', $idAchat);
        try
        {
            $req->execute();
        }
        catch (Exception $e)
        {
            die('Error : ' . $e->getMessage());
        }
    }
    function recupererAchat($idAchat){
        $reqSQL="SELECT * FROM Achats WHERE idAchat= $idAchat";
        $db = config::getConnexion();
		try
        {
			$query=$db->prepare($reqSQL);
			$query->execute();

			$Achat=$query->fetch();
			return $Achat;
		}
		catch (Exception $e)
        {
			die('Erreur: '.$e->getMessage());
		} 
    }
    function modifierAchat($Achat, $idAchat)
    {
        try
        {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE Achats SET
                    idClient= :idClient,
                    idSpectacle= :idSpectacle,
                    prixTotal= :prixTotal,
                    dateAchat= :dateAchat,
                    adresseEmail= :adresseEmail,
                    nbrePlaces= :nbrePlaces
                WHERE idAchat= :idAchat'
            );
            $query->execute([
                'idClient' => $Achat->get_idClient(),
                'idSpectacle' => $Achat->get_idSpectacle(),
                'prixTotal' => $Achat->get_prixTotal(),
                'dateAchat' => $Achat->get_dateAchat(),
                'adresseEmail' => $Achat->get_adresseEmail(),
                'nbrePlaces' => $Achat->get_nbrePlaces(),
                'idAchat' => $idAchat
            ]);
            echo $query->rowCount() . "records UPDATED successfully <br>";
        }
        catch(PDOException $e)
        {
            $e->getMessage();
        }
    }

    //recherche
    function rechercher($critere)
    {
        $db = config::getConnexion();
        try {
            $query = $db->query("SELECT * FROM Achats WHERE adresseEmail like '%$critere%'");
			$query->execute(['adresseEmail'=>$critere]);
			$result=$query->fetchALL();
			return $result;
           
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function rechercherPlaces()
    {
        $db = config::getConnexion();
        try {
            $query = $db->query("SELECT nbrePlaces,COUNT(nbrePlaces) FROM Achats GROUP BY nbrePlaces");
			$query->execute();
			$result=$query->fetchALL();
			return $result;
           
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    //tri
    function triDESC()
    {
        $db = config::getConnexion();
        try {
            $query = $db->query("SELECT * FROM Achats ORDER BY dateAchat DESC");
			$result=$query->fetchALL();
			return $result;
           
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    
    function triASC()
    {
        $db = config::getConnexion();
        try {
            $query = $db->query("SELECT * FROM Achats ORDER BY dateAchat ASC");
			$result=$query->fetchALL();
			return $result;
           
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
?>