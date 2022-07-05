<?php 
include 'assignvalues.php';
//print_r($link2);
$conn1=mysqli_connect('localhost','root','','tray resturant');
if(isset($_GET['link1'])){
    $link1=$_GET['link1'];
    $query="UPDATE links set link1='$link1'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
    }
}
if(isset($_GET['link2'])){
    //echo 'helllo';
    $link2=$_GET['link2'];
    $query="UPDATE links set link2='$link2'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
    }
    }
if(isset($_GET['link3'])){
      //  echo 'helllo';
        $link3=$_GET['link3'];
        $query="UPDATE links set link3='$link3'";
        $result=mysqli_query($conn,$query);
        if(!$result){
        echo mysqli_error($conn);
  }  
}
if(isset($_GET['link4'])){
    //echo 'helllo';
    $link4=$_GET['link4'];
    $query="UPDATE links set link4='$link4'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['Rname'])){
    //echo 'helllo';
    $resturantname=$_GET['Rname'];
    $query="UPDATE info set nameresturant='$resturantname'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['location'])){
    //echo 'helllo';
    $location=$_GET['location'];
    $query="UPDATE info set location='$location'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['phone'])){
    //echo 'helllo';
    $phone=$_GET['phone'];
    $query="UPDATE info set phone='$phone'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['contact'])){
    //echo 'helllo';
    $contact=$_GET['contact'];
    $query="UPDATE info set contact='$contact'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['email'])){
    //echo 'helllo';
    $email=$_GET['email'];
    $query="UPDATE info set email='$email'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['value1'])){
    //echo 'helllo';
    $value1=$_GET['value1'];
    $query="UPDATE trayvalues set value1='$value1'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['value2'])){
    //echo 'helllo';
    $value2=$_GET['value2'];
    $query="UPDATE trayvalues set value2='$value2'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['value3'])){
    //echo 'helllo';
    $value3=$_GET['value3'];
    $query="UPDATE trayvalues set value3='$value3'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['value4'])){
    //echo 'helllo';
    $value4=$_GET['value4'];
    $query="UPDATE trayvalues set value4='$value4'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['value5'])){
    //echo 'helllo';
    $value5=$_GET['value5'];
    $query="UPDATE trayvalues set value5='$value5'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['value6'])){
    //echo 'helllo';
    $value6=$_GET['value6'];
    $query="UPDATE trayvalues set value6='$value6'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['value7'])){
    //echo 'helllo';
    $value7=$_GET['value7'];
    $query="UPDATE trayvalues set value7='$value7'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['value8'])){
    //echo 'helllo';
    $value8=$_GET['value8'];
    $query="UPDATE trayvalues set value8='$value8'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['value9'])){
    //echo 'helllo';
    $value9=$_GET['value9'];
    $query="UPDATE trayvalues set value9='$value9'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}

if(isset($_GET['value10'])){
    //echo 'helllo';
    $value10=$_GET['value10'];
    $query="UPDATE trayvalues set value10='$value10'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['value11'])){
    //echo 'helllo';
    $value11=$_GET['value11'];
    $query="UPDATE trayvalues set value11='$value11'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['value12'])){
    //echo 'helllo';
    $value12=$_GET['value12'];
    $query="UPDATE trayvalues set value12='$value12'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['value13'])){
    //echo 'helllo';
    $value13=$_GET['value13'];
    $query="UPDATE trayvalues set value13='$value13'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['value14'])){
    //echo 'helllo';
    $value14=$_GET['value14'];
    $query="UPDATE trayvalues set value14='$value14'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['value15'])){
    //echo 'helllo';
    $value15=$_GET['value15'];
    $query="UPDATE trayvalues set value15='$value15'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['value16'])){
    //echo 'helllo';
    $value16=$_GET['value16'];
    $query="UPDATE trayvalues set value16='$value16'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['value17'])){
    //echo 'helllo';
    $value17=$_GET['value17'];
    $query="UPDATE trayvalues set value17='$value17'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['value18'])){
    //echo 'helllo';
    $value18=$_GET['value18'];
    $query="UPDATE trayvalues set value18='$value18'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['value19'])){
    //echo 'helllo';
    $value19=$_GET['value19'];
    $query="UPDATE trayvalues set value19='$value19'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['value20'])){
    //echo 'helllo';
    $value20=$_GET['value20'];
    $query="UPDATE trayvalues set value20='$value20'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['value21'])){
    //echo 'helllo';
    $value21=$_GET['value21'];
    $query="UPDATE trayvalues set value21='$value21'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['value22'])){
    //echo 'helllo';
    $value22=$_GET['value22'];
    $query="UPDATE trayvalues set value22='$value22'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['name1'])){
    //echo 'helllo';
    $name1=$_GET['name1'];
    $query="UPDATE trayvalues set name1='$name1'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['name1dec'])){
    //echo 'helllo';
    $name1dec=$_GET['name1dec'];
    $query="UPDATE trayvalues set name1dec='$name1dec'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['name2'])){
    //echo 'helllo';
    $name2=$_GET['name2'];
    $query="UPDATE trayvalues set name2='$name2'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['name2dec'])){
    //echo 'helllo';
    $name2dec=$_GET['name2dec'];
    $query="UPDATE trayvalues set name2dec='$name2dec'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['name3'])){
    //echo 'helllo';
    $name3=$_GET['name3'];
    $query="UPDATE trayvalues set name3='$name3'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['name3dec'])){
    //echo 'helllo';
    $name3dec=$_GET['name3dec'];
    $query="UPDATE trayvalues set name3dec='$name3dec'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['image1'])){
    //echo 'helllo';
    $image1=$_GET['image1'];
    $query="UPDATE images set image1='$image1'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['image2'])){
    //echo 'helllo';
    $image2=$_GET['image2'];
    $query="UPDATE images set image2='$image2'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['image3'])){
    //echo 'helllo';
    $image3=$_GET['image3'];
    $query="UPDATE images set image3='$image3'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['image4'])){
    //echo 'helllo';
    $image4=$_GET['image4'];
    $query="UPDATE images set image4='$image4'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['image5'])){
    //echo 'helllo';
    $image5=$_GET['image5'];
    $query="UPDATE images set image5='$image5'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['image6'])){
    //echo 'helllo';
    $image6=$_GET['image6'];
    $query="UPDATE images set image6='$image6'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['image7'])){
    //echo 'helllo';
    $image7=$_GET['image7'];
    $query="UPDATE images set image7='$image7'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['image8'])){
    //echo 'helllo';
    $image8=$_GET['image8'];
    $query="UPDATE images set image8='$image8'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['image9'])){
    //echo 'helllo';
    $image9=$_GET['image9'];
    $query="UPDATE images set image9='$image9'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['image10'])){
    //echo 'helllo';
    $image10=$_GET['image10'];
    $query="UPDATE images set image10='$image10'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['image11'])){
    //echo 'helllo';
    $image11=$_GET['image11'];
    $query="UPDATE images set image11='$image11'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['image12'])){
    //echo 'helllo';
    $image12=$_GET['image12'];
    $query="UPDATE images set image12='$image12'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['image13'])){
    //echo 'helllo';
    $image13=$_GET['image13'];
    $query="UPDATE images set image13='$image13'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
if(isset($_GET['image14'])){
    //echo 'helllo';
    $image14=$_GET['image14'];
    $query="UPDATE images set image14='$image14'";
    $result=mysqli_query($conn,$query);
    if(!$result){
    echo mysqli_error($conn);
}  
}
?>