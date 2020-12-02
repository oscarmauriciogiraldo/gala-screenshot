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
        <style>
            * {
                margin: 0px;
            }
            .contFondo {
                position: absolute;
                width: 100vw;
                height: 100vh;
                z-index: 1;
                background-size: 100% 100%;
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
            }
            .continfo {
                position: absolute;
                font-size: 20px;
                z-index: 2;
            }
            .camara {
                position: absolute;
                margin-left: 54vw;
                margin-top: 30vh;
                z-index: 999;
                width: 180px;
                height: 200px;
                display: flex;
            }
            .foto {
                position: absolute;
                width: 300px;
                height: 250px;
                margin-left: 500px;
                background-size: 100% 100%;
                z-index: 10;
            }
            .canvas {
                position: absolute;
                margin-left: 46vw;
                margin-top: 35vh;
            }
            .hidden {
                opacity: 0;
            }
        </style>
    </head>
    <body>

        <div id="contenedor">
        <div class="row"> 
        <div class="contFondo" id="contFondo"></div>
            <div class="continfo">

                <button type="button" id="boton" class="btn btn-light">activar camara</button>
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
<<<<<<< HEAD
        <script>

            // =============================================================
            // =============== Tomar foto y hacer Screenchot ===============
            // =============================================================

            const btnTomar = document.getElementById("btnTomarFoto");
            btnTomar.addEventListener("click", () => {
                const video = document.getElementById("video");
                video.classList.add("hidden");
                video.pause();

                const canvas = document.getElementById('canvas');
                const context = canvas.getContext('2d');
                context.drawImage(video, 0, 0, 200, 150);
                canvas.toDataURL('image/png');

                html2canvas(document.body, {
                    onrendered (canvas) {
                        var link = document.createElement("a");
                        var image = canvas.toDataURL();
                        link.href = image;
                        link.download = 'screenshot.png';
                        document.body.appendChild(link);
                        link.click();
                        document.body.removeChild(link);
                    }
                });
            });

            // ==============================================
            // =============== Activar camara ===============
            // ==============================================


            
            
            function record(stream){
                video.srcObject = stream;
            }

            // =======================================================
            // =============== Convertir fondo a bas64 ===============
            // =======================================================

            window.addEventListener("load", () => {
                var base64 = document.getElementById("imgFondoBase64").value;
                document.getElementById("contFondo").style.backgroundImage = `url(data:image/png;base64,${base64})`;
            });

        </script>
=======
        
        <script src="js/main.js"></script>
>>>>>>> f566735eb8899e5c90913b291a9043fffd724d43

    </body>
</html>
