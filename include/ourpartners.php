<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Image Slider in HTML CSS and JavaScript | CodingNepal</title>
    <!-- Google Fonts Link For Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="css/ourpartners.css" />
    <!-- <link rel="stylesheet" href="css/ani.css" /> -->
    <!-- <link rel="stylesheet" href="css/style.css" /> -->
    <script src="js/ourpartners.js" defer></script>
  </head>
  <body>

  <!-- Head -->
 
  
  
    <div class="container sec-3">
    <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center mb-5">Our Partners</h2>
                        </div>
                </div>
                 
      <div class="slider-wrapper">
        <button id="prev-slide" class="slide-button material-symbols-rounded">
          chevron_left
        </button>
        <ul class="image-list aniG">
          <img class="image-item" src="images/partners/p1.jpg" alt="img-1" />
          <img class="image-item" src="images/partners/p2.jpg" alt="img-2" />
          <img class="image-item" src="images/partners/p3.jpg" alt="img-3" />
          <img class="image-item" src="images/partners/p4.jpg" alt="img-4" />
          <img class="image-item" src="images/partners/p5.jpg" alt="img-5" />
         
          <img class="image-item" src="images/partners/p7.jpg" alt="img-7" />
          <img class="image-item" src="images/partners/p8.jpg" alt="img-8" />
          <img class="image-item" src="images/partners/p9.jpg" alt="img-9" />
          <img class="image-item" src="images/partners/p10.jpg" alt="img-10" />
          <img class="image-item" src="images/partners/p11.jpg" alt="img-11" style="width:auto" />
          
        </ul>
        <button id="next-slide" class="slide-button material-symbols-rounded">
          chevron_right
        </button>
      </div>
      <div class="slider-scrollbar">
        <div class="scrollbar-track">
          <div class="scrollbar-thumb"></div>
        </div>
      </div>
    </div>
    <!-- <script src="js/animate.js"></script> -->
  </body>
</html>