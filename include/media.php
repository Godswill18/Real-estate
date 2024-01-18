<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Image Slider in HTML CSS and JavaScript | CodingNepal</title>
    <!-- Google Fonts Link For Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="css/media.css" />
    <!-- <link rel="stylesheet" href="css/style.css" /> -->
    <script src="js/media.js" defer></script>
  </head>
  <body>

  <!-- Head -->


  
  
    <div class="container">
    <div class="head">
        <h2 class="aniG">We measure our success by the results delivered to our clients.</h2>
    </div>

  <div class="paragraph">
    <p class="aniG">We are a result-driven real estate listing platform. We have a track record of offering excellent
        real estate services, which has earned us trust and recommendations over the years.</p>
  </div>
      <div class="slider-wrapper aniG">
        <button id="prev-slide" class="slide-button material-symbols-rounded">
          chevron_left
        </button>
        <ul class="image-list">
          <img class="image-item" src="images/media/newceo.jpg" alt="img" />
          <img class="image-item" src="images/media/im1.jpg" alt="img-1" />
          <img class="image-item" src="images/media/img-2.jpg" alt="img-2" />
          <img class="image-item" src="images/media/img-3.jpg" alt="img-3" />
     
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
  </body>
</html>