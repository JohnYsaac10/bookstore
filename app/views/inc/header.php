<!DOCTYPE html>
<html lang="es">
    <head>
        <title><?php echo SITENAME; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Ysaac bookstore, libreria guayaquil">
        <meta name="keywords" content="librerias guayaquil-ecuador, libros online" />
        <link rel="canonical" href="https://www.ysaaclibrary.tk/">
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/icon-font.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/bootstrap.min.css">
        <link rel="shortcut icon" type="image/png" href="<?php echo URLROOT; ?>/images/favicon.png">
    </head>


    <style>
      body{padding:30px;} .maringButtonMediun{margin-bottom: 5rem}
      @font-face{font-family:'icomoon';src:url("<?php echo URLROOT; ?>/css/fonts/icomoon.eot?ws6nut");src:url("<?php echo URLROOT; ?>/css/fonts/icomoon.eot?ws6nut#iefix") format("embedded-opentype"),url("<?php echo URLROOT; ?>/css/fonts/icomoon.ttf?ws6nut") format("truetype"),url("<?php echo URLROOT; ?>/css/fonts/icomoon.woff?ws6nut") format("woff"),url("<?php echo URLROOT; ?>/css/fonts/icomoon.svg?ws6nut#icomoon") format("svg");font-weight:normal;font-style:normal}[class^="icon-"],[class*=" icon-"]{font-family:'icomoon' !important;speak-as:none;font-style:normal;font-weight:normal;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
      .icon-facebook:before{content:"\e904";color:#3b5998}.icon-whatsapp:before{content:"\e905";color:#25d366}
      .col-1-of-2{width:calc((100% - 3.75rem) / 2)}
    .footer{background-color:#333;padding:100px 0;font-size:14px;color:#f7f7f7}@media only screen and (max-width: 56px){.footer{padding:80px 0}}.footer__logo-box{text-align:center;margin-bottom:80px}@media only screen and (max-width: 56px){.footer__logo-box{margin-bottom:60px}}.footer__logo{width:150px;height:auto}.footer__navigation{border-top:1px solid #777;padding-top:20px;display:inline-block}@media only screen and (max-width: 56px){.footer__navigation{width:100%;text-align:center}}.footer__list{list-style:none}.footer__item{display:inline-block}.footer__item:not(:last-child){margin-right:15px}.footer__link:link,.footer__link:visited{color:#f7f7f7;background-color:#333;text-decoration:none;text-transform:uppercase;display:inline-block;transition:all .2s}.footer__link:hover,.footer__link:active{color:#55c57a;box-shadow:0 10px 20px rgba(0,0,0,0.4);transform:rotate(5deg) scale(1.3)}.footer__copyright{border-top:1px solid #777;padding-top:20px;width:80%;float:right}@media only screen and (max-width: 56px){.footer__copyright{width:100%;float:none}}
    </style>

    <body>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
  <a class="navbar-brand" href="<?php echo URLROOT; ?>"><?php echo SITENAME; ?> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item">
        <a class="nav-link" href="<?php echo URLROOT; ?>">Home</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo URLROOT; ?>/pages/about">About</a>
      </li>

    </ul>

    <ul class="navbar-nav ml-auto">
      <?php if(isset($_SESSION['user_id'])) : ?>
          <?php if($_SESSION['user_rol']==4) : ?>
             <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>/postulantes/editCv">Edit CV</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>/postulantes/offers">Job offers</a>
             </li>
          <?php endif; ?>
          <?php if($_SESSION['user_rol']==1) : ?>
             <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>/admins/createUser">Create User</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>/admins/index">Post Offer</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>/admins/createItem">create item</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>/admins/viewPostulants">view postulants</a>
             </li>
          <?php endif; ?>
          <?php if($_SESSION['user_rol']==3) : ?>
             <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>/bodega/viewOrders">View Orders</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>/bodega/viewStock">View stock</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>/bodega/cargaInventario">carga de inventario</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>/jefeBodega/pedidosArmados">pedidos armados</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>/jefeBodega/resignarCaja">reasignar caja</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>/jefeBodega/devolucion">devolucion</a>
             </li>
          <?php endif; ?>
          <?php if($_SESSION['user_rol']==2) : ?>
             
          <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>/distribuidores/index">Hacer Pedidos</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>/distribuidores/verPedidos">View Orders</a>
             </li>
             
               <!-- aqui va distribuidor -->

          <?php endif; ?>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout">Log out</a>
          </li>
      <?php else : ?>
        <li class="nav-item">
             <a class="nav-link" href="<?php echo URLROOT; ?>/users/register">Register</a>
        </li>

        <li class="nav-item">
             <a class="nav-link" href="<?php echo URLROOT; ?>/users/login">Login</a>
        </li>

      <?php endif; ?>

    </ul>


    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
