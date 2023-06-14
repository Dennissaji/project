<?php
 include 'config.php';

 $p_name=$_POST["productname"];
 $sno=$_POST["sno"];
 $pcode=$_POST["productcode"];
 $cat=$_POST["ctg"];
 $count=$_POST["count"];
 $price=$_POST["price"];
 $loc=$_POST["loc"];
 $dop=$_POST["dop"];
 $wp=$_POST["wp"];
 $sd=$_POST["sd"];
 $spec=$_POST["specs"];

 if($_FILES['file']['name'] != ' ')
 {
    $filename = $_FILES['file']['name'];
    $extension = pathinfo($filename,PATHINFO_EXTENSION);
    $valid_extension = array("jpg","jpeg","png");

    if(in_array($extension,$valid_extension))
    {
        
    }

  
 }

  $sql = "INSERT INTO `items` ( `product name`, `serial no`, `product code`, `category`, `location`, `count`, `price`, `date of purchase`, `warranty period`, `seller details`, `specs`) VALUES ('$p_name', '$sno', '$pcode', '$cat','$loc', '$count','$price','$dop', '$wp','$sd','$spec')";
  
 $result=mysqli_query($conn,$sql) or die ("sql query failed");
 echo 1;
?>