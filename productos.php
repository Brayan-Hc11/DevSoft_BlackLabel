    <!--linkiamos metadatos-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!--linkiamos las hojas de estilo y demas documentos-->
        <link rel="stylesheet" href="CSS/Productos.css"><!--hoja deestilos de css-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        
<?php

class usuario
{
    public function productos()
    {
        echo '
        <!DOCTYPE html>
        <html lang="es">
        <head>
                    <!--titulo que se vera en la pestaña del aplicativo web-->
                    <title>Productos en BlackLabel</title>

                    <!--https://unsplash.com/es/s/fotos/teconoligia banco de imagenes gratuitas y sin derechos de autor-->

        </head>

        <body>
            
        <header>
            <!--En el header podemos encontrar los iconos de servicio al cliente-->
                    <div class="container-hero">
                        <div class="container hero">
                            <div class="customer-support">
                                <a href="cliente.php"><i class="fa-solid fa-headset"></i></a>
                                <div class="content-customer-support">
                                    <span class="text">Soporte al cliente</span>
                                    <span class="number">123-456-7890</span>
                                </div>
                            </div>
        <!--Icono de la empresa y el icon de la etiqueta-->
                            <div class="container-logo">
                                <i class="fa-solid fa-tag"></i>
                                <h1 class="logo"><a href="blackLabel.php">BLacklabel</a></h1>
                            </div>
        <!--Icono de incio sesión,lista de categorias y carrito de compras-->
                            <div class="container-user">
                                <a href="categorias.php"><i class="fa-solid fa-list"></i></a>
                                <a href="acceder.php"><i class="fa-solid fa-user"></i></a>
                                <a href="compras.php"><i class="fa-solid fa-basket-shopping"></i></a>
                                <div class="content-shopping-cart">
                                    <span class="text">carrito de compras</span>
                                    <span class="number">(0)</span>
                                </div>
                            </div>
                        </div>
                    </div>

        <!--Declaramos un navbar o menu de navegación--------------------------------------------------------------------------------------------------------------->
                    <div class="container-navbar">
                        <nav class="navbar container">
                            <i class="fa-solid fa-bars"></i>
                            <ul class="menu">
                                <li><a href="#">categoria 1</a></li>
                                <li><a href="#">categoria 2</a></li>
                                <li><a href="#">categoria 3</a></li>
                                <li><a href="#">categoria 4</a></li>
                                <li><a href="#">categoria 5</a></li>
                                <li><a href="#">categoria 6</a></li>
                                <li><a href="#">categoria 7</a></li>
                                <li><a href="#">categoria 8</a></li>
                            </ul>
        <!--Declaramos un formulario de busqeuda---------------------------------------------------------------------------------------------------------------------->
                            <form class="search-form">
                                <input type="search" placeholder="Buscar...">
                                <button class="btn-search">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </form>
                        </nav>
                    </div>
                </header>

        <!--Decalaramos un  slider automatico- ---------------------------------------------------------------------------------------------------------------------------->
            <div class="scrol">
                <section class="slidersec">

                <div class="container-slider">
                    <div class="slider" id="slider">

                        <div class="slider__section">
                            <img src="imagenes/monitor.png" class="slider__img"></div>
                        
                        <div class="slider__section">
                            <img src="imagenes/mesaelectronica.png" class="slider__img"></div>

                        <div class="slider__section">
                            <img src="imagenes/audifonos.jpg" class="slider__img"></div>
                        
                        <div class="slider__section">
                            <img src="imagenes/productos_tecnologicos.jpg" class="slider__img"></div>

                        <div class="slider__section">
                            <img src="imagenes/martin-shreder-5Xwaj9gaR0g-unsplash.jpg" class="slider__img"></div>      
                </div>
        <!--botones de dirección dentro del slider------------------------------------------------------------------------------------------------------------------------->
                <div class="slider__btn slider__btn--right" id="btn-right">&#62;</div><!--Controles de dirección (derecha)-->
                <div class="slider__btn slider__btn--left" id="btn-left">&#60;</div><!--Controles de dirección (izquierda)-->
            </div>
        </section>

        <!--Caracteristicas------------------------------------------------------------------------------------------------------------------------------------------------------>

        <main class="main-content">
            <section class="container container-features">

                <div class="card-feature">
                    <i class="fa-sharp fa-solid fa-plane-up"></i>
                    <div class="features-content">
                        <span>Envio gratuito a nivel mundial </span>
                        <p>pedido superior a 1150</p>
                    </div>
                </div>

                <div class="card-feature">
                    <i class="fa-solid fa-wallet"></i>
                    <div class="features-content">
                        <span>Contrareembolsos</span>
                        <p>100% garantía devolución de dinero</p>
                    </div>
                </div>

                <div class="card-feature">
                    <i class="fa-solid fa-gift"></i>
                    <div class="features-content">
                        <span>Tarjeta regalo especial </span>
                        <p>Ofrece bonos especiales con regalo</p>
                    </div>
                </div>

                <div class="card-feature">
                    <i class="fa-solid fa-headset"></i>
                    <div class="features-content">
                        <span>Servicio al cliente 24/7</span>
                        <p>Llamanos 24/7 al 123-456-7890</p>
                    </div>
                </div>
                </section>

                <section class="container top-categories">
                    <h1 class="heading-1">Mejores categorias</h1>
                    <div class="container-categories">

                        <div class="card-category category-element1">
                            <p>Elemento 1</p>
                            <span>ver más</span>
                        </div>

                        <div class="card-category category-element2">
                            <p>Elemento 2</p>
                            <span>ver más</span>
                        </div>
                        
                        <div class="card-category category-element3">
                            <p>Elemento 3</p>
                            <span>ver más</span>
                        </div>
                    </div>
                </section>

                <!--Apartado  para los productos-->
                <section class="container top-products">
                    <!--Producto 1-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                    <h1 class="heading-1">Mejores productos</h1>

                    <div class="container-options">
                        <span class="active">Destacados</span>
                        <span>Más recientes</span>
                        <span>Mejores vendidos</span>
                    </div>
        <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                    
                        <div class="container-products">

        <!-- Producto # ----------------------------------------------------------------------------------------------------------------------------------------------------->
        <div class="card-product">
            <div class="container-img">
                <a href="./Productos/individuales/vistaProducto.php"><img src="imagenes/audifonos.jpg" /></a> 
                <span class="discount">-13%</span>
        <!--iconos en productos------------------------------------------------------------------------------------------------------------------------------->
                <div class="button-group">
                
                    <span><i class="fa-regular fa-eye"></i></span>
                    <span><i class="fa-regular fa-heart"></i></span>
                    <span><i class="fa-solid fa-code-compare"></i></span>
                
                </div>
        <!--Iconos inferiores en los prodcutos---------------------------------------------------------------------------------------------------------------->
            </div>
            <div class="content-card-product">
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h3>Elemento #</h3>
                <span class="add-cart">
                    <i class="fa-solid fa-basket-shopping"></i>
                </span>
                <p class="price">$4.60 <span>$5.30</span></p>
            </div>
        </div>
        <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->

        <!-- Producto # ----------------------------------------------------------------------------------------------------------------------------------------------------->
        <div class="card-product">
            <div class="container-img">
                <img src="imagenes/audifonos.jpg" />
                <span class="discount">-13%</span>
        <!--iconos en productos------------------------------------------------------------------------------------------------------------------------------->
                <div class="button-group">
                
                    <span><i class="fa-regular fa-eye"></i></span>
                    <span><i class="fa-regular fa-heart"></i></span>
                    <span><i class="fa-solid fa-code-compare"></i></span>
                
                </div>
        <!--Iconos inferiores en los prodcutos---------------------------------------------------------------------------------------------------------------->
            </div>
            <div class="content-card-product">
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h3>Elemento #</h3>
                <span class="add-cart">
                    <i class="fa-solid fa-basket-shopping"></i>
                </span>
                <p class="price">$4.60 <span>$5.30</span></p>
            </div>
        </div>
        <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->
        <!-- Producto # ----------------------------------------------------------------------------------------------------------------------------------------------------->
        <div class="card-product">
            <div class="container-img">
                <img src="imagenes/audifonos.jpg" />
                <span class="discount">-13%</span>
        <!--iconos en productos------------------------------------------------------------------------------------------------------------------------------->
                <div class="button-group">
                
                    <span><i class="fa-regular fa-eye"></i></span>
                    <span><i class="fa-regular fa-heart"></i></span>
                    <span><i class="fa-solid fa-code-compare"></i></span>
                
                </div>
        <!--Iconos inferiores en los prodcutos---------------------------------------------------------------------------------------------------------------->
            </div>
            <div class="content-card-product">
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h3>Elemento #</h3>
                <span class="add-cart">
                    <i class="fa-solid fa-basket-shopping"></i>
                </span>
                <p class="price">$4.60 <span>$5.30</span></p>
            </div>
        </div>
        <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->
        <!-- Producto # ----------------------------------------------------------------------------------------------------------------------------------------------------->
        <div class="card-product">
            <div class="container-img">
                <img src="imagenes/audifonos.jpg" />
                <span class="discount">-13%</span>
        <!--iconos en productos------------------------------------------------------------------------------------------------------------------------------->
                <div class="button-group">
                
                    <span><i class="fa-regular fa-eye"></i></span>
                    <span><i class="fa-regular fa-heart"></i></span>
                    <span><i class="fa-solid fa-code-compare"></i></span>
                
                </div>
        <!--Iconos inferiores en los prodcutos---------------------------------------------------------------------------------------------------------------->
            </div>
            <div class="content-card-product">
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h3>Elemento #</h3>
                <span class="add-cart">
                    <i class="fa-solid fa-basket-shopping"></i>
                </span>
                <p class="price">$4.60 <span>$5.30</span></p>
            </div>
        </div>
        </div>
        <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->
        <!--Galeria ---------------------------------------------------------------------------------------------------------------------------------------------------------->
        <section class="gallery">
            <img src="imagenes/ales-nesetril-Im7lZjxeLhg-unsplash.jpg" alt="Gallery Img1"class="gallery-img-1"/>
            <img src="imagenes/anas-alshanti-feXpdV001o4-unsplash.jpg"alt="Gallery Img2"class="gallery-img-2"/>
            <img src="imagenes/daniel-josef-AMssSjUaTY4-unsplash.jpg"alt="Gallery Img3"class="gallery-img-3"/>
            <img src="imagenes/domenico-loia-EhTcC9sYXsw-unsplash.jpg"alt="Gallery Img4"class="gallery-img-4"/>
            <img src="imagenes/martin-shreder-5Xwaj9gaR0g-unsplash.jpg"alt="Gallery Img5"class="gallery-img-5"/>
        </section>
        <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------->
        <!--Apartado de los producptos--------------------------------------------------------------------------------------------------------------------------------------->
        <div class="container-products">

            <!-- Producto # ----------------------------------------------------------------------------------------------------------------------------------------------------->
            <div class="card-product">
                <div class="container-img">
                    <img src="imagenes/audifonos.jpg" />
                    <span class="discount">-13%</span>
            <!--iconos en productos------------------------------------------------------------------------------------------------------------------------------->
                    <div class="button-group">
                    
                        <span><i class="fa-regular fa-eye"></i></span>
                        <span><i class="fa-regular fa-heart"></i></span>
                        <span><i class="fa-solid fa-code-compare"></i></span>
                    
                    </div>
            <!--Iconos inferiores en los prodcutos---------------------------------------------------------------------------------------------------------------->
                </div>
                <div class="content-card-product">
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <h3>Elemento #</h3>
                    <span class="add-cart">
                        <i class="fa-solid fa-basket-shopping"></i>
                    </span>
                    <p class="price">$4.60 <span>$5.30</span></p>
                </div>
            </div>
            <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->
            <!-- Producto # ----------------------------------------------------------------------------------------------------------------------------------------------------->
            <div class="card-product">
                <div class="container-img">
                    <img src="imagenes/audifonos.jpg" />
                    <span class="discount">-13%</span>
            <!--iconos en productos------------------------------------------------------------------------------------------------------------------------------->
                    <div class="button-group">
                    
                        <span><i class="fa-regular fa-eye"></i></span>
                        <span><i class="fa-regular fa-heart"></i></span>
                        <span><i class="fa-solid fa-code-compare"></i></span>
                    
                    </div>
            <!--Iconos inferiores en los prodcutos---------------------------------------------------------------------------------------------------------------->
                </div>
                <div class="content-card-product">
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <h3>Elemento #</h3>
                    <span class="add-cart">
                        <i class="fa-solid fa-basket-shopping"></i>
                    </span>
                    <p class="price">$4.60 <span>$5.30</span></p>
                </div>
            </div>
            <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->
            <!-- Producto # ----------------------------------------------------------------------------------------------------------------------------------------------------->
            <div class="card-product">
                <div class="container-img">
                    <img src="imagenes/audifonos.jpg" />
                    <span class="discount">-13%</span>
            <!--iconos en productos------------------------------------------------------------------------------------------------------------------------------->
                    <div class="button-group">
                    
                        <span><i class="fa-regular fa-eye"></i></span>
                        <span><i class="fa-regular fa-heart"></i></span>
                        <span><i class="fa-solid fa-code-compare"></i></span>
                    
                    </div>
            <!--Iconos inferiores en los prodcutos---------------------------------------------------------------------------------------------------------------->
                </div>
                <div class="content-card-product">
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <h3>Elemento #</h3>
                    <span class="add-cart">
                        <i class="fa-solid fa-basket-shopping"></i>
                    </span>
                    <p class="price">$4.60 <span>$5.30</span></p>
                </div>
            </div>
            <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->
            <!-- Producto # ----------------------------------------------------------------------------------------------------------------------------------------------------->
            <div class="card-product">
                <div class="container-img">
                    <img src="imagenes/audifonos.jpg" />
                    <span class="discount">-13%</span>
            <!--iconos en productos------------------------------------------------------------------------------------------------------------------------------->
                    <div class="button-group">
                    
                        <span><i class="fa-regular fa-eye"></i></span>
                        <span><i class="fa-regular fa-heart"></i></span>
                        <span><i class="fa-solid fa-code-compare"></i></span>
                    
                    </div>
            <!--Iconos inferiores en los prodcutos---------------------------------------------------------------------------------------------------------------->
                </div>
                <div class="content-card-product">
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <h3>Elemento #</h3>
                    <span class="add-cart">
                        <i class="fa-solid fa-basket-shopping"></i>
                    </span>
                    <p class="price">$4.60 <span>$5.30</span></p>
                </div>
            </div>
            </div>
        <!-----------pruebas de desarrollo-------------------------------------------------------------------------------------------------------------------------------------------------------->
        </section>
        </main>

        <!--Inicio del footer------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
        <footer class="footer">
            <div class="container container-footer">
                <div class="menu-footer">
                    <div class="contact-info">
                        <p class="title-footer">Información de Contacto</p>
                        <ul>
                            <li>
                                Dirección: 71 Pennington Lane Vernon Rockville, CT
                                06066
                            </li>
                            <li>Teléfono: 123-456-7890</li>
                            <li>Fax: 55555300</li>
                            <li>EmaiL: baristas@support.com</li>
                        </ul>
                        <div class="social-icons">
                            <span class="facebook">
                                <i class="fa-brands fa-facebook-f"></i>
                            </span>
                            <span class="twitter">
                                <i class="fa-brands fa-twitter"></i>
                            </span>
                            <span class="youtube">
                                <i class="fa-brands fa-youtube"></i>
                            </span>
                            <span class="pinterest">
                                <i class="fa-brands fa-pinterest-p"></i>
                            </span>
                            <span class="instagram">
                                <i class="fa-brands fa-instagram"></i>
                            </span>
                        </div>
                    </div>

                    <div class="information">
                        <p class="title-footer">Información</p>
                        <ul>
                            <li><a href="#">Acerca de Nosotros</a></li>
                            <li><a href="#">Información Delivery</a></li>
                            <li><a href="#">Politicas de Privacidad</a></li>
                            <li><a href="#">Términos y condiciones</a></li>
                            <li><a href="#">Contactános</a></li>
                        </ul>
                    </div>

                    <div class="my-account">
                        <p class="title-footer">Mi cuenta</p>

                        <ul>
                            <li><a href="#">Mi cuenta</a></li>
                            <li><a href="#">Historial de ordenes</a></li>
                            <li><a href="#">Lista de deseos</a></li>
                            <li><a href="#">Boletín</a></li>
                            <li><a href="#">Reembolsos</a></li>
                        </ul>
                    </div>

                    <div class="newsletter">
                        <p class="title-footer">Boletín informativo</p>

                        <div class="content">
                            <p>
                                Suscríbete a nuestros boletines ahora y mantente al
                                día con nuevas colecciones y ofertas exclusivas.
                            </p>
                            <input type="email" placeholder="Ingresa el correo aquí..." style="color:white">
                            <button>Suscríbete</button>
                        </div>
                    </div>
                </div>

                <div class="copyright">
                    <p>
                        Desarrollado por Programación para el mundo &copy; 2022
                    </p>

                </div>
            </div>
        </footer>
        <!--Linkiamos hojas de js------------------------------------------------------------------------------------------------------------------------------------------>
        <script src="js/slider.js"></script>
        <script src="js/cabecera.js"></script>
        <script src="https://kit.fontawesome.com/b217920474.js" crossorigin="anonymous"></script>
        <script src="slider.js"></script>

        </body>
        </html>';

    }
}

$final = new usuario();
$final->productos();

?>

