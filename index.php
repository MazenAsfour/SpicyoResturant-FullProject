<?php

include 'assignvalues.php';
session_start();
$nameofsession='';


$sign="<a href='sign.php'>Sign Up</a>";
if(!(empty($_SESSION['username']))){
    $sign="<a href='index.php?out'>Sign Out</a>";
    $nameofsession='<h1 style="position:absolute;left:25vw;top:2.7vw;color:white;font-size:1.2vw;z-index:9999">'. $_SESSION['username']."</h1>";

}
if(isset($_GET['out'])){
    $unactive=$_SESSION['username'];
    session_destroy();
    session_unset();
    $queryactive="UPDATE users set status='unactive' where name='$unactive'";
    mysqli_query($conn,$querysign);
    header("REFRESH:0;url=index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Spicyo</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- owl css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/about.css">
    <!--[if lt IE 9]>
    
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <style>
         #logoname {
        color: rgb(107, 106, 106);
        font-size: 1.5vw;
        display: inline-flex;
        margin-left:.5vw;
        }
</style>
    </head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
    </div>

    <div class="wrapper">
    <!-- end loader -->

     <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div id="dismiss">
                    
                    <i class="fa fa-arrow-left"></i>
                </div>

                <ul class="list-unstyled components">
                     <li>
                        <a href="admin.php">Admin Site</a>
                    </li>   
                    <li class="active">
                        <a href="index.php"><?php echo $link1;?></a>
                    </li>
                    <li>
                        <a href="index.php"><?php echo $link2;?></a>
                    </li>
                    <li>
                        <a href="index.php"><?php echo $link3;?></a>
                    </li>
                    
                    <li>
                        <a href="index.php"><?php echo $link4;?></a>
                    </li>
                    <li>
                        <?php echo $sign;?>
                    </li>

                </ul>

            </nav>
        </div>

    <div id="content">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="full">
                        <a class="logo" href="index.html" ><img style='margin-left:5vw !important' src="images/<?php echo $image1;?>" width="25%" alt="#" calss="logo1"/><p id="logoname"><?php echo $resturantname?></p></a>
                    </div>
                    
                </div>
                <div class="col-md-9">
                    <div class="full">
                        <div class="right_header_info">
                            <ul>
                                <li class="dinone"><?php echo $contact;?> : <img style="margin-right: 15px;margin-left: 15px;" src="images/phone_icon.png" alt="#"><a href="#"><?php echo $phone;?> </a></li>
                                <li class="dinone"><img style="margin-right: 15px;" src="images/mail_icon.png" alt="#"><a href="#"><?php echo $email;?></a></li>
                                <li class="dinone"><img style="margin-right: 15px;height: 21px;position: relative;top: -2px;" src="images/location_icon.png" alt="#"><a href="#"><?php echo $location;?></a></li>
                                
                                
                                <li>
                                    <button type="button" id="sidebarCollapse">
                                        <img src="images/menu_icon.png" alt="#">
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    
    <!-- start slider section -->
    <div class="slider_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div id="main_slider" class="carousel vert slide" data-ride="carousel" data-interval="5000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="slider_cont">
                                                <h3><?php echo $value1;?></h3>
                                                <p><?php echo $value2;?></p>
                                                <a class="main_bt_border" href="#" onclick="scroll1()"><?php echo $value7;?></a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="slider_image full text_align_center">
                                                <img class="img-responsive" src="images/<?php echo $image2;?>" alt="#" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="slider_cont">
                                                <h3><?php echo $value3;?></h3>
                                                <p><?php echo $value4;?></p>
                                                <a class="main_bt_border" href="#" onclick="scroll1()"><?php echo $value7;?></a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 full text_align_center">
                                            <div class="slider_image">
                                                <img class="img-responsive" src="images/<?php echo $image3;?>" alt="#" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="slider_cont">
                                                <h3><?php echo $value5;?></h3>
                                                <p><?php echo $value6;?></p>
                                                <a class="main_bt_border" href="#" onclick="scroll1()"><?php echo $value7;?></a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 full text_align_center">
                                            <div class="slider_image">
                                                <img class="img-responsive" src="images/<?php echo $image4;?>" alt="#" />
                                            </div>
                                        </div>
                                    </div>
                                </div>




                            </div>
                            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                                <i class="fa fa-angle-up"></i>
                            </a>
                            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                                <i class="fa fa-angle-down"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end slider section -->


   <?php echo $nameofsession;
    ?>
    <!-- section -->
    <section class="resip_section">
        <div class="container">
            <div class="row">
         <div class="col-md-12">
       <div class="ourheading">
    <h2>Our Recipes</h2>
  </div>
</div>    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="owl-carousel owl-theme">

                <div class="item">
                    <div class="product_blog_img">
                        <img src="images/<?php echo $image5;?>" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3><?php echo $value8;?></h3>
                        <h4><span class="theme_color">$</span><?php echo $value9;?></h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="images/<?php echo $image6;?>" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3><?php echo $value10;?></h3>
                        <h4><span class="theme_color">$</span><?php echo $value11;?></h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img df">
                        <img src="images/<?php echo $image7;?>" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3><?php echo $value12;?></h3>
                        <h4><span class="theme_color">$</span><?php echo $value13;?></h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="images/<?php echo $image8;?>" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3><?php echo $value14;?></h3>
                        <h4><span class="theme_color">$</span><?php echo $value15;?></h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="images/<?php echo $image9;?>" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3><?php echo $value16;?></h3>
                        <h4><span class="theme_color">$</span><?php echo $value17;?></h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="images/<?php echo $image5;?>" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3><?php echo $value8;?></h3>
                        <h4><span class="theme_color">$</span><?php echo $value9;?></h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="images/<?php echo $image6;?>" height="5vw" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3><?php echo $value10;?></h3>
                        <h4><span class="theme_color">$</span><?php echo $value11;?></h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img df">
                        <img src="images/<?php echo $image7;?>" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3><?php echo $value12;?></h3>
                        <h4><span class="theme_color">$</span><?php echo $value13;?></h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="images/<?php echo $image8;?>" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3><?php echo $value14;?></h3>
                        <h4><span class="theme_color">$</span><?php echo $value15;?></h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="images/<?php echo $image9;?>" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3><?php echo $value16;?></h3>
                        <h4><span class="theme_color">$</span><?php echo $value17;?></h4>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>
<div class="bg_bg">
<!-- about -->
<div class="about">
    <div class="container">
      <div class="row">
         <div class="col-md-12">
             <div class="title">
                <i><img src="images/<?php echo $image10;?>" alt="#"/></i>
                <h2>About Our Food & Restaurant</h2>
                <span>Order food from
                    hundreds of Flavors. we are placed since 2005, with amazing places and chefs
                    from all <br>over the world, the best you can find it here. we make food with love
                    passion and great hands always help.
                </span>
             </div>
          </div>
       </div>
       <div class="row">
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
             <div class="about_box">
                 <h3>Best Food</h3>
                 <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscureContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard </p>
                 
             </div>
         </div>
          <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 about_img_boxpdnt">
             <div class="about_img">
                 <figure><img src="images/about-img.jpg" alt="#/"></figure>
             </div>
         </div>      
       </div> 
    </div>
</div>
<!-- end about -->



<!-- Our Client -->
<div class="Client">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title">
          <i><img src="images/<?php echo $image11;?>" id="df" alt="#"/></i>
          <h2>Our Client</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
         <div class="Client_box">
           <img src="images/<?php echo $image12;?>" alt="#"/>
           <h3>Joy Mory</h3>
           <p>They Are The Best in Town.</p>
           <i><img src="images/client_icon.png" alt="#"/></i>
         </div>
      </div>
    

    
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
           <div class="Client_box">
             <img src="images/<?php echo $image13;?>" alt="#"/>
             <h3>Mari Jami</h3>
             <p>The flavor is talking</p>
             <i><img src="images/client_icon.png" alt="#"/></i>
           </div>
        </div>
      
      
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
           <div class="Client_box">
             <img src="images/<?php echo $image14;?>" alt="#"/>
             <h3>Emma Wati</h3>
             <p>They have a great shift</p>
             <i><img src="images/client_icon.png" alt="#"/></i>
           </div>
        </div>
      </div>




  </div>
</div>  
<!-- end Our Client -->
</div>
    <!-- footer -->
    <fooetr>
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                  <div class=" col-md-12">
                    <h2>Request  A<strong class="white"> Call  Back</strong></h2>
                  </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      
                        <form class="main_form">
                            <div class="row">
                             
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Name" type="text" name="Name">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Email" type="text" name="Email">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Phone" type="text" name="Phone">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <button class="send">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="img-box">
                            <figure><img src="images/img.jpg" alt="img" /></figure>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="footer_logo">
                              <a href="index.html"><img src="images/logo1.jpg" id="df4" alt="logo" /></a>
                            </div>
                        </div>
                        
                       
                    </div>
                </div>
                
            </div>
            <div class="copyright">
                <div class="container">
                    <p>Amman-Jordan -King Hussein Business Park ZINC -23<br>
                        Call: +962-792-848-931 - Clever Care Team<br>
                        Email: info@clevermindpob.org<br>
                        © 2021 All Rights Reserved. Design by Clever Mind POB</p>
                </div>
            </div>
        </div>
    </fooetr>
    <!-- end footer -->

    </div>
    </div>
    <div class="overlay"></div>
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
     <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    
     <script src="js/jquery-3.0.0.min.js"></script>
   <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

    <style>
    #owl-demo .item{
        margin: 3px;
    }
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
    </style>

     
      <script>
         $(document).ready(function() {
           var owl = $('.owl-carousel');
           owl.owlCarousel({
             margin: 10,
             nav: true,
             loop: true,
             responsive: {
               0: {
                 items: 1
               },
               600: {
                 items: 2
               },
               1000: {
                 items: 5
               }
             }
           })
         })
      </script>
<script src="js/about.js"></script>
</body>

</html>