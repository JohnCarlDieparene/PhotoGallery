<!DOCTYPE html>
<html>
<head>
  <title>Photo Gallery</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/lightbox.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/lightbox.js"></script>

  <style>
    /* CSS file (style.css) */

body {
  background-color: #eaf7fb; /* Soft Summer Rain */
  color: #3a5a7e; /* Cobalite */
}

.navbar-default {
  background-color: #6ca0dc; /* Little Boy Blue */
  border-color: #5a9ad4;
}

.navbar-default .navbar-brand,
.navbar-default .navbar-nav > li > a {
  color: #ffffff; /* Light text on navbar */
}

.navbar-default .navbar-nav > li > a:hover {
  color: #cdeefb; /* Light Turquoise for hover effect */
}

.page-header h3 {
  color: #3a5a7e; /* Cobalite */
  text-align: center;
}

.thumbnail {
  border: 2px solid #6ca0dc; /* Little Boy Blue */
  border-radius: 8px;
}

.thumbnail img {
  border-radius: 5px;
}

a[data-lightbox="gallery"] .thumbnail:hover {
  border-color: #5b9dd7; /* Island Oasis */
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.15);
}

footer.navbar-default {
  background-color: #6ca0dc; /* Little Boy Blue */
  color: #ffffff;
}

footer p {
  margin: 0;
  color: #ffffff;
}

  </style>
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <div class="navbar-brand">Newjeans Photo Gallery</div>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
        <li><a href="newjeans.php">Newjeans Gallery</a></li>
        <li><a href="members.php">Members Gallery</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="page-header text-center">
      <h3>How Sweet Gallery</h3>
    </div>

    <div class="row">
      <div class="col-md-4">
        <a href="pic/pix1.jpg" data-lightbox="gallery" class="thumbnail">
          <img src="pic/pix1.jpg">
        </a>
      </div>
      <div class="col-md-4">
        <a href="pic/pix2.jpg" data-lightbox="gallery" data-title="newjeans" class="thumbnail">
          <img src="pic/pix2.jpg">
        </a>
      </div>
      <div class="col-md-4">
        <a href="pic/pix3.jpg" data-lightbox="gallery" class="thumbnail">
          <img src="pic/pix3.jpg">
        </a>
      </div>
      <div class="col-md-4">
        <a href="pic/pix4.jpg" data-lightbox="gallery" class="thumbnail">
          <img src="pic/pix4.jpg">
        </a>
      </div>
      <div class="col-md-4">
        <a href="pic/pix5.jpg" data-lightbox="gallery" class="thumbnail">
          <img src="pic/pix5.jpg">
        </a>
      </div>
      <div class="col-md-4">
        <a href="pic/pix6.jpg" data-lightbox="gallery" class="thumbnail">
          <img src="pic/pix6.jpg">
        </a>
      </div>
    </div>

    <div class="page-header text-center">
      <h3>Supernatural Gallery</h3>
    </div>

    <div class="row">
      <div class="col-md-4">
        <a href="pic/pix7.jpg" data-lightbox="gallery" class="thumbnail">
          <img src="pic/pix7.jpg">
        </a>
      </div>
      <div class="col-md-4">
        <a href="pic/pix8.jpg" data-lightbox="gallery" data-title="newjeans" class="thumbnail">
          <img src="pic/pix8.jpg">
        </a>
      </div>
      <div class="col-md-4">
        <a href="pic/pix9.jpg" data-lightbox="gallery" class="thumbnail">
          <img src="pic/pix9.jpg">
        </a>
      </div>
      <div class="col-md-4">
        <a href="pic/pix10.jpg" data-lightbox="gallery" class="thumbnail">
          <img src="pic/pix10.jpg">
        </a>
      </div>
      <div class="col-md-4">
        <a href="pic/pix11.jpg" data-lightbox="gallery" class="thumbnail">
          <img src="pic/pix11.jpg">
        </a>
      </div>
      <div class="col-md-4">
        <a href="pic/pix12.jpg" data-lightbox="gallery" class="thumbnail">
          <img src="pic/pix12.jpg">
        </a>
      </div>
    </div>

    <div class="page-header text-center">
      <h3>Bubble Gum Gallery</h3>
    </div>

    <div class="row">
      <div class="col-md-4">
        <a href="pic/pix13.jpg" data-lightbox="gallery" class="thumbnail">
          <img src="pic/pix13.jpg">
        </a>
      </div>
      <div class="col-md-4">
        <a href="pic/pix14.jpg" data-lightbox="gallery" data-title="newjeans" class="thumbnail">
          <img src="pic/pix14.jpg">
        </a>
      </div>
      <div class="col-md-4">
        <a href="pic/pix15.jpg" data-lightbox="gallery" class="thumbnail">
          <img src="pic/pix15.jpg">
        </a>
      </div>
      <div class="col-md-4">
        <a href="pic/pix16.jpg" data-lightbox="gallery" class="thumbnail">
          <img src="pic/pix16.jpg">
        </a>
      </div>
      <div class="col-md-4">
        <a href="pic/pix17.jpg" data-lightbox="gallery" class="thumbnail">
          <img src="pic/pix17.jpg">
        </a>
      </div>
      <div class="col-md-4">
        <a href="pic/pix18.jpg" data-lightbox="gallery" class="thumbnail">
          <img src="pic/pix18.jpg">
        </a>
      </div>
    </div>
  </div>

  <br/>
  <br/>

  <footer class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
      <p class="text-center" style="padding: 10px;">Created by John Carl Dieparene</p>
    </div>
  </footer>

</body>
</html>
