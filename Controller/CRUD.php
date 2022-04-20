<?php

	include '../../config.php';
	include_once '../../Model/Produit.php';
	include_once '../../Model/Categorie.php';
	
	class ProduitCRUD
	{
		function AfficherProduit()
		{
			$sql="SELECT * FROM produits";
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

		function AjouterProduit($produit)
		{
			$sql="INSERT INTO produits (nom_produit, type_produit, quantite_produit, prix_produit, image_produit) 
			VALUES (:nom_produit, :type_produit, :quantite_produit, :prix_produit, :image_produit)";
			$db=config::getConnexion();
			try
			{
				$query=$db->prepare($sql);
				$query->execute([
					'nom_produit'=>$produit->get_nom_produit(),
					'type_produit'=>$produit->get_type_produit(),
					'quantite_produit'=>$produit->get_quantite_produit(),
					'prix_produit'=>$produit->get_prix_produit(),
					'image_produit'=>$produit->get_image_produit()
				]);			
			}
			catch (Exception $e)
			{
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function RecupererProduit($id_produit)
		{
			$sql="SELECT * from produits where id_produit=$id_produit";
			$db=config::getConnexion();
			try
			{
				$query=$db->prepare($sql);
				$query->execute();

				$produit=$query->fetch();
				return $produit;
			}
			catch (Exception $e)
			{
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function ModifierProduit($produit, $id_produit)
		{
			try
			{
				$db=config::getConnexion();
				$query=$db->prepare(
					"UPDATE produits SET 
						nom_produit= :nom_produit, 
						type_produit= :type_produit, 
						quantite_produit= :quantite_produit, 
						prix_produit= :prix_produit,
						image_produit= :image_produit
					WHERE id_produit= :id_produit"
				);
				$query->execute([
					'nom_produit'=>$produit->get_nom_produit(),
					'type_produit'=>$produit->get_type_produit(),
					'quantite_produit'=>$produit->get_quantite_produit(),
					'prix_produit'=>$produit->get_prix_produit(),
					'image_produit'=>$produit->get_image_produit(),
					'id_produit'=>$id_produit
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			}
			catch (PDOException $e)
			{
				$e->getMessage();
			}
		}
		
		function SupprimerProduit($id_produit)
		{
			$sql="DELETE FROM produits WHERE id_produit=:id_produit";
			$db=config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_produit', $id_produit);
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
			$sql="INSERT INTO categories (nom_cat) 
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
					"UPDATE categories SET 
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