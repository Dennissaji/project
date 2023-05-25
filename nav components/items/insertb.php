<?php
 include 'config.php';

 $p_name=$_POST["p_name"];
 $sno=$_POST["s_no"];
 $pcode=$_POST["p_code"];
 $cat=$_POST["category"];
 $count=$_POST["count"];
 $price=$_POST["price"];
 $loc=$_POST["loc"];
 $dop=$_POST["d_op"];
 $wp=$_POST["warp"];
 $sd=$_POST["sellerdt"];
 $spec=$_POST["spec"];

  

  $sql = "INSERT INTO `items` ( `product name`, `serial no`, `product code`, `category`, `location`, `count`, `price`, `date of purchase`, `warranty period`, `seller details`, `specs`) VALUES ('$p_name', '$sno', '$pcode', '$cat','$loc', '$count','$price','$dop', '$wp','$sd','$spec')";
  
 $result=mysqli_query($conn,$sql) or die ("sql query failed");
 echo 1;
?>