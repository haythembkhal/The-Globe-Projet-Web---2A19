<?php
    class Conges
    {
        private $id_cong = NULL;
        private $employe_cong = NULL;
        private $type_cong = NULL;
        private $deb_cong;
        private $fin_cong;
        private $etat_cong = NULL; //1 Pas accepte 0 accepte NULL non traite

        private $password = NULL;
        function __construct($id_cong, $employe_cong, $type_cong, $deb_cong, $fin_cong, $etat_cong)
        {
            $this->idcong = $id_cong;
            $this->employe_cong = $employe_cong;
            $this->type_cong = $type_cong;
            $this->deb_cong = $deb_cong;
            $this->fin_cong = $fin_cong;
            $this->etat_cong = $etat_cong;
        }
        function get_id_cong(){ return $this->id_cong; }
        function get_employe_cong(){ return $this->employe_cong; }
        function get_type_cong(){ return $this->type_cong; }
        function get_deb_cong(){ return $this->deb_cong; }
        function get_fin_cong(){ return $this->fin_cong; }
        function get_etat_cong(){ return $this->etat_cong; }

        function set_id_cong(string $id_cong){ $this->id_cong = $id_cong; }
        function set_employe_cong(string $employe_cong){ $this->employe_cong = $employe_cong; }
        function set_type_cong(string $type_cong){ $this->type_cong = $type_cong; }
        function set_deb_cong(string $deb_cong){ $this->deb_cong = $deb_cong; }
        function set_fin_cong(string $fin_cong){ $this->fin_cong = $fin_cong; }
        function set_etat_cong(string $etat_cong){ $this->etat_cong = $etat_cong; }
    }
?>