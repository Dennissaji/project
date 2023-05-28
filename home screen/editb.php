<?php 
 include('connect.php');
 session_start();
 
 if( isset($_POST['username']) || isset($_POST['dsgn']) || isset($_POST['phone']) || isset($_POST['password']))
 {
    $username = $_POST['username'];
    $dsgn = $_POST['dsgn'];
    $phone = $_POST['phone'];

    $email = $_SESSION['email'];

    $query = "update `users` set username = '$username', designation = '$dsgn', phone = '$phone' where email = '$email'";
    $result = mysqli_query($conn,$query);

    if($result == 1)
    {
        echo "updated";
    }
    else
    {
        echo "Failed to Update";
    }
 }

 ?>