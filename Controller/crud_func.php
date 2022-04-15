<?php
    include '../config.php';
	include_once '../Model/conges.php';
    class CongesC{
        function afficherConges()
        {
            $sql = "SELECT * FROM conges";
            $db = config::getConnexion();
            try {
                $liste = $db->query($sql);
                return $liste;
            } catch (Exception $e) {
                die('Error :'. $e->getMessage());
            }
        }
        /*function afficherCongesM($id_cong)
        {
            $sql = "SELECT * FROM conges WHERE id_conge =:id_conge";
            $db = config::getConnexion();
            $req = $db->prepare($sql);
            $req->bindValue(':id_conge', $id_cong);
            try {
                $liste = $db->query($req);
                return $liste;
            } catch (Exception $e) {
                die('Error :'. $e->getMessage());
            }
        }*/
        function ajouterConge($Conge)
        {
            $sql="INSERT INTO conges (employes, type_conge, date_deb, date_fin)
            VALUES (:Employes, :type_Cong, :date_deb, :date_fin)";
            $db = config::getConnexion();
            try{
				$query = $db->prepare($sql);
				$query->execute([
					'Employes' => $Conge->get_employe_cong(),
					'type_Cong' => $Conge->get_type_cong(),
					'date_deb' => $Conge->get_deb_cong(),
					'date_fin' => $Conge->get_fin_cong(),
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
        }
        function supprimerConge($id_cong){
            $sql="DELETE FROM conges WHERE id_conge =:id_conge";
            $db = config::getConnexion();
            $req = $db->prepare($sql);
            $req->bindValue(':id_conge', $id_cong);
            try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
        }
        function modifierConge($Conge, $id_conge)
        {
            try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE conges SET 
						employes= :Employes, 
						type_conge= :type_conge, 
						date_deb= :date_deb, 
						date_fin= :date_fin, 
						etat= :Etat
					WHERE id_conge= :id_conge'
				);
				$query->execute([
					'Employes' => $Conge->get_employe_cong(),
					'type_conge' => $Conge->get_type_cong(),
					'date_deb' => $Conge->get_deb_cong(),
					'date_fin' => $Conge->get_fin_cong(),
                    'Etat' => $Conge->get_etat_cong(),
					'id_conge' => $id_conge
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
        }
    }
?>