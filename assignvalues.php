<?php

$conn=mysqli_connect('localhost','root','','tray resturant') or die(mysqli_error($conn));

/*$query1="INSERT INTO info(nameresturant,contact,phone ,email,location) 
 VALUES ('$resturantname','$contact','$phone','$email','$location')";*/
 /*$query2="INSERT INTO links(link1,link2,link3 ,link4) 
 VALUES ('$link1','$link2','$link3','$link4')";*/
 /*$query3="INSERT INTO trayvalues(value1,value2,value3 ,value4,value5,value6,value7,value8,value9,value10,
 value11,value12,value13,value14,value15,value16,value17,value18,value19,value20,value21,value22,value23,value24,value25,
 name1,name1dec,name2,name2dec,name3,name3dec,id)
 VALUES ('$value1','$value2','$value3','$value4','$value5','$value6','$value7',
 '$value8','$value9','$value10','$value11','$value12','$value13','$value14','$value15',
 '$value16','$value17','$value18','$value19','$value20','$value21',
 '$value22','$value23','$value24','$value25','$name1','$name1dec',
 '$name2','$name2dec','$name3','$name3dec','1')";*/

$query4="SELECT * FROM trayvalues";
 $a=mysqli_query($conn,$query4);
if(!$a){
    echo mysqli_error($conn);
    die(mysqli_error($conn));
}
$print=mysqli_fetch_array($a);
$query5="SELECT * FROM info";
$b=mysqli_query($conn,$query5);
$printinfo=mysqli_fetch_array($b);
$query5="SELECT * FROM links";
$c=mysqli_query($conn,$query5);
$printlinks=mysqli_fetch_array($c);
/*echo "<pre>";
print_r($printlinks);
echo "</pre>";*/
$resturantname=$printinfo['nameresturant'];
$phone=$printinfo['phone'];
$contact=$printinfo['contact'];
$email=$printinfo['email'];;
$location=$printinfo['location'];;
$link1=$printlinks['link1'];
$link2=$printlinks['link2'];
$link3=$printlinks['link3'];
$link4=$printlinks['link4'];
$value1=$print['value1'];
$value2=$print['value2'];
$value3=$print['value3'];
$value4=$print['value4'];
$value5=$print['value5'];
$value6=$print['value6'];
$value7=$print['value7'];
$value8=$print['value8'];
$value9=$print['value9'];
$value10=$print['value10'];
$value11=$print['value11'];
$value12=$print['value12'];
$value13=$print['value13'];
$value14=$print['value14'];
$value15=$print['value15'];
$value16=$print['value16'];
$value17=$print['value17'];
$value18=$print['value18'];
$value19=$print['value19'];
$value20=$print['value20'];
$value21=$print['value21'];
$value22=$print['value22'];
$name1=$print['name1'];
$name1dec=$print['name1dec'];
$name2=$print['name2'];
$name2dec=$print['name2dec'];
$name3=$print['name3'];
$name3dec=$print['name3dec'];
$value23=$print['value23'];
$value24=$print['value24'];
$value25=$print['value25'];


$query5="SELECT * FROM images";
 $d=mysqli_query($conn,$query5);
if(!$d){
    echo mysqli_error($conn);
    die(mysqli_error($conn));
}
$images=mysqli_fetch_array($d);
//print_r($images);


$image1=$images['image1'];
$image2=$images['image2'];
$image3=$images['image3'];
$image4=$images['image4'];
$image5=$images['image5'];
$image6=$images['image6'];
$image7=$images['image7'];
$image8=$images['image8'];
$image9=$images['image9'];
$image10=$images['image10'];
$image11=$images['image11'];
$image12=$images['image12'];
$image13=$images['image13'];
$image14=$images['image14'];










?>