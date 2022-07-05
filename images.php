<?php
include 'assignvalues.php';
include 'process.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Images Admin
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" href="design.css">
  <style>
    .bt{
      padding:.3vw .8vw;
      margin-top: 1vw;
      margin-bottom:1vw;
    }
  </style>

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <!-- <div class="logo-image-small">
            <img src="./assets/img/logo-small.png">
          </div> -->
          <!-- <p>CT</p> -->
        </a>
        <a href="index.php" class="">
         
          <div class="">
            <img id="img1 "style="margin-left: 24px;
            margin-top: -14px" src="images/logo1.jpg">
          </div> 
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class=" ">
            <a href="admin.php">
              <i class="nc-icon nc-bank"></i>
              <p>Links Item</p>
            </a>
          </li>
          <li>
            <a href="info.php">
              <i class="nc-icon nc-diamond"></i>
              <p>Info Item</p>
            </a>
          </li>
          <li>
            <a href="values.php">
              <i class="nc-icon nc-pin-3"></i>
              <p>Values Item</p>
            </a>
          </li>
          <li class="active">
            <a href="images.php">
              <i class="nc-icon nc-pin-3"></i>
              <p>Images Item</p>
            </a>
          </li>
          <li >
            <a href="users.php">
              <i class="nc-icon nc-pin-3"></i>
              <p>users</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" style="height: 280vh;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Images Of Website </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
              <label for=""><?php echo $image1;?></label>
              <input type="file" name="image1" id="" value='<?php echo $image1;?>'  class="form-control">
              <button type="submit" class="btn-outline-info bt" > edit</button>
            </form>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
              <label for=""><?php echo $image2;?></label>
              <input type="file" name="image2" id="" value='<?php echo $image2;?>'  class="form-control">
              <button type="submit" class="btn-outline-info bt" > edit</button>
            </form>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
              <label for=""><?php echo $image3;?></label>
              <input type="file" name="image3" id="" value='<?php echo $image3;?>'  class="form-control">
              <button type="submit" class="btn-outline-info bt" > edit</button>
            </form>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
              <label for=""><?php echo $image4;?></label>
              <input type="file" name="image4" id="" value='<?php echo $image4;?>'  class="form-control">
              <button type="submit" class="btn-outline-info bt" > edit</button>
            </form>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
              <label for=""><?php echo $image5;?></label>
              <input type="file" name="image5" id="" value='<?php echo $image5;?>'  class="form-control">
              <button type="submit" class="btn-outline-info bt" > edit</button>
            </form>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
              <label for=""><?php echo $image6;?></label>
              <input type="file" name="image6" id="" value='<?php echo $image6;?>'  class="form-control">
              <button type="submit" class="btn-outline-info bt" > edit</button>
            </form>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
              <label for=""><?php echo $image7;?></label>
              <input type="file" name="image7" id="" value='<?php echo $image7;?>'  class="form-control">
              <button type="submit" class="btn-outline-info bt" > edit</button>
            </form>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
              <label for=""><?php echo $image8;?></label>
              <input type="file" name="image8" id="" value='<?php echo $image8;?>'  class="form-control">
              <button type="submit" class="btn-outline-info bt" > edit</button>
            </form>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
              <label for=""><?php echo $image9;?></label>
              <input type="file" name="image9" id="" value='<?php echo $image9;?>'  class="form-control">
              <button type="submit" class="btn-outline-info bt" > edit</button>
            </form>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
              <label for=""><?php echo $image10;?></label>
              <input type="file" name="image10" id="" value='<?php echo $image10;?>'  class="form-control">
              <button type="submit" class="btn-outline-info bt" > edit</button>
            </form>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
              <label for=""><?php echo $image11;?></label>
              <input type="file" name="image11" id="" value='<?php echo $image11;?>'  class="form-control">
              <button type="submit" class="btn-outline-info bt" > edit</button>
            </form>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
              <label for=""><?php echo $image12;?></label>
              <input type="file" name="image12" id="" value='<?php echo $image12;?>'  class="form-control">
              <button type="submit" class="btn-outline-info bt" > edit</button>
            </form>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
              <label for=""><?php echo $image13;?></label>
              <input type="file" name="image13" id="" value='<?php echo $image13;?>'  class="form-control">
              <button type="submit" class="btn-outline-info bt" > edit</button>
            </form>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
              <label for=""><?php echo $image14;?></label>
              <input type="file" name="image14" id="" value='<?php echo $image14;?>'  class="form-control">
              <button type="submit" class="btn-outline-info bt" > edit</button>
            </form>
          </div>
        </div>
      </div>
      <footer class="footer" style="position: absolute; bottom: 0; width: -webkit-fill-available;">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="https://www.creative-tim.com" target="_blank">Creative Tim</a></li>
                <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © 2020, made with <i class="fa fa-heart heart"></i> by Creative Tim
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
</body>

</html>
