<!DOCTYPE html>
<html>
  <head>
    <title>Instascan</title>
    <script type="text/javascript" src="<?php echo base_url()?>assets/qrcode/instascan/instascan.min.js" ></script>
  </head>
  <body>
    <h1 align="center">Silahkan Scan QR Code KTM Anda</h1>
    <hr>
    <div style="text-align:center"> 
    <video id="preview"></video>
    </div>
    <script>
        let scanner = new Instascan.Scanner(
            {
                video: document.getElementById('preview'),
                mirror : true,
                captureImage : true
            }
        );

        //data berupa link
        scanner.addListener('scan', function(content) {
            // alert('Do you want to open this page?: ' + content);
            var a = content;
            window.open(a, "_blank");
        });

        // scanner.addListener('scan', function(image) {
        //     vardump(image);
        // });

        Instascan.Camera.getCameras().then(cameras => 
        {
            if(cameras.length > 0){
                scanner.start(cameras[0]);
            } else {
                console.error("Please enable Camera!");
            }
        });
    </script>
 </body>
</html>
</html>