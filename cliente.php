        <!--linkiamos metadatos-->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!--linkiamos las hojas de estilo y demas documentos-->
            <link rel="stylesheet" href="CSS/servicioCliente.css"><!--hoja deestilos de css-->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php

class usuario
{
    public function cliente()
    {

        echo '
        <!DOCTYPE html>
        <html lang="es">

        <head>
                    <!--titulo que se vera en la pestaña del aplicativo web-->
                    <title>servicio al cliente</title>
        </head>

        <body>
            <header>
                <div class="container-hero">
                    <div class="container hero">
                        <div class="customer-support">
                            <a href="cliente.php"><i class="fa-solid fa-headset"></i></a>
                            <div class="content-customer-support">
                                <span class="text">Soporte al cliente</span>
                                <span class="number">123-456-7890</span>
                            </div>
                        </div>

                        <div class="container-logo">
                            <i class="fa-solid fa-tag"></i>
                            <h1 class="logo"><a href="blackLabel.php">BLacklabel</a></h1>
                        </div>

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

            </header>

            <form class="form">
                <h2>Contactanos</h2>
                <p type="Name"><input placeholder="Escribe tu nombre completo aquí"></input></p>
                <p type="Email"><input placeholder="Escribe tu correo aquí"></input></p>
                <p type="Message"><input placeholder="Como podemos ayudarte"></input></p>
                <button>Enviar Mensaje</button>
                <div class="div-form">
                    <span class="fa fa-phone">123-456-7890</span>
                    <span class="fa fa-envelope-o">Email@compañia.com</span>
                </div>  
            </form>


        <!--Linkiamos hojas de js------------------------------------------------------------------------------------------------------------------------------------------>
        <script src="https://kit.fontawesome.com/b217920474.js" crossorigin="anonymous"></script>

        
            
        </body>
        </html>';

    }
}

$final = new usuario();
$final->cliente();

?>
