 
 navigator.mediaDevices.getUserMedia ({audio: false, video: true}).then((stream)=>{
     console.log(stream)

     let video = document.getElementById('video')
     video.srcObject = stream
 }).catch((err)=> console.log(err))


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

            let video = document.querySelector("#video");
            document.querySelector("#boton").addEventListener("click", function(ev){
                navigator.mediaDevices.getUserMedia({audio: false, video: true})
                .then(record)
                .catch(err => console.log(err));

            })
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

            

        