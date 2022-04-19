<?php

    class Categorie
    {

        private int $id_cat;
        private string $nom_cat;

        //Constructor
        public function __construct(string $nom_cat)
        {
            $this->nom_cat=$nom_cat;
        }

        //Getters
        public function get_nom_cat()
        {
            return $this->nom_cat;
        }

        //Setters
        public function set_nom_cat(string $nom_cat)
        {
            $this->nom_cat=$nom_cat;
        }

    }

?>
