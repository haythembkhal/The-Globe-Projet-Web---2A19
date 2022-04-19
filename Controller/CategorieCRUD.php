<?php

	include '../../config.php';
	include_once '../../Model/Categorie.php';
	
	class CategorieCRUD
	{
		function AfficherCategorie()
		{
			$sql="SELECT * FROM categories";
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
			$sql="INSERT INTO categories (id_cat, nom_cat) 
			VALUES (:id_cat, :nom_cat)";
			$db=config::getConnexion();
			try
			{
				$query=$db->prepare($sql);
				$query->execute([
					'id_cat'=>$categorie->get_id_cat(),
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
			$sql="SELECT * from categories where id_cat=$id_cat";
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
					'UPDATE categories SET 
						id_cat= :id_cat,
						nom_cat= :nom_cat,
					WHERE id_cat= :id_cat'
				);
				$query->execute([
					'id_cat'=>$categorie->get_id_cat(),
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
			$sql="DELETE FROM categories WHERE id_cat=:id_cat";
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
	}
	
?>