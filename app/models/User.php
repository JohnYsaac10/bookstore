<?php
 class User{

     private $db;

     public function __construct(){
         $this->db = new Database();
     }



     public function register($data){
        $firstQuery=false;

        $this->db->query('INSERT INTO persona(nombres, apellidos, direccion, telefono, email) VALUES(:name, :surname, :adress, :phone, :email)');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':surname', $data['surname']);
        $this->db->bind(':adress', $data['adress']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':email', $data['email']);
        
        if($this->db->execute()){
            $firstQuery=true;
        }

        if($firstQuery){

        $this->db->query('INSERT INTO usuario(nombre, clave, estado, idPersona, idRol) VALUES(:username, :password, :state, :idPersona, :idRol)');
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':state', 1);
        $this->db->bind(':idPersona', $this->db->idLastTransc());
        $this->db->bind(':idRol', $data['rol']);
        }

        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }

     }

     public function findUserByEmail($email){
        $this->db->query('select * from persona where email= :email');

        $this->db->bind(':email', $email);

        
        $row= $this->db->single();

        if($this->db->rowCount()>0){
             return true;
        }

        else{
            return false;
        }

     }


     public function login($email, $password){
        $this->db->query('SELECT P.id, email, nombre, clave, estado, idRol FROM persona as P, usuario as U ' 
        . 'WHERE P.email = :email && U.idPersona=P.id;');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        $hashed_password = $row->clave;
        if(password_verify($password, $hashed_password)){
              return $row;
        }
        else{
            return false;
        }

     }

 }


?>