<?php
//include '../../config.php';
//include_once '../../Model/Reservation.php';

class ReservationC {
    function afficherReservation(){
        $sql = "SELECT * FROM Reservations";
        $db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
    }

    function supprimerReservation($idReservation){
        $sql="DELETE FROM Reservations WHERE idReservation=:idReservation";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idReservation', $idReservation);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
    }

    function ajouterReservation($Reservation){
        $sql="INSERT INTO Reservations (idReservation, idAchat, numSiege) 
			VALUES (:idReservation,:idAchat,:numSiege)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'idReservation' => $adherent->get_idReservation(),
					'idAchat' => $adherent->get_idAchat(),
					'numSiege' => $adherent->get_numSiege(),
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}	
    }

    function modifierReservation($Reservation, $idReservation){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE Reservations SET 
                    idReservation= :idReservation, 
                    idAchat= :idAchat, 
                    numSiege= :numSiege, 
                WHERE idReservation= :idReservation'
            );
            $query->execute([
                'idReservation' => $adherent->get_idReservation(),
                'idAchat' => $adherent->get_idAchat(),
                'numSiege' => $adherent->get_numSiege(),
                'idReservation' => $idReservation
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
?>