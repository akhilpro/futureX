<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Yogalax - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html"><span class="flaticon-lotus" ></span>FutureX</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span>Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="classes.html" class="nav-link">Career Report</a></li>
            <li class="nav-item"><a href="schedule.html" class="nav-link">About Us</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <br><br><br>
    <div class="container">
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header">Register 
        <?php if (isset($_GET['err'])) {
          ?>
          <center><p style="color: red;"><b><?php echo $_GET['err']; ?></b></p></center>
          <?php
        } ?>
        <?php if (isset($_GET['emailerr'])) {
          ?>
          <center><p style="color: red;"><b><?php echo $_GET['emailerr']; ?></b></p></center>
          <?php
        } ?>
        <?php if (isset($_GET['uerr'])) {
          ?>
          <center><p style="color: red;"><b><?php echo $_GET['uerr']; ?></b></p></center>
          <?php
        } ?>
      </div>
        <div class="card-body">
                  <form class="form-horizontal" method="post" action="assets/process.php">
                    <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label"><b>Your Name</b></label>
                      <div class="cols-sm-10">
                      <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Name Here" autocomplete="off" required />
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                <label for="email" class="cols-sm-2 control-label"><b>Your Email</b></label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter your Email" autocomplete="off" required/>
                    </div>
                  </div>
                </div>
              <div class="form-group">
              <label for="password" class="cols-sm-2 control-label"><b>Password</b></label>
                <div class="cols-sm-10">
                  <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password" required/>
                  </div>
              </div>
            </div>
               <div class="form-group">
                <label for="confirm" class="cols-sm-2 control-label"><b>Confirm Password</b></label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                    <input type="password" class="form-control" name="confirm" id="confirm" placeholder="Confirm your Password" required/>
                </div>
            </div>
        </div>
            <div class="form-group ">
                <input type="submit" class="btn btn-primary btn-lg btn-block login-button" value="Register" name="submit">
            </div>
            <div class="login-register">
                <a href="login.php">Login</a>
            </div>
        </form>
           </div>
          </div>
        </div>
    </div>
</div>
    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
        	<div class="col-lg-3 col-md-6 mb-5 mb-md-5 ftco-animate">
            <div class="ftco-footer-widget mb-4">
              <h1 class="logo">Yogalax</h1>
            </div>
          </div>
          <div class="col-lg col-md-6 mb-5 mb-md-5 ftco-animate">
            <div class="ftco-footer-widget mb-4">
              <h2 class="location">203 Fake St. Mountain View, San Francisco, California, USA</h2>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
    <script type="text/javascript">
      $(document).ready(function(){
        var name = $("#name").val();
        $("#name").blur(function(){
          if (name == null) {
            alert("Your value is empty");
        }
      });
      });
    </script>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

 
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>