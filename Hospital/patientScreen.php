<?php include 'server/server.php'?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Screen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="patient-screen">
        <div class="video-cont">
            <video controls width="100%" loop>
                <source src="assets/video.mp4" type="video/mp4">  
            </video>
        </div>
        <div class="screen-cont">
            <p class="serving">NOW SERVING</p>    
                <p class="serving-ip">IP000</p>
                <p class="window-ip">WINDOW 1</p>

                <p class="serving-oe">PROE000</p>
                <p class="window-oe">WINDOW 2</p>
        </div>
    </div>
   
    <footer>
        <div class="scroll-left">
            <p>msws@lpghstc.doh.gov.ph | 02 8873 0557 local 123</p>
        </div>
    </footer>
        
   
</body>
</html>



