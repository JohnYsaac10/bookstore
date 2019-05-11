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
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/icon-font.css">
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css"> 
        <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    </head>

    <body>
        <!--  INCLUDE NAV -->
        <div class="navigation">
             <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

             <label for="navi-toggle" class="navigation__button">
                <span class="navigation__icon">&nbsp;</span>
             </label>

        <div class="navigation__background">&nbsp;</div>

        <nav class="navigation__nav">
            <ul class="navigation__list">
                <li class="navigation__item"><a href="<?php echo URLROOT; ?>" class="navigation__link"><span>01</span>Home</a></li>
                <li class="navigation__item"><a href="<?php echo URLROOT; ?>/pages/about" class="navigation__link"><span>02</span>About</a></li>
                <li class="navigation__item"><a href="<?php echo URLROOT; ?>/postulantes/offers" class="navigation__link"><span>03</span>Trabaje con nosotros</a></li>
                <li class="navigation__item"><a href="<?php echo URLROOT; ?>/users/login" class="navigation__link"><span>04</span>Login</a></li>
                <li class="navigation__item"><a href="<?php echo URLROOT; ?>/users/register" class="navigation__link"><span>05</span>Register</a></li>
             </ul>
        </nav>
    </div> 

        <header class="header">
            <div class="header__logo-box">
                <img src="<?php echo URLROOT; ?>/images/logo2.png" alt="libreria guayaquil" class="header__logo">
            </div>

            <div class="header__text-box">
                <h1 class="heading-primary">
                    <span class="heading-primary--main"><?php echo SITENAME; ?></span>
                    <span class="heading-primary--sub">pasion por la lectura</span>
                </h1>

                <a href="#section-tours" class="btn btn--white btn--animated">Descubre tu libro</a>
            </div>
        </header>

 

