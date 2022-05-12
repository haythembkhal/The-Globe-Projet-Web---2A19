<?php

	include_once '../../config.php';
	include_once '../../Model/Categories.php';
	
	class CategorieCRUD
	{
		function AfficherCategorie()
		{
			$sql="SELECT * FROM categorie";
			$db=config::getConnexion();
			try
			{
				$liste=$db->query($sql);
				return $liste;
			}
			catch(Exception $e)
			{
				die('Erreur:'. $e->getMessage());
			}
		}

		function AjouterCategorie($categorie)
		{
			$sql="INSERT INTO categorie (nom_cat) 
			VALUES (:nom_cat)";
			$db=config::getConnexion();
			try
			{
				$query=$db->prepare($sql);
				$query->execute([
					'nom_cat'=>$categorie->get_nom_cat()
				]);			
			}
			catch (Exception $e)
			{
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function RecupererCategorie($id_cat)
		{
			$sql="SELECT * from categorie where id_cat=$id_cat";
			$db=config::getConnexion();
			try
			{
				$query=$db->prepare($sql);
				$query->execute();

				$categorie=$query->fetch();
				return $categorie;
			}
			catch (Exception $e)
			{
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function ModifierCategorie($categorie, $id_cat)
		{
			try
			{
				$db=config::getConnexion();
				$query=$db->prepare(
					"UPDATE categorie SET 
						nom_cat= :nom_cat
					WHERE id_cat= :id_cat"
				);
				$query->execute([
					'nom_cat'=>$categorie->get_nom_cat(),
					'id_cat'=>$id_cat
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			}
			catch (PDOException $e)
			{
				$e->getMessage();
			}
		}

        function SupprimerCategorie($id_cat)
		{
			$sql="DELETE FROM categorie WHERE id_cat=:id_cat";
			$db=config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_cat', $id_cat);
			try
			{
				$req->execute();
			}
			catch(Exception $e)
			{
				die('Erreur:'. $e->getMessage());
			}
		}

		function TrierNomCatASC()
		{
			$db=config::getConnexion();
			try {
				$query = $db->query("SELECT * FROM categorie ORDER BY nom_cat ASC");
				$liste=$query->fetchALL();
				return $liste;
			   
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		function TrierNomCatDESC()
		{
			$db=config::getConnexion();
			try {
				$query = $db->query("SELECT * FROM categorie ORDER BY nom_cat DESC");
				$liste=$query->fetchALL();
				return $liste;
			   
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
	}
	
?>