<?php include 'libs/load.php'; ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mini_project </title>
  <link rel='stylesheet' href='//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css'>
  <link rel="stylesheet" href="css/style1.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="main-box">
  <div class="slider-cont">
    <div class="signup-slider">
      <div class="img-txt">
        <div class="img-layer"></div>
        <h1>The hardest part of starting up is starting out for you.</h1>
        <img src="assets/pexels1.jpg"/>
      </div>
      <div class="img-txt">
        <div class="img-layer"></div>
        <h1>We understand you and your business, We have the right solutions for you.</h1>
        <img src="assets/pexels2.jpeg"/>
      </div>
      <div class="img-txt">
        <div class="img-layer"></div>
        <h1>Join US Now!</h1>
        <img src="assets/pexels3.jpeg"/>
      </div>
    </div>
  </div>
  
  
  <div class="form-cont">

    <div class="top-buttons">
      <button class="to-signup top-active-button">
        Sign Up
      </button>
      <button class="to-signin">
        Sign In
      </button>
    </div>
    
    <?php load('signup'); ?>

    <?php load('signin'); ?>
  </div>
  <div class="clear-fix"></div>
</div>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js'>
</script><script  src="js/script.js"></script>

</body>
</html>
