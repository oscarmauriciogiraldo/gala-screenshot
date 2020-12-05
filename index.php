<?php

    @session_start();
    include "./encodeBase64.php";
    //convertirImgBase64();
    convertirImgBase64();

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Screenshot</title>
        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
<body>

    
    <!--contenedor pricipal-->
    <!--<div id="contenedor" class="contenido-header first">-->
    <div id="contenedor">

        
        <!--************************************-->
        <!--*******div contenedor fondo*********-->
        <div class="contFondo" id="contFondo"></div>
        <!--************************************-->

        <!--
        <img src="./fondoScreenshot.png" id="img" style="display: none;">-->

        <div class="contenido-cam-vanv1">

           <div class="cont-cam">
                <!--camara-->
                
                <video autoplay id="video" class="camara"></video>
                <!--
                <canvas id="canvas" class="canvas" width="598" height="298"></canvas>-->
                        
            </div>

        </div>
        <div class="contenido-cam-vanv2">
            <!---->
            <div class="cont-canvas">
                <canvas id="canvas" class="canvas" ></canvas>
            </div>
            
        </div>
        
        

        <button type="button" id="boton" class="btn-none"></button>

        <!--********* Boton Tomar Foto *********-->
        <div class="button-tomar-foto">
            
            <button id="btnTomarFoto" class="btnTomarFoto">
                <img src="img/boton2.png" alt="">
                tome aquí su foto
            </button>
            
        </div>

        

    </div>


  
    
    <input type="hidden" id="imgFondoBase64" value="<?php echo $_SESSION["FONDO"]; ?>">
   

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/canvas2image@1.0.5/canvas2image.min.js"></script>

    <script src="js/main.js"></script>

</body>
</html>
