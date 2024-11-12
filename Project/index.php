<!DOCTYPE html>
<html>
<head>
  <title>Photo Gallery</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

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

.carousel-indicators li {
  background-color: #5b9dd7; /* Island Oasis */
}

.carousel-indicators .active {
  background-color: #3a5a7e; /* Cobalite */
}

.carousel-control.left,
.carousel-control.right {
  background-image: none;
  color: #5b9dd7; /* Island Oasis */
}

.page-header h3 {
  color: #3a5a7e; /* Cobalite */
  text-align: center;
}

.thumbnail {
  border: 2px solid #6ca0dc; /* Little Boy Blue */
}

.thumbnail img {
  border-radius: 5px;
}

.modal-content {
  background-color: #f2fbfe; /* Light Turquoise for modal background */
}

.modal-header,
.modal-footer {
  background-color: #6ca0dc; /* Little Boy Blue */
  color: #ffffff;
}

.modal-body img {
  border: 3px solid #3a5a7e; /* Cobalite */
}

.footer {
  background-color: #6ca0dc; /* Little Boy Blue */
  color: #ffffff;
}

/* Center-align footer text */
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
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="carousel slide" data-ride="carousel" id="slider">
          <ol class="carousel-indicators">
            <li data-target="#slider" data-slide-to="0" class="active"></li>
            <li data-target="#slider" data-slide-to="1"></li>
            <li data-target="#slider" data-slide-to="2"></li>
            <li data-target="#slider" data-slide-to="3"></li>
          </ol>

          <div class="carousel-inner">
            <div class="item active">
              <img src="pic/pix1.jpg" />
            </div>
            <div class="item">
              <img src="pic/pix2.jpg" />
            </div>
            <div class="item">
              <img src="pic/pix7.jpg" />
            </div>
            <div class="item">
              <img src="pic/pix8.jpg" />
            </div>
          </div>

          <a href="#slider" data-slide="prev" class="left carousel-control">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a href="#slider" data-slide="next" class="right carousel-control">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div> 
      </div> 
    </div>

    <div class="page-header">
      <h3>Photo Gallery</h3>
    </div>

    <div class="row">
      <div class="col-md-4">
        <a href="#m1" data-toggle="modal" class="thumbnail">
          <img src="pic/pix1.jpg">
        </a>

        <div class="modal fade" id="m1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">Newjeans 1</div>
              <div class="body">
                <img src="pic/pix1.jpg" class="img-thumbnail">
              </div>
              <div class="modal-footer">Newjeans 1</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <a href="#m2" data-toggle="modal" class="thumbnail">
          <img src="pic/pix2.jpg">
        </a>

        <div class="modal fade" id="m2">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">Newjeans 1</div>
              <div class="body">
                <img src="pic/pix2.jpg" class="img-thumbnail">
              </div>
              <div class="modal-footer">Newjeans 1</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <a href="#m3" data-toggle="modal" class="thumbnail">
          <img src="pic/pix7.jpg">
        </a>

        <div class="modal fade" id="m3">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">Newjeans 1</div>
              <div class="body">
                <img src="pic/pix7.jpg" class="img-thumbnail">
              </div>
              <div class="modal-footer">Newjeans 1</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <a href="#m4" data-toggle="modal" class="thumbnail">
          <img src="pic/pix8.jpg">
        </a>

        <div class="modal fade" id="m4">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">Newjeans 1</div>
              <div class="body">
                <img src="pic/pix8.jpg" class="img-thumbnail">
              </div>
              <div class="modal-footer">Newjeans 1</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <a href="#m5" data-toggle="modal" class="thumbnail">
          <img src="pic/pix13.jpg">
        </a>

        <div class="modal fade" id="m5">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">Newjeans 1</div>
              <div class="body">
                <img src="pic/pix13.jpg" class="img-thumbnail">
              </div>
              <div class="modal-footer">Newjeans 1</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <a href="#m6" data-toggle="modal" class="thumbnail">
          <img src="pic/pix14.jpg">
        </a>

        <div class="modal fade" id="m6">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">Newjeans 1</div>
              <div class="body">
                <img src="pic/pix14.jpg" class="img-thumbnail">
              </div>
              <div class="modal-footer">Newjeans 1</div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- Closing div for the row containing thumbnails -->

  </div> <!-- Closing div for the main container -->

  <br/>
  <br/>
  <footer class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
      <p class="text-center" style="padding: 10px;">Created by John Carl Dieparene</p>
    </div>
  </footer>

</body>
</html>
