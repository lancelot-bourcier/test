<html>

    <head>

    

    </head>
    
    <body>
        
        
        
        <?php
            include 'inc/base.php'; //La barre de navigation, en include
        ?>
        
        
        <?php
            include 'inc/sidebar.php'; //La barre de navigation, en include
        ?>
        
        
        
        <link rel="stylesheet" href="css/gallery1.css">
        
        
        
        
        <div class=mosaique>
            <!--<div class="imagegallery1"> <img class="imagegalleryalt" src="img/gallery1/img1.jpg"> </div>
            <div class="imagegallery1"> <img class="imagegalleryalt" src="img/gallery1/img2.jpg"> </div>
            <div class="imagegallery1"> <img class="imagegalleryalt" src="img/gallery1/img3.jpg"> </div>-->
            <div class="imagegallery1"> <img id='gal1-1' class="imagegalleryalt" src='img/gallery1/lowres/img1.jpg' alt='image1'> </div>
            <div class="imagegallery1"> <img id='gal1-2' class="imagegalleryalt" src='img/gallery1/lowres/img2.jpg' alt='image2'> </div>
            <div class="imagegallery1"> <img id='gal1-3' class="imagegalleryalt" src='img/gallery1/lowres/img3.jpg' alt='image3'> </div>
            <div class="imagegallery1"> <img id='gal1-4' class="imagegalleryalt" src='img/gallery1/lowres/img4.jpg' alt='image4'> </div>
            <div class="imagegallery1"> <img id='gal1-5' class="imagegalleryalt" src='img/gallery1/lowres/img5.jpg' alt='image5'> </div>
            <div class="imagegallery1"> <img id='gal1-6' class="imagegalleryalt" src='img/gallery1/lowres/img6.jpg' alt='image6'> </div>
            <div class="imagegallery1"> <img id='gal1-7' class="imagegalleryalt" src='img/gallery1/lowres/img7.jpg' alt='image7'> </div>
            <div class="imagegallery1"> <img id='gal1-8' class="imagegalleryalt" src='img/gallery1/lowres/img8.jpg' alt='image8'> </div>
            <div class="imagegallery1"> <img id='gal1-9' class="imagegalleryalt" src='img/gallery1/lowres/img9.jpg' alt='image9'> </div>
            <div class="imagegallery1"> <img id='gal1-10' class="imagegalleryalt" src='img/gallery1/lowres/img10.jpg' alt='image10'> </div>

        </div>

        
        
        <script>
        
            loadHighResImage(document.getElementById('gal1-1'), 'img/gallery1/img1.jpg')
            loadHighResImage(document.getElementById('gal1-2'), 'img/gallery1/img2.jpg')
            loadHighResImage(document.getElementById('gal1-3'), 'img/gallery1/img3.jpg')
            loadHighResImage(document.getElementById('gal1-4'), 'img/gallery1/img4.jpg')
            loadHighResImage(document.getElementById('gal1-5'), 'img/gallery1/img5.jpg')
            loadHighResImage(document.getElementById('gal1-6'), 'img/gallery1/img6.jpg')
            loadHighResImage(document.getElementById('gal1-7'), 'img/gallery1/img7.jpg')
            loadHighResImage(document.getElementById('gal1-8'), 'img/gallery1/img8.jpg')
            loadHighResImage(document.getElementById('gal1-9'), 'img/gallery1/img9.jpg')
            loadHighResImage(document.getElementById('gal1-10'), 'img/gallery1/img10.jpg')


            function loadHighResImage(elem, highResUrl) {
                let image = new Image()
                image.addEventListener('load', () => elem.src = highResUrl)
                image.src = highResUrl
            }
        
        </script>
        
        
        
        
    </body>
    

    
</html>