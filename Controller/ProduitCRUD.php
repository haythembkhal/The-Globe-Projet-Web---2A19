<?php

	include_once '../../config.php';
	include_once '../../Model/Produit.php';
	
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
			$sql="INSERT INTO produits (nom_produit, categorie_produit, quantite_produit, prix_produit, image_produit) 
			VALUES (:nom_produit, :categorie_produit, :quantite_produit, :prix_produit, :image_produit)";
			$db=config::getConnexion();
			try
			{
				$query=$db->prepare($sql);
				$query->execute([
					'nom_produit'=>$produit->get_nom_produit(),
					'categorie_produit'=>$produit->get_categorie_produit(),
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
						categorie_produit= :categorie_produit, 
						quantite_produit= :quantite_produit, 
						prix_produit= :prix_produit,
						image_produit= :image_produit
					WHERE id_produit= :id_produit"
				);
				$query->execute([
					'nom_produit'=>$produit->get_nom_produit(),
					'categorie_produit'=>$produit->get_categorie_produit(),
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
/*
		function TriePrixASC()
		{
			$sql="SELECT * FROM produits ORDER BY prix_produit ASC";
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

		function TriePrixASC()
		{
			$sql="SELECT * FROM produits ORDER BY prix_produit ASC";
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

		function RechercheNom()
		{
			$sql="SELECT * FROM produits WHERE nom_produit=?";
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

		function RechercheCat()
		{
			$sql="SELECT * FROM produits WHERE categorie_produit=?";
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
		*/
	}

?>