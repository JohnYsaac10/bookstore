<?php
   /*
   *BASE CONTROLLER
   * loads the models and views
   */
   
   class Controller{

    // load the model
       public function model($model){
            //require model file
            require_once '../app/models/' . $model . '.php';

            //instantiate model
            return new $model();
       }

       public function view ($view, $data=[]){
            
              //if exits the view
              if(file_exists('../app/views/' . $view . '.php')){
                  require_once '../app/views/' . $view . '.php';

              }else{
                  //does not exist
                  die('View does not exist'); 
              }
       }
   }
   

?>

