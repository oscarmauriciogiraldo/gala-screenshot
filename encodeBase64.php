<?php

    @session_start();

    function convertirImgBase64() {
        $rutaImagen = __DIR__ . "./img/fondo.jpg";
        $contenidoBinario = file_get_contents($rutaImagen);
        $imagenComoBase64 = base64_encode($contenidoBinario);
        $_SESSION["FONDO"] = $imagenComoBase64;
    }

?>
