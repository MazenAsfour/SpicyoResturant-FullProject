<?php

include 'assignvalues.php';
include 'operation.php';
$sign='block';
$sign1='none';
$welcomesign='Welcome New Freind';
$welcometextsign='Welcome new friend to our group of close buddies. We hope you would love the companionship of all and share a good rapport with us forever';
class checkavaliable{
    private $user;
    private $password;
    public $erroruser;
    public $errpasslog='false';
    public $err;
    public $erruserlog='false';


    public function login($user1,$password1){
        $this->user=$user1;
        $this->password=$password1;
        
        
       
        if(!(filter_var($this->user,FILTER_VALIDATE_EMAIL))){
            $this->erroruser="your email not valid, rewiter email!";
            $this->erruserlog='true';
            
        }
        if(empty($this->user)){
            $this->erroruser="you must write your email it's empty!";
            $this->erruserlog='true';
            
        }
        if(strlen($this->user)<8){
            $this->err='your password must be at least 8 characters ';
            $this->errpasslog='true';
           
        }
        if(empty($this->user)){
            $this->err="you must write your password it's empty!";
            $this->errpasslog='true';
            
        }
        if($this->errpasslog == 'false' & $this->erruserlog == 'false'){
            $conn=mysqli_connect('localhost','root','','tray resturant');
            $queryreturn="SELECT * from users where Email='$this->user'";
            $resultreturn=mysqli_query($conn,$queryreturn);
            $fetchnosha=mysqli_fetch_array($resultreturn);
            if(isset($fetchnosha)){
                $passwordwithsha=sha1($this->password);
                if($fetchnosha['password']===$passwordwithsha){
                    session_start();
                    $_SESSION['username']=$fetchnosha['name'];
                    $_SESSION['email']=$fetchnosha['email'];
                    
                   
                    ///echo $_SESSION['username'];
                    echo "<script>window.location.href='index.php';</script>";
                
    
                }
                else{
                    $this->err="your password not correct!";
                }
            }
            else
            {
                $this->erroruser='email not Found please check your data';
            }
}
        }      
        
}
if(isset($_GET['login'])){
    $sign='none';
    $sign1='block';
    $password=$_GET['password'];
    $welcomesign='Hello Back!';
    $welcometextsign='Loveliest welcome goes to you because you are the loveliest! Sending you a warm welcome and best wishes on your return. Welcome back from your adventurous trip!';
    $name=$_GET['email'];
    $password=$_GET['password'];
    $div=new checkavaliable();
    $div->login($name,$password);

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Sign Up</title>
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
        *{
            text-decoration:cappital;
        }
        .signright,.signleft{
            height:56vw;
        }
        .form-control {
        border: #fff solid 2px;
        border-radius: inherit;
        margin-bottom: 25px;
        padding: 15px 20px;
        font-family: poppins;
        width: 62%;
        margin: 0 auto;
        padding: 0.4vw;
        border-radius: 1vw;
        padding-left:1vw
        }
        .signleft label{
            padding-top:.6vw ;
            padding-bottom:.1vw;
        }
        .signright div h1{
            color:#b7b3b3;
            
        }
        .error{
           color: #db1414;
           padding-top:.3vw
        }
       
    </style>
</head>
<body>
    <div class="sign">
        <div class="row" style='margin:0;'>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 signleft text-center" style='background-color:#e9e4e4;'>
                <div class="conatiner">
                    <img src="images/<?php echo $image1;?>" style='width:20%;padding-top:8vw'>
                    <h1 style='padding: 0 0'> <a href="index.php"><?php echo $resturantname;?></a>
                    <p>Best restaurants with a view in Amman</p></h1>
                    <hr>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" class='signup' style='display:<?php echo $sign;?>'>
                    <div>
                        <label >UserName </label>
                        <input type="text" placeholder='Full-Name' class='form-control' name="name"  id="">
                        <div class='error'><?php echo $newuser->errname;?></div>
                    </div>
                    <div>
                        <label >Email </label>
                        <input type="email"placeholder='Email' class='form-control' name="email"  id="">
                        <div class='error'><?php echo $newuser->erremail;?></div>
                    </div>
                    <div>
                        <label >Password</label>
                        <input type="Password"placeholder='Password' class='form-control' name="password"  id="">
                        <div class='error'><?php echo $newuser->errpassword;?></div>
                    </div>
                    <div>
                        <input type="submit" class='btn btn-success' style='margin-top:1vw' value="Sign Up" name='sign'>
                    </div>
                    </form>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" class='log' style='display:<?php echo $sign1;?>;'>
                    
                    <div>
                        <label >Email </label>
                        <input type="email"placeholder='Email' class='form-control' name="email"  id="">
                        <div class='error'><?php echo $div->erroruser;;?></div>
                    </div>
                    <div>
                        <label >Password</label>
                        <input type="Password"placeholder='Password' class='form-control' name="password"  id="">
                        <div class='error'><?php echo $div->err;?></div>
                    </div>
                    <div>
                        <input type="submit" class='btn btn-success' style='margin-top:1vw' value="Sign Up" name='login'>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 signright text-center" style='background-color:black;'>
                <div class="container" style='padding:22vw 0vw'>

                    <div><h1 class='welcome'><?php echo $welcomesign;?></h1></div>
                    <div><p class='welcometext'><?php echo $welcometextsign;?></p></div>
                    <div><button class='btn btn-info login ' onclick='show()' style='margin-top:1vw;padding:.5vw 2vw'>Sign In</button></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const log=document.querySelector('.log');
        const login=document.querySelector('.login');
        const signup=document.querySelector('.signup');
        const welcome=document.querySelector('.welcome');
        const welcometext=document.querySelector('.welcometext');
        function show(){
            log.style.display='block';
            signup.style.display='none';
            document.querySelector('.welcome').innerHTML='Hello Back!';
            welcometext.innerHTML='Loveliest welcome goes to you because you are the loveliest! Sending you a warm welcome and best wishes on your return. Welcome back from your adventurous trip!';
            login.innerHTML='SignUp';
        }
    </script>
</body>
</html>