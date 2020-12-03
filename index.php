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
    <div id="contenedor" class="contenido-header first">

        
        <!--************************************-->
        <!--*******div contenedor fondo*********-->
        <div class="contFondo" id="contFondo"></div>
        <!--************************************-->

        <!--
        <img src="./fondoScreenshot.png" id="img" style="display: none;">-->
        
        <!--contenedor-GRID-->
        <div class="container">

            <!--*******************grid 3X3******************-->
            <!--fila-1
            <div class="row ">
                <div class="col-4">col-vacia</div>
                <div class="col-4">col-vacia</div>
                <div class="col-4">col-vacia</div>
            </div>
            -->

            <!--fila-2-->
            <div class="row fila-row">
                <div class="col-4">col-vacia</div>
                <!--columna de la mitad-->
                <div class="col-4">
                    <div class="continfo">
                        <!--camara-->
                        <video autoplay id="video" class="camara"></video>
                        <!--<canvas id="canvas" class="canvas" width="200" height="150"></canvas>-->
                        <canvas id="canvas" class="canvas" ></canvas>
                    </div>
                    
                </div>
                
                <!--tercera columna-->
                <div class="col-4">col-vacia</div>
            </div>
            <!--fila-2-->

            <!--fila-3-->
            <div class="row fila-row">
                <div class="col-4">col-vacia</div>
                <div class="col-4">
                    <button id="btnTomarFoto" class="btnTomarFoto">
                        <img src="img/boton.png" alt="">
                    </button>
                </div>
                <div class="col-4">col-vacia</div>
            </div>

        </div>

        

    </div>


  
    
    <input type="hidden" id="imgFondoBase64" value="<?php echo $_SESSION["FONDO"]; ?>">
   

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/canvas2image@1.0.5/canvas2image.min.js"></script>

    <script src="js/main.js"></script>

</body>
</html>
