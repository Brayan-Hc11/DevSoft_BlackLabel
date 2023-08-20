<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
            <!--Linkiamos hojas de estilos-->        
            <link rel="stylesheet" href="CSS/Formulario.css" >
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<?php

class usuario

{ 
     public function registrar() 
    {

        echo '
        <!DOCTYPE html>
        <html lang="es">
            <head>
                
                    <!--titulo de la pagina-->
                    <title>Registrate o inicia sesión</title>

            </head>

            <body>
                <div class="container">
                    <div class="form-box">
                        <div class="button-box">
                            <!--botones de inicio de seción y registrar-->
                            <div>
                                <button type="button" class="toggle-btn" onclick="Login()"><a href="acceder.php">Inciar sesión</a></button>
                                <button type="button" class="toggle-btn1" onclick="Registrar()"><a href="registrar.php">Registrate</a></button>
                            </div>
                            <!--iconos de redes sociales-->
                            <div class="redes-sociales">
                                <a href="blackLabel.php"><i class="fa-solid fa-tag" style="color: black;"></i></a>
                                <a href="#"><i class="fa-brands fa-facebook" style="color: #0059ff;"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter" style="color: #00aeff;"></i></a>
                                <a href="#"><i class="fa-brands fa-google" style="color: #ff0000;"></i></a>
                            </div>
                            <!--declaramos un formulario de registro de datos-->
                            <form id="Registrar" class="input-group">
                                <input type="text" class="input-field" placeholder="Nombre de usuario">
                                <input type="number" class="input-field" placeholder="Documento">
                                <input type="email" class="input-field" placeholder="Correo electronico">
                                <input type="password" class="input-field" placeholder="Contraseña">
                                <input type="checkbox" class="check-box"><span>Acepta terminos  y condiciones.</span>
                                <button type="submit" class="submit-btn">Registrar</button>
                            </form>
                        </div>
                    </div>
                </div>

                <script src="https://kit.fontawesome.com/b217920474.js" crossorigin="anonymous"></script>
            </body>
        </html>';
    }
}

$final = new usuario();
$final->registrar();

?>


