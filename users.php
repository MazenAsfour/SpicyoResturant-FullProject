<?php
include 'assignvalues.php';
include 'process.php';

if(isset($_GET['delete'])){
    $id=$_GET['id'];
    $query="delete from users where id='$id'";
    //mysqli_query($conn,$query);
    //header("REFRESH:0;url=users.php");
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Info Admin
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
    th,td{
        border:1px solid silver;
        padding:.2vw;
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
          <li class="">
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
          <li >
            <a href="images.php">
              <i class="nc-icon nc-pin-3"></i>
              <p>images</p>
            </a>
          </li>
          <li class='active'>
            <a href="users.php">
              <i class="nc-icon nc-pin-3"></i>
              <p>users</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" style="height: 100vh;">
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
            <a class="navbar-brand" href="javascript:;">Users Of Resturant </a>
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
        <div class="container">
        <table class='text-center'>
        <tr class="headertable">
          <th>Full-Name</th>
          <th>Email</th>
          <th>Password</th>
          <th style="box-sizing:unset; width:10vw;padding:0">Date OF Join</th>
          <th>Status Now</th>
          <th>Image</th>
          <th colspan='2' style="width:10%;padding-right:.5vw">Action</th>
        </tr>
        <?php 
        
        $tableuser="SELECT * from users";
        $tableuserrun=mysqli_query($conn,$tableuser) ;
        /*
        if($fetchtable1['Status'] == "active"){
          $active='active<span class="active"></span>';
        }
        else{
            $active='unactive<span class="unactive"></span>';
        }*/
       
        
        while($fetchtable=mysqli_fetch_array($tableuserrun)){
            echo "<tr><td class='name1'>".$fetchtable['name']."</td><td class='email'>
            ".$fetchtable['email']."</td><td>".$fetchtable['password'].
            "</td><td class='date1'>".$fetchtable['dateofjoin']."</td><td class='status'>".$fetchtable['status'].
            "</td><td>".$fetchtable['image']."</td><td style='display:flex;margin-right:1.2vw; 
            border-bottom:none;border-left:none; margin-right:-.03vw' >
            <form action='users.php'>
            <input type='submit' class='btn btn-info contactable'
             name='contact'value=contact '>
             </form>
             <form action='users.php'><input type='submit' class='btn btn-danger deletetablebtn'
             name='delete'value='delete' id='".$fetchtable['id']."'>
             <input type='hidden' value=".$fetchtable['id']." name='id'>
             </form></td></tr>
            ";
        }
        
      
      ?>
      </table>
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
