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

		/*function Rechercher()
		{
			$sear ="SELECT * FROM produits ";

			if(isset($_POST['search'])) {
				$search_term = mysql_real_escape_string($_POST['search_box']);
				$sear .= "WHERE nom_produit = '($search_term)' ";
			}
			$query_sear = mysql_query($sear) or die(mysql_error());
		}
*/


		//Recherche 
		/*function recherche($nom_produit)
		{
			global $pdo;
			$req = $pdo->prepare("select * from produits where nom_produit=?");
			$valeur = array($login);
			$req->execute($valeur);
			$nbr_user = $req->rowCount();
			return $nbr_user;
		}
		*/

		//SELECT * FROM produits ORDER BY prix_produits ASC
		//SELECT * FROM produits ORDER BY prix_produits DESC
	}

?>