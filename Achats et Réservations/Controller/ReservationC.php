<?php
include_once '../../config.php';
include_once '../../Model/Reservation.php';

class ReservationC {
    function afficherReservation(){
        $reqSQL = "SELECT * FROM Reservations";
        $db = config::getConnexion();
		try{
			$liste = $db->query($reqSQL);
			return $liste;
		}
		catch(Exception $e)
        {
			die('Erreur:'. $e->getMessage());
		}
    }

    function ajouterReservation($Reservation){
        $reqSQL="INSERT INTO Reservations (idReservation, idAchat, numSiege) 
			VALUES (:idReservation,:idAchat,:numSiege)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($reqSQL);
				$query->execute([
					'idReservation' => $Reservation->get_idReservation(),
					'idAchat' => $Reservation->get_idAchat(),
					'numSiege' => $Reservation->get_numSiege()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}	
    }

    function supprimerReservation($idReservation){
        $reqSQL="DELETE FROM Reservations WHERE idReservation= :idReservation";
			$db = config::getConnexion();
			$req=$db->prepare($reqSQL);
			$req->bindValue(':idReservation', $idReservation);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
    }

    function recupererReservation($idReservation)
    {
        $reqSQL="SELECT * FROM Reservations WHERE idReservation = $idReservation";
        $db = config::getConnexion();
        try
        {
            $query=$db->prepare($reqSQL);
			$query->execute();

            $Reservation = $query->fetch();
            return $Reservation;
        }
        catch (Exception $e)
        {
			die('Erreur: '.$e->getMessage());
		} 
    }

    function modifierReservation($Reservation, $idReservation){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE Reservations SET 
                    idAchat= :idAchat, 
                    numSiege= :numSiege
                WHERE idReservation= :idReservation'
            );
            $query->execute([
                'idAchat' => $Reservation->get_idAchat(),
                'numSiege' => $Reservation->get_numSiege(),
                'idReservation' => $idReservation
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
?>