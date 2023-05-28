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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div id="dispmsg"></div>
<form id="myform">
    <div class="form">
        <div class="image-container">
            <img class="circular--square" src=<?php echo "../$imageloc" ?> />
        </div>
        <div class="input-container cont1 cont1-edit">
            <i class="fa fa-envelope icon"></i>
            <input class="input-field" type="text" placeholder="Email" name="email" value=<?php echo $row['email']; ?> disabled >
          </div>
        
        <div class="input-container">
            <i class="fa fa-user icon"></i>
            <input class="input-field" type="text" id="username" placeholder="Username" name="username" value=<?php echo $row['username']; ?> >
          </div>

          <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password" id="password"  placeholder="password" name="password" value=<?php echo $row['password']; ?>>
          </div>

          <div class="input-container">
            <i class="fa-solid fa-user-tie icon"></i>
            <input class="input-field" type="text" id="dsgn" placeholder="Desigantion" name="dsgn" value=<?php echo $row['designation']; ?> >
          </div>

          <div class="input-container">
            <i class="fa-solid fa-phone icon"></i>
            <input class="input-field" type="number" id = "num" placeholder="phone number" name="number" value=<?php echo $row['phone']; ?> >
          </div>
          
          <div class="row">
            <div class="cols">
                <input type="submit" name="submitbtn" class="submitbtn" value="update">      
          </div>
     </div>
</form>

  <script type="text/javascript">
    
    $(document).ready(function()
    {
        $("#myform").on('submit',function(e)
        {
            e.preventDefault();
            var username = $("#username").val();
            var dsgn = $("#dsgn").val();
            var phone = $("#num").val();
            var password = $("#password").val();
            
            $.ajax({
                url:"editb.php",
                type:"post",
                dataType:"html",
                data:{username:username,dsgn:dsgn,phone:phone,password:password},
                success:function(data)
                {
                    $("#dispmsg").html(data);

                }
            })
            
           
        });
    });

  </script>
    
</body>
</html>