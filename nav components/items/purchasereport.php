<!DOCTYPE html>
<html>
<head>
  <title>Table with Search Bar</title>
  <link rel="stylesheet" type="text/css" href="purchasereport.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <meta charset="utf-8">
  <?php
  session_start();
  if($_SESSION['role']=='admin')
  {include ('./adminnav.php');}
  else
  {
     include ('./usernav.php');
  }


?>
</head>
<body id="body">
  <header class = "header"> 
    <h1 id="report">Purchase Report</h1>
    <button style="font-size:18px" id="print_btn">print <i class="fa fa-print"></i></button>

</header>
  <div class="container">
    <form>
    <div class="form-container">
        <label for="date" id="startdate_label">From:</label>
        <input type="date" name="date" id="start_date">
        <label for="date" id="enddate_label">To:</label>
        <input type="date" name="date" id="end_date">
        <input type="button" value="submit" id="submit">  

    </div>
</form>

    <div class="table-box">
    <table>
        <h3>Payment summary</h3>
        <thead>
          <tr>
            <th>Category</th>
            <th>Amount</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td>Staffroom</td>
            <td id="Staffroom"> </td>
          </tr>

          <tr>
            <td>Classroom</td>
            <td id="classroom"> </td>
          </tr>

          <tr>
            <td>Laboratory</td>
            <td id="lab"> </td>
          </tr>

          <tr>
            <td >Total Amount         </td>
            <td id="total"></td>
          </tr>

        </tbody>
      </table>
    </div>

  <div class="table-box2">
    <table>
        <h3>Purchase summary</h3>
        <thead>
          <tr>
            <th>Date</th>
            <th>Name</th>
            <th>Serial.no</th>
            <th>Count</th>
            <th>Price</th>

          </tr>
        </thead >
        <tbody id="table-body">
          
        </tbody>
      </table>
    </div>
  </body>
  <script >
    $(document).ready(function()
    {
      $("#submit").click(function(e)
      { e.preventDefault();
        var start_date = $("#start_date").val();
        var end_date = $("#end_date").val();

        console.log(start_date);
        console.log(end_date);
        
        if(start_date != '' && end_date != '')
        {
            $.ajax({
              url:"dateselect.php",
              method:"POST",
              data:{start_date:start_date,end_date:end_date},
              success:function(data)
              {
                  console.log(data)
                  let myarray = data.split("$");
                  $("#table-body").html(myarray[0]);
                  console.log(myarray[0])
                  console.log(myarray[1])
                  console.log(myarray[2])
                  console.log(myarray[3])
                  console.log(myarray[4])
                  $("#total").html(myarray[1]+" /-")
                  $("#classroom").html(myarray[2] + "/-")
                  $("#lab").html(myarray[3] + "/-")
                  $("#staffroom").html(myarray[4] + "/-")
              }
            })
        }
        else if(start_date == ''&& end_date =='')
        {
          alert("select the dates")
        }
        else if(start_date==''&& end_date!='')
        {
          alert("select start date");
        }
        else if(start_date!='' && end_date =='')
        {
          alert("select end date")
        }

      })

      $("#print_btn").click(function(e)
      {
        window.print();
      })
      
    })
  </script>
  </html>