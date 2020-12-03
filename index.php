<?php

    @session_start();
    include "./encodeBase64.php";
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

<div id="contenedor">
<div class="row"> 
<div class="contFondo" id="contFondo"></div>
    <div class="continfo">
        <button type="button" id="boton" class="btn-none">activar camara</button>
        <video autoplay id="video" class="camara"></video>
        <canvas id="canvas" class="canvas" width="200" height="150"></canvas>
        <button id="btnTomarFoto" class="btnTomarFoto btn btn-light">Tomar screenshot y descargar</button>
    </div>
    <img src="./fondoScreenshot.png" id="img" style="display: none;">
</div>
<input type="hidden" id="imgFondoBase64" value="<?php echo $_SESSION["FONDO"]; ?>"></div>

   

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/canvas2image@1.0.5/canvas2image.min.js"></script>

<script src="js/main.js"></script>

</body>
</html>
