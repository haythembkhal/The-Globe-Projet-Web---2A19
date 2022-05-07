<?php
    include '../../Controller/notificationC.php';
	include_once '../../Model/conges.php';
    include_once '../../Model/type_cong.php';
    class CongesC
    {
        function afficherConges()
        {
            $sql = "SELECT * FROM conges, typec WHERE conges.type_conge = typec.id_typeC;";
            $db = config::getConnexion();
            try {
                $liste = $db->query($sql);
                return $liste;
            } catch (Exception $e) {
                die('Error :'. $e->getMessage());
            }
        }
        function recupererConge($id_cong){
			$sql="SELECT * from conges where id_conge=$id_cong";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$conge=$query->fetch();
				return $conge;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
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
		function get_TypeStats()
		{
			$sql = "SELECT type_conge,Name, COUNT(type_conge) FROM conges,typec WHERE conges.type_conge = typec.id_typeC GROUP BY type_conge;";
            $db = config::getConnexion();
            try {
                $liste = $db->query($sql);
                return $liste;
            } catch (Exception $e) {
                die('Error :'. $e->getMessage());
            }
		}
    }
    class typeC
    {
        function affichertypeC()
        {
            $sql = "SELECT * FROM typec";
            $db = config::getConnexion();
            try {
                $liste = $db->query($sql);
                return $liste;
            } catch (Exception $e) {
                die('Error :'. $e->getMessage());
            }
        }
        function ajoutertypeC($typec)
        {
            $sql="INSERT INTO typec (Name, Max)
            VALUES (:Name, :Max)";
            $db = config::getConnexion();
            try{
				$query = $db->prepare($sql);
				$query->execute([
					'Name' => $typec->get_name_typeCong(),
					'Max' => $typec->get_max_typeCong(),
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
        }
        function supprimertypeC($id_typeC){
            $sql="DELETE FROM typec WHERE id_typeC =:id_typeC";
            $db = config::getConnexion();
            $req = $db->prepare($sql);
            $req->bindValue(':id_typeC', $id_typeC);
            try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
        }
        function recuperertypeC($id_typeC){
			$sql="SELECT * from typec where id_typeC=$id_typeC";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$typec=$query->fetch();
				return $typec;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
        function modifiertypeC($typeC, $id_typeC)
        {
            try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE typec SET 
						Name= :Name, 
						Max= :Max 
					WHERE id_typeC= :id_typeC'
				);
				$query->execute([
					'Name' => $typeC->get_name_typeCong(),
					'Max' => $typeC->get_max_typeCong(),
					'id_typeC' => $id_typeC
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
        }
    }

?>