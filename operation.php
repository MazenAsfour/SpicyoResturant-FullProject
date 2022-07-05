<?php 
error_reporting(0);
$newuser->errname=$newuser->erremail=$newuser->errpassword= $div->err=$div->erroruser='';

abstract class rules{
    private $fullname;
    private $email;
    private $password;
    

    abstract public function checkrule($fullname,$email,$password);
   
}

class newuser extends rules{
    public $erremail;
    public $errname;
    public $errpassword;
    public $error1='false',$error2='false',$error3='false';
    public function checkrule($fullname,$email,$password){
                $this->fullname=$fullname;
                $this->email=$email;
                $this->password=$password;
                //echo $this->fullname;
               

                $pattern = "/[0-9]{1,}[a-z]+/i";
                //$error=false;
                $pattern1 = "/[0-9]{1,}/i";
                //echo 'hello';
               
                $number = preg_match('/[0-9]/i', $password);
                $uppercase = preg_match('/[A-Z]/', $password);
                $lowercase = preg_match('/[a-z]/', $password);
                
                if(!($number)){
                    $this->errpassword='password must have at least one digit';
                    $this->error3='true';
                  
                }
                if(!($uppercase)){
                    $this->errpassword='password must have at least one uppercase';
                    $this->error3='true';
                    
                }
                if(!($lowercase)){
                    $this->errpassword='password must have at least one lowercase';
                    $this->error3='true';
                   
                }   
                if(!(filter_var($email,FILTER_VALIDATE_EMAIL))){
                    $this->erremail="your email not valid, rewiter email!";
                    $this->error2='true';
                   
                }
                if(strlen($fullname)< 8){
                    $this->errname='please ,write your full name(your name and family name)';
                    $this->error1='true';
                   
                }
                if(empty($fullname)){
                    ///echo 'hello';
                    $this->errname="please ,write your full name it's empty!";
                    $this->error1='true';
                    
                }
                
                if(preg_match($pattern,$fullname)){
                    $this->errname='write your full name without start with a digit';
                    $this->error1='true';
                    
                }
                if(preg_match($pattern1,$fullname)){
                    $this->errname='write your name without digit for safety purpose';
                    $this->error1='true';
                    
                }
                if(empty($email)){
                    $this->erremail="you must write your email it's empty!";
                    $this->error2='true';
                    
                }
                if(empty($password)){
                    $this->errpassword="please ,you must write your password it's empty";
                    $this->error3='true';
                    
                }
            
                if(strlen($password)<8){
                    $this->errpassword='your password must be at least 8 characters ';
                    $this->error3='true';
                   
                }
               
               
                if(empty($password)){
                    $errpassword="you must write password it's empty";
                    $this->error3='true';
                   
                }
               
                
                if($this->error1=='false' && $this->error2=='false' && $this->error3=='false' )
                {   
                    //echo 'helllo';
                    $passwordafter=sha1($password);
                    session_start();
                    $_SESSION['username']=$fullname;
                    $_SESSION['email']=$email;
                    $_SESSION['password']=$passwordafter;
                    
                    //date("Y/m/d")
                    $date=date('y/m/d');
                    $completesign="<div class='green' ><span><i class='fa fa-check' aria-hidden='true'></i>
                    </span>Account created successfully</div>";
                    $conn=mysqli_connect('localhost','root','','tray resturant');
                    $querysign="INSERT INTO users(name,email,password,dateofjoin,status,image)
                    values('$fullname','$email','$passwordafter','$date','unactive','user.png')";
                    mysqli_query($conn,$querysign);
                    
                    $queryactive="UPDATE users set status='active' where name='$fullname'";
                    mysqli_query($conn,$queryactive);
                    header("REFRESH:1;url=index.php");
                   
                }
            }
           
    }

if(isset($_GET['sign'])){
    $newuser=new newuser();
    
    $name=$_GET['name'];
    $password=$_GET['password'];
    $email=$_GET['email'];
    $newuser->checkrule($name,$email,$password);


}

?>