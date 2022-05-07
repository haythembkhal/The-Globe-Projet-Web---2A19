<?php
    class type_cong
    {
        private $id_typeCong = NULL;
        private $name_typeCong = NULL;
        private $max_typeCong = NULL;
        function __construct($id_typeCong, $name_typeCong, $max_typeCong)
        {
            $this->id_typeCong = $id_typeCong;
            $this->name_typeCong = $name_typeCong;
            $this->max_typeCong = $max_typeCong;
        }
        function get_id_typeCong(){ return $this->id_typeCong; }
        function get_name_typeCong(){ return $this->name_typeCong; }
        function get_max_typeCong(){ return $this->max_typeCong; }

        function set_id_typeCong(string $id_typeCong){ $this->id_typeCong = $id_typeCong; }
        function set_name_typeCong(string $name_typeCong){ $this->name_typeCong = $name_typeCong; }
        function set_max_typeCong(string $max_typeCong){ $this->max_typeCong = $max_typeCong; }
    }
?>