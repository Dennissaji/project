<?php
 session_start();
  $server="localhost:3325";
  $username="root";
  $password="dennis";
  $dbname="mini project";

  $email=$_POST['email'];
  $name=$_POST['username'];
  $pass=$_POST['password'];
  $dsgn=$_POST['dsgn'];
  $role=$_POST['role'];
  $num=$_POST['num'];
  $image = $_FILES['image'];

  echo($email);
  echo($name);
  print_r($image);

  $imagefilename = $image['name'];
  print_r($imagefilename);

  $imagefiletemp = $image['tmp_name'];
  
  $filename_seperate = explode('.',$imagefilename);
  print_r($filename_seperate);

  $file_extension = strtolower(end($filename_seperate));
  print_r($file_extension);

  $extension = array('jpeg','jpg','png');
  if(in_array($file_extension,$extension))
  {
    $upload_image = 'user_images/'.$imagefilename;
    move_uploaded_file($imagefiletemp,$upload_image);
  }
 

  $conn = mysqli_connect($server,$username,$password,$dbname);

  if($conn)
  { $sql="INSERT INTO `users` (email,username,`password`,designation,`role`,phone,`image`) values ('$email','$name','$pass','$dsgn','$role','$num','$upload_image')";
    $result=mysqli_query($conn,$sql);
   if($result)
    { $_SESSION['msg']="User Data Entered Successfully";
      if(isset($_SESSION['msg']))
       
       echo 1;
    }
}
?>