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
    /* CSS for NewJeans Color Theme */
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
  font-size: 1.8em;
  padding: 20px 0;
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

h3 {
  font-weight: bold;
}

h3 + .row {
  margin-top: 20px;
}

@media (max-width: 767px) {
  .container {
    padding-left: 15px;
    padding-right: 15px;
  }
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
      <h3>Minji</h3>
    </div>

    <div class="row">
      <div class="col-md-4">
        <a href="pic/pix19.jpg" data-lightbox="gallery" data-title="Minji" class="thumbnail">
          <img src="pic/pix19.jpg">
        </a>
      </div>
      <div class="col-md-4">
        <a href="pic/pix20.jpg" data-lightbox="gallery" data-title="Minji" class="thumbnail">
          <img src="pic/pix20.jpg">
        </a>
      </div>
      <div class="col-md-4">
        <a href="pic/pix21.jpg" data-lightbox="gallery" data-title="Minji" class="thumbnail">
          <img src="pic/pix21.jpg">
        </a>
      </div>
    </div>

    <div class="page-header text-center">
      <h3>Hanni</h3>
    </div>

    <div class="row">
      <div class="col-md-4">
        <a href="pic/pix22.jpg" data-lightbox="gallery" data-title="Hanni" class="thumbnail">
          <img src="pic/pix22.jpg">
        </a>
      </div>
      <div class="col-md-4">
        <a href="pic/pix23.jpg" data-lightbox="gallery" data-title="Hanni"  class="thumbnail">
          <img src="pic/pix23.jpg">
        </a>
      </div>
      <div class="col-md-4">
        <a href="pic/pix24.jpg" data-lightbox="gallery" data-title="Hanni" class="thumbnail">
          <img src="pic/pix24.jpg">
        </a>
      </div>
    </div>

    <div class="page-header text-center">
      <h3>Danielle</h3>
    </div>

    <div class="row">
      <div class="col-md-4">
        <a href="pic/pix25.jpg" data-lightbox="gallery" data-title="Danielle" class="thumbnail">
          <img src="pic/pix25.jpg">
        </a>
      </div>
      <div class="col-md-4">
        <a href="pic/pix26.jpg" data-lightbox="gallery" data-title="Danielle" class="thumbnail">
          <img src="pic/pix26.jpg">
        </a>
      </div>
      <div class="col-md-4">
        <a href="pic/pix27.jpg" data-lightbox="gallery" data-title="Danielle" class="thumbnail">
          <img src="pic/pix27.jpg">
        </a>
      </div>
    </div>

    <div class="page-header text-center">
      <h3>Haerin</h3>
    </div>

    <div class="row">
      <div class="col-md-4">
        <a href="pic/pix28.jpg" data-lightbox="gallery" data-title="Haerin" class="thumbnail">
          <img src="pic/pix28.jpg">
        </a>
      </div>
      <div class="col-md-4">
        <a href="pic/pix29.jpg" data-lightbox="gallery" data-title="Haerin" class="thumbnail">
          <img src="pic/pix29.jpg">
        </a>
      </div>
      <div class="col-md-4">
        <a href="pic/pix30.jpg" data-lightbox="gallery" data-title="Haerin"  class="thumbnail">
          <img src="pic/pix30.jpg">
        </a>
      </div>
    </div>

    <div class="page-header text-center">
      <h3>Hyein</h3>
    </div>

    <div class="row">
      <div class="col-md-4">
        <a href="pic/pix31.jpg" data-lightbox="gallery" data-title="Hyein" class="thumbnail">
          <img src="pic/pix31.jpg">
        </a>
      </div>
      <div class="col-md-4">
        <a href="pic/pix32.jpg" data-lightbox="gallery" data-title="Hyein" class="thumbnail">
          <img src="pic/pix32.jpg">
        </a>
      </div>
      <div class="col-md-4">
        <a href="pic/pix33.jpg" data-lightbox="gallery" data-title="Hyein" class="thumbnail">
          <img src="pic/pix33.jpg">
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
