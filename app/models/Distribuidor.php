<?php
  

    class Distribuidor{

        private $db;
        public function __construct(){
          
            $this->db= new Database();
            
        }

        public function getLibros(){
            $this->db->query('SELECT * FROM libro');

            $result= $this->db->resultSet();

            return $result;
        }


        public function getPosts(){
            $this->db->query('SELECT * FROM ofertas');

            $result= $this->db->resultSet();

            return $result;
        }
    }