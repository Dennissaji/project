<?php

 include 'config.php';

 $email = $_POST['email'];
 $number = $_POST['number'];
 $category =$_POST['category'];
 $date = $_POST['date'];
 $desc = $_POST['desc'];
 $item = $_POST['item'];

 $sql = "INSERT INTO `complaint` (`email`, `phone`, `category`,`item`, `date`, `desc`) VALUES ('$email','$number','$category','$item','$date','$desc');";
 $result = $conn->query($sql);

 if($result)
 {
    echo "Your Request have been successfully submitted ";
 }
 else{
    echo "0";
 }





?>