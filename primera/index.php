<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="imagen/icon3.png">
        <!--CDN CSS-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" 
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" 
        crossorigin="anonymous" />
        <!--CDN CSS-->
        <link rel="preload" href="css/normalize.css" as="style">
        <link rel="stylesheet" href="css/normalize.css">
        <!--fonts letras-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700&display=swap" rel="stylesheet">
        <!--fonts letras-->
        <link rel="preload" href="css/style.css" as="style">
        <link rel="stylesheet" href="css/style.css">

        
        <title>Control</title>
    </head>
    <body>
        <header>Login</header>
        
        <div class="formulario">
            <form class="login" method="post" action="<?=$_SERVER["PHP_SELF"]?>">
                <input class="icon_input" type="password"  name="actual" placeholder=" Contraseña Actual" required="">
                <input class="icon_input" type="password" name="nueva" placeholder=" Contraseña Nueva" required="">
                <input class="icon_input" type="password" name="confirmar" placeholder=" Confirmar Contraseña Nueva" required="">  

                <div class="boton">
                    <input type="submit" value="guardar">
                    <input type="submit" value="cancelar" disabled="">  
                </div>              
            </form>
        </div>
    </body>
</html>


<?php
    if(!empty($_POST)){
        $nueva = trim($_POST["nueva"]);
        $confirmar = trim($_POST["confirmar"]);
        $actual = trim($_POST["actual"]);
        $patron =  "/^[a-zA-Z]+[a-zA-Z0-9._]+$/";

        if($nueva == ""){
            echo "el campo contraseña nueva está vacio<br>";
        }else if(preg_match($patron, $nueva) == 0){
            echo "el campo contraseña nueva solo acepta caracteres alfanuericos<br>";
        }

        if($confirmar == ""){
            echo "el campo confirmar contraseña está vacio<br>";
        }else if(preg_match($patron, $confirmar) == 0){
            echo "el campo confirmar contraseña solo acepta caracteres alfanuericos<br>";
        }

        if($actual == ""){
            echo "el campo contraseña actual está vacio<br>";
        }else if(preg_match($patron, $actual) == 0){
            echo "el campo contraseña actual solo acepta caracteres alfanuericos<br>";
        }

        if($nueva != $confirmar){
            echo "los campos contraseña nueva y confirmar contraseña no coinciden<br>";
        }
    }
?>