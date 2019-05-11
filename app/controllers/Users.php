<?php

   class Users extends Controller{


      public function __construct(){
        $this->userModel= $this -> model('User');

      }

      public function register(){
      // check for post

      if($_SERVER['REQUEST_METHOD']=='POST'){
        //process form
        $rol='';
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // Init data
        if(isset($_POST['rol'])){
          $rol=trim($_POST['rol']);
        }else{
          $rol= 4;
        }

        $data = [
          'rol'=> $rol,
          'name' => trim($_POST['name']),
          'surname' => trim($_POST['surname']),
          'adress' => trim($_POST['adress']),
          'phone' =>  trim($_POST['phone']),
          'email' => trim($_POST['email']),
          'username' => trim($_POST['username']),
          'password'=> trim($_POST['password']),
          'confirm_password'=> trim($_POST['confirm_password']),  
          'name_err' => '',
          'surname_err' => '',
          'adress_err' => '',
          'phone_err' => '',
          'email_err' => '',
          'username_err' => '',
          'password_err'=> '',
          'confirm_password_err'=> '',    
      ];


          if($this->userModel->findUserByEmail($data['email'])){
            $data['email_err'] = 'Email is already taken';

          }

          if(empty($data['email_err'])){
            // Validated

            //HASH PASSWORD
            $data['password']=password_hash($data['password'], PASSWORD_DEFAULT);
            // REGISTER USER
            if($this->userModel->register($data)){
              redirect('users/login');
            }else{
                die('something wrong');
            }

          } else {
            // Load view with errors
            $this->view('users/register', $data);
          }
  
         echo 'formulario enviado';
      }

      else{
        //init data
        //echo 'formurario de registro';
        $data = [
            'name' => '',
            'surname' => '',
            'adress' => '',
            'phone' => '',
            'email' => '',
            'username' => '',
            'password'=> '',
            'confirm_password'=> '',  
            'name_err' => '',
            'surname_err' => '',
            'adress_err' => '',
            'phone_err' => '',
            'email_err' => '',
            'username_err' => '',
            'password_err'=> '',
            'confirm_password_err'=> '',    
        ];

        $this->view ('users/register', $data);
      }
    }



    public function login(){
      // Check for POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        // Init data
        $data =[
          'email' => trim($_POST['email']),
          'password' => trim($_POST['password']),
          'email_err' => '',
          'password_err' => '',      
        ];

        // Validate Email
        if(empty($data['email'])){
          $data['email_err'] = 'Pleae enter email';
        }

        // Validate Password
        if(empty($data['password'])){
          $data['password_err'] = 'Please enter password';
        }

        // Check for user/email
        if($this->userModel->findUserByEmail($data['email'])){
          // User found
        } else {
          // User not found
          $data['email_err'] = 'No user found';
        }

        // Make sure errors are empty
        if(empty($data['email_err']) && empty($data['password_err'])){
          // Validated
          // Check and set logged in user
          $loggedInUser = $this->userModel->login($data['email'], $data['password']);

          if($loggedInUser){
            // Create Session
            $this->createUserSession($loggedInUser);
            
          } else {
            $data['password_err'] = 'Password incorrect';

            $this->view('users/login', $data);
          }
        } else {
          // Load view with errors
          $this->view('users/login', $data);
        }


      } else {
        // Init data
        $data =[    
          'email' => '',
          'password' => '',
          'email_err' => '',
          'password_err' => '',        
        ];

        // Load view
        $this->view('users/login', $data);
      }
    }

    public function createUserSession($user){
      $_SESSION['user_id'] = $user->id;
      $_SESSION['user_email'] = $user->email;
      $_SESSION['user_name'] = $user->nombre;
      $_SESSION['user_state'] = $user->estado;
      $_SESSION['user_rol'] = $user->idRol;

      if($_SESSION['user_rol']==1){
        redirect('admins/index');
      }
      if($_SESSION['user_rol']==2){
        redirect('distribuidores/index');
      }
      if($_SESSION['user_rol']==3){
        redirect('bodegas/index');
      }
      if($_SESSION['user_rol']==4){
        redirect('postulantes/index');
      }
      
    }

    public function logout(){
      unset($_SESSION['user_id']);
      unset($_SESSION['user_email']);
      unset($_SESSION['user_name']);
      unset($_SESSION['user_state']);
      unset($_SESSION['user_rol']);
      session_destroy();
      redirect('users/login');
    }



   }




?>