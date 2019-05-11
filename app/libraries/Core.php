<?php

   /*  App Core class
       CREATE URLs LOADS CORE CONTROLLERS
        url format  /controller/method/param
   */

   class Core{
       protected $currentController = 'Pages';
       protected $currentMethod ='index';
       protected $params = [];


       public function __construct(){
           //print_r ($this->getUrl()); 
           $url = $this->getUrl();
           
           if(file_exists('../app/controllers/' . ucwords($url[0]) . '.php')){
            $this->currentController = ucwords($url[0]);
            unset($url[0]);
           }

           //require controller
           require_once '../app/controllers/' . $this->currentController . '.php';

           //intantiate controller

           $this->currentController = new $this->currentController;

           //check the method

           if(isset($url[1])){
               if(method_exists($this->currentController, $url[1])){
                   $this->currentMethod=$url[1];
                   unset($url[1]);
               }
           }

           //get params

           $this->params= $url ? array_values($url) : [];

           call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
       }


       public function getUrl(){
           if(isset($_GET['url'])){
               
              $url = rtrim($_GET['url'], '/');
              $url = filter_var($url, FILTER_SANITIZE_URL);   //delete any rare letter or sign 
              
              $url= explode('/', $url);
              return $url;
           }
       }
   }
?>