<!DOCTYPE html>
<html lang="en">
  <?php
    session_start();
    include('connect.php');
    $email=$_SESSION['email'];
    $sql="SELECT * FROM `users` where email='$email'";
    $res = $conn->query($sql);
    $row=mysqli_fetch_array($res);
    $imageloc=$row['image'];


  ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user_info.css">
    <script src="https://kit.fontawesome.com/2aaeb74de6.js" crossorigin="anonymous"></script>
    <title>User Info</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
    
     <div class="form" id="result">

        <div class="image-container" >
            <img class="circular--square" src=<?php echo "../$imageloc" ?> />
        </div>

        <div class="edit-picture" id="editpic">
          <a href="editpic.php" id ="link" class="button editpicbutton" >Edit Profile Pic </a>
        </div>

        <div class="btn-container">
            <a href="edit.php" class="editbtn">Edit Profile</a>
        </div>

        <div class="input-container cont1">
            <i class="fa fa-envelope icon"></i>
            <input class="input-field" type="text" placeholder="Email" name="email" value=<?php echo $row['email']; ?> disabled>
        </div>
        
        <div class="input-container">
            <i class="fa fa-user icon"></i>
            <input class="input-field" type="text" placeholder="Username" name="username" value=<?php echo $row['username']; ?> disabled>
        </div>

        <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password"  placeholder="password" name="password" value=<?php echo $row['password']; ?> disabled>
        </div>

        <div class="input-container">
            <i class="fa-solid fa-user-tie icon"></i>
            <input class="input-field" type="text" placeholder="Desigantion" name="dsgn" value=<?php echo $row['designation']; ?> disabled>
        </div>

        <div class="input-container">
            <i class="fa-solid fa-phone icon"></i>
            <input class="input-field" type="number" placeholder="phone number" name="number" value=<?php echo $row['phone']; ?> disabled>
        </div>
     
      </div>


</body>

  <script type="text/javascript">

    $(document).ready (function()
    {
       

       $("#link").click(function(event)
       {
        alert("button clicked");
         event.preventDefault();
         $("#editpic").load('editpic.php');
         
         
       });

    });

  </script>
</html>
