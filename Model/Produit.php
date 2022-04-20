<?php

	class Produit
	{
		
		private $id_produit;
		private $nom_produit;
		private $type_produit;
		private $quantite_produit;
		private $prix_produit;
		private $image_produit;
		
		//Constructor
		public function __construct($id_produit, $nom_produit, $type_produit, $quantite_produit, $prix_produit, $image_produit)
		{
			$this->id_produit=$id_produit;
			$this->nom_produit=$nom_produit;
			$this->type_produit=$type_produit;
			$this->quantite_produit=$quantite_produit;
			$this->prix_produit=$prix_produit;
			$this->image_produit=$image_produit;
		}

		//Getters
		public function get_id_produit()
		{
			return $this->id_produit;
		}

		public function get_nom_produit()
		{
			return $this->nom_produit;
		}

		public function get_type_produit()
		{
			return $this->type_produit;
		}

		public function get_quantite_produit()
		{
			return $this->quantite_produit;
		}

		public function get_prix_produit()
		{
			return $this->prix_produit;
		}

		public function get_image_produit()
		{
			return $this->image_produit;
		}

		//Setters
		public function set_nom_produit(string $nom_produit)
		{
			$this->nom_produit=$nom_produit;
		}

		public function set_type_produit(string $type_produit)
		{
			$this->type_produit=$type_produit;
		}

		public function set_quantite_produit(int $quantite_produit)
		{
			$this->quantite_produit=$quantite_produit;
		}

		public function set_prix_produit(int $prix_produit)
		{
			$this->prix_produit=$prix_produit;
		}

		public function set_image_produit(string $image_produit)
		{
			$this->image_produit=$image_produit;
		}
		
	}

?>