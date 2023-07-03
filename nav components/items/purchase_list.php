<?php

if($_SESSION['role'] == 'admin')
{
  include 'adminnav.php';
}
else
{
  include 'usernav.php';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="purchase_list.css"/>
    <title>Document</title>

</head>
<body>
<div class=" table-responsive">
<table class="table table-striped align-middle">
  <thead>
    <tr>
      
      <th scope="col">Item Name</th>
      <th scope="col">description</th>
      <th scope="col">Count</th>
      <th scope="col">Department</th>
      <th scope="col">Category</th>
    </tr>
  </thead>
  <tbody id="t-body">




  </tbody>
</table>
</div>
    
</body>
<script>
    $(document).ready(function()
    {
        $.ajax({
            url:"purchase_listb.php",
            success:function(data)
            {
               $("#t-body").html(data);
            }
        })
    })
</script>
</html>
