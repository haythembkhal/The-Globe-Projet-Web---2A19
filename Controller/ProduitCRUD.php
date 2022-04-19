<?php

	include '../../config.php';
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
			$sql="INSERT INTO produits (id_produit, nom_produit, type_produit, quantite_produit, prix_produit) 
			VALUES (:id_produit, :nom_produit, :type_produit, :quantite_produit, :prix_produit)";
			$db=config::getConnexion();
			try
			{
				$query=$db->prepare($sql);
				$query->execute([
					'id_produit'=>$produit->get_id_produit(),
					'nom_produit'=>$produit->get_nom_produit(),
					'type_produit'=>$produit->get_type_produit(),
					'quantite_produit'=>$produit->get_quantite_produit(),
					'prix_produit'=>$produit->get_prix_produit()
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
					'UPDATE produits SET 
						id_produit= :id_produit,
						nom_produit= :nom_produit, 
						type_produit= :type_produit, 
						quantite_produit= :quantite_produit, 
						prix_produit= :prix_produit,
					WHERE id_produit= :id_produit'
				);
				$query->execute([
					'id_produit'=>$produit->get_id_produit(),
					'nom_produit'=>$produit->get_nom_produit(),
					'type_produit'=>$produit->get_type_produit(),
					'quantite_produit'=>$produit->get_quantite_produit(),
					'prix_produit'=>$produit->get_prix_produit(),
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

?>