<main>
            <section class="section-about">
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary heading-secondary--green">
                        Ven y conoce la coleccion mas grande de libros
                    </h2>
                </div>

                <div class="row">
                    <div class="col-1-of-2">
                        <h3 class="heading-tertiary u-margin-bottom-small">no sabras por donde comenzar!</h3>
                        <p class="paragraph">
                            Tenemos mas de 15 stands, con las mas variadas tematicas.
                            Tienes un libro en mente?... De seguro lo tenemos!
                        </p>

                        <h3 class="heading-tertiary u-margin-bottom-small">inicio de clases con <?php echo SITENAME; ?></h3>
                        <p class="paragraph">
                            Contamos con gran variedad de texto escolares.
                            textos infantiles, de colegio, universitarios y mucho mas...
                            El usuario de tu web deseara regresar a tu sitio.
                        </p>

                        <a href="#" class="btn-text">Leer mas &rarr;</a>
                    </div>
                    <div class="col-1-of-2">
                        <div class="composition">

                            <img alt="diseño web guayaquil" srcset="images/stands1.jpg 300w, images/stands1.jpg 1000w"
                                 sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                                 alt="Photo 1"
                                 class="composition__photo composition__photo--p1"
                                 src="images/stands1.jpg">

                            <img alt="creacion web guayaquil" srcset="images/stands2.jpg 300w, images/stands2.jpg 1000w"
                                 sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                                 alt="Photo 2"
                                 class="composition__photo composition__photo--p2"
                                 src="images/stands2.jpg">

                            <img alt="programacion web guayaquil" srcset="images/stands3.jpg 300w, images/stands3.jpg 1000w"
                                 sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                                 alt="Photo 3"
                                 class="composition__photo composition__photo--p3"
                                 src="images/stands3.jpg">

                            <!--
                            <img src="img/nat-1-large.jpg" alt="Photo 1" class="composition__photo composition__photo--p1">
                            <img src="img/nat-2-large.jpg" alt="Photo 2" class="composition__photo composition__photo--p2">
                            <img src="img/nat-3-large.jpg" alt="Photo 3" class="composition__photo composition__photo--p3">
                            -->
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-features">
                
                <div class="row">
                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-location"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">Encuentranos</h3>
                            <p class="feature-box__text">
                                Estamos en los principales ciudades y centros comerciales de Ecuador. Estamos cerca de ti
                            </p>
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-money"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">Ahorra</h3>
                            <p class="feature-box__text">
                                Siempre encontraras promociones para cada epoca del año. excelente calidad a buen precio.
                            </p>
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-time"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">Horarios</h3>
                             <p class="feature-box__text">
                                Atendemos en horarios de centros comerciales y en nuestras sucursales horario de oficina.
                            </p>
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-clients"></i>
                            <h3 class="heading-tertiary u-margin-bottom-small">Pedido Al x Mayor</h3>
                            <p class="feature-box__text">
                                Nuestros colaboradores cordinaran todo su pedido y envio, dejalo todo en muestras manos.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-tours" id="section-tours">
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary heading-secondary--green">
                        Precios/suscripciones
                    </h2>
                </div>

                <div class="row">
                    <div class="col-1-of-3">
                       <div class="card">
                           <div class="card__side card__side--front">
                                <div class="card__picture card__picture--1">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--1">Tarjeta Afiliado</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li>Obten Beneficios</li>
                                        <li>desc en Meetups</li>
                                        <li>descuento en compras</li>
                                        <li>Acumula puntos</li>
                                        <li></li>
                                    </ul>
                                </div>
                           </div>
                           <div class="card__side card__side--back card__side--back-1">
                                <div class="card__cta">
                                    <div class="card__price-box">
                                        <p class="card__price-only">Only</p>
                                        <p class="card__price-value">$9,99  <p style="text-transform: uppercase; font-size: 1rem;">más&nbsp;&nbsp;iva</p> </p>
                                    </div>
                                    <a href="#popup" class="btn btn--white">Lo Quiero!</a>
                                </div>
                            </div>
                       </div>
                    </div>


                    <div class="col-1-of-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--2">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--2">AudioBooks</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li>Escucha todos los libros</li>
                                        <li>Descargatelos</li>
                                        <li>primer mes gratis</li>
                                        <li>Hasta 3 Cuentas</li>
                                        <li>Todos los idiomas</li>
                                    </ul>
                                </div>

                            </div>
                            <div class="card__side card__side--back card__side--back-2">
                                <div class="card__cta">
                                    <div class="card__price-box">
                                        <p class="card__price-only">Only</p>
                                        <p class="card__price-value">$16,80 <p style="text-transform: uppercase; font-size: 1rem;">más&nbsp;&nbsp;iva</p></p>
                                    </div>
                                    <a href="#popup" class="btn btn--white">Lo Quiero!</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-1-of-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--3">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--3">Ebooks</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li>Lee todos los libros</li>
                                        <li>Calidad ebook, pdf, epub</li>
                                        <li>descargas</li>
                                        <li>Compatibilidad con amazon kindle</li>
                                        <li>primer mes gratis</li>
                                    </ul>
                                </div>

                            </div>
                            <div class="card__side card__side--back card__side--back-3">
                                <div class="card__cta">
                                    <div class="card__price-box">
                                        <p class="card__price-only">Only</p>
                                        <p class="card__price-value">$13,50<p style="text-transform: uppercase; font-size: 1rem;">más&nbsp;&nbsp;iva</p></p>
                                    </div>
                                    <a href="#popup" class="btn btn--white">Lo Quiero!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                
                <div class="u-center-text u-margin-top-huge">
                    <a href="#" class="btn btn--green">Mas Información</a>
                </div>
            </section>

            <section class="section-stories">
                <div class="bg-video">
                    <video alt="software guayaquil" class="bg-video__content" autoplay muted loop>
                        <source src="images/bgvideo2.mp4" type="video/mp4">
                        <!--<source src="img/video.webm" type="video/webm">-->
                        Your browser is not supported!
                    </video>
                </div>

                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary heading-secondary--green">
                            LIBROS PARA LEER EN VERANO
                    </h2>
                </div>

                <div class="row">
                    <div class="story">
                        <figure class="story__shape">
                            <img alt="diseño de paginas web guayaquil" src="images/premiadas.png" alt="Person on a tour" class="story__img">
                            <figcaption class="story__caption">Premiadas</figcaption>
                        </figure>
                        <div class="story__text">
                            <h3 class="heading-tertiary u-margin-bottom-small">NOVELAS PREMIADAS</h3>
                            <p>
                                    El fuego invisible(Javier Sierra), Premio Planeta de la novela 2017. Niebla en Tanger (Cristina lopez Barrio)Premio 
                                    Planeta de la novela 2017. Cancion de sangre y oro (Jorge Molist) Premio de la novela fernando lara 2017. 
                                    Trilogia de la guerra (Agustin fernandez Mallo) Premio Biblioteca Breve 2018
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="story">
                        <figure class="story__shape">
                            <img alt="creacion webs guayaquil" src="images/mejor-novela.png" alt="Person on a tour" class="story__img">
                            <figcaption class="story__caption">Material Design</figcaption>
                        </figure>
                        <div class="story__text">
                            <h3 class="heading-tertiary u-margin-bottom-small">EL LIBRO DEL VERANO</h3>
                            <p>
                                    Las hijas del Capitán. Tres hermanas, dos mundos, una ciudad. Nueva York, 1936. La pequeña casa de comidas El Capitán 
                                    arranca su andadura en la calle Catorce, uno de los enclaves de la colonia española que por entonces reside 
                                    en la ciudad. La muerte accidental de su dueño, el tarambana Emilio Arenas, obliga...
                                     
                            </p>
                        </div>
                    </div>
                </div>

                <div class="u-center-text u-margin-top-huge">
                    <a href="#" class="btn-text">Conocer mas &rarr;</a>
                </div>
            </section>

            <section class="section-book" id="section-book">
                <div class="row">
                    <div class="book">
                        <div class="book__form">
                            <form action="#" class="form">
                                <div class="u-margin-bottom-medium">
                                    <h2 class="heading-secondary heading-secondary--green">
                                        contactar ahora
                                    </h2>
                                </div>

                                <div class="form__group">
                                    <input type="text" class="form__input" placeholder="Full name" id="name" required>
                                    <label for="name" class="form__label">Full name</label>
                                </div>

                                <div class="form__group">
                                    <input type="email" class="form__input" placeholder="Email address" id="email" required>
                                    <label for="email" class="form__label">Email address</label>
                                </div>

                                <div class="form__group u-margin-bottom-medium">
                                    <div class="form__radio-group">
                                        <input type="radio" class="form__radio-input" id="small" name="size">
                                        <label for="small" class="form__radio-label">
                                            <span class="form__radio-button"></span>
                                            tengo un pedido
                                        </label>
                                    </div>

                                    <div class="form__radio-group">
                                        <input type="radio" class="form__radio-input" id="large" name="size">
                                        <label for="large" class="form__radio-label">
                                            <span class="form__radio-button"></span>
                                            tengo una consulta
                                        </label>
                                    </div>
                                </div>

                                <div class="form__group">
                                    <button class="btn btn--green">Next step &rarr;</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>

 

        <div class="popup" id="popup">
            <div class="popup__content">
                <div class="popup__left">
                    <img src="images/audiobooks.jpg" alt="Tour photo" class="popup__img">
                    <img src="images/ebook.jpg" alt="Tour photo" class="popup__img">
                </div>
                <div class="popup__right">
                    <a href="#section-tours" class="popup__close">&times;</a>
                    <h2 class="heading-secondary heading-secondary--green u-margin-bottom-small">Contactar</h2>
                    <h3 class="heading-tertiary u-margin-bottom-small">Importante &ndash; Todas las categorias de suscripcion incluyen</h3>
                    <p class="popup__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et  <br>
                        
                        dolore magna aliqua. Ut enim<br>
                         ad minim veniam, quis nostrud<br>
                          exercitation ullamco laboris<br>
                           nisi ut aliquip ex ea commodo consequat.<br>
                            Duis aute irure dolor in reprehenderit <br>
                            

                         <a href="#" class="footer__link" style="text-transform: lowercase;letter-spacing: 3px;">&nbsp;<i class="icon-facebook"></i> &nbsp; &nbsp;info@<?php echo SITENAME; ?>.com</a> <br> 
                        <a href="#" class="footer__link" style="letter-spacing: 3px;">&nbsp; <i class="icon-whatsapp"></i> &nbsp; &nbsp;(+593)  &nbsp; 0999999988</a>
                    </p>
                    <a href="#" class="btn btn--green">Contactar</a>
                </div>
            </div>
        </div>



<?php  require_once APPROOT. '/views/inc/footer.php'; ?> 