<?php include ('./adminnav.php');?>
<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="delete ajax.js" ></script>
<script src="search.js"></script>
<link rel="stylesheet" href="update.css?v=<?php echo time(); ?>">
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.6.4.js" crossorigin="anonymous"></script>
    <div class="search">
      <label id="label">Search </label>
      <input type="text" id="search" placeholder="Search.." autocomplete="off">
    </div> 
    <div id="table-data">
    </div>
    <div class="table-container">
    <table class="table table-striped table-dark" id="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Product Name</th>
            <th scope="col">Serial No</th>
            <th scope="col">Product Code</th>
            <th scope="col">Category</th>
            <th scope="col">Location</th>
            <th scope="col">Count</th>
            <th scope="col">Price</th>
            <th scope="col">Date of Purchase</th>
            <th scope="col">Warranty Period</th>
            <th scope="col">Seller Details</th>
            <th scope="col">specification</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
  </thead>
        <tbody id="my-data">
 
        </tbody>

    </table>
  <!--MODAL WINDOW-->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!--ajax js -->
<script>
 $(document).ready(function()
 {
   function loaddata()
   {
    $.ajax({
        url:"updateb.php",
        type:"GET",
        success:function(data,status)
        {
            $('#my-data').html(data);
        }

    })
  }
loaddata();
})


</script>
</body>
</html>