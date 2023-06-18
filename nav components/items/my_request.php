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
        <link rel="stylesheet" href ="reportrequest.css">
        
    <title>My Requests</title>
</head>
<body>
<div class="table-container">
<table class="table table-hover">
  <thead>
    <tr>
      
      <th scope="col">item</th>
      <th scope="col">item count</th>
      <th scope="col">category</th>
      <th scope="col">Description</th>
      <th scope="col">date of request</th>
      <th scope="col">status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody id="table-body">
   
  </tbody>
</table>
</div>    
</body>
<script>
        $(document).ready(
            function()
            {       
                $.ajax({
                        url:'my_request_fetch.php',
                        type:"POST",
                        data:{},
                        success:function(data)
                        {
                            $("#table-body").html(data)

                            $(".edit").on('click',function(e)
                            {   
                                var id=  $(this).attr("data-id");
                                console.log(id)
                                location.href="./report_update_form.php?id="+id;
                            })
                        }
                    })
                })

  </script>
</html>