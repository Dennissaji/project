

$(document).ready(function()
{
  $("#submit").on("click",function(e)
  {
    e.preventDefault();
    var pname=$("#productname").val();
    var sno=$("#sno").val();
    var pcode=$("#productcode").val();
    var cat=$("#ctg").val();
    var count=$("#count").val();
    var price=$("#price").val();
    var dop=$("#dop").val();
    var wp=$("#wp").val();
    var sd=$("#sd").val();
    var specs=$("#specs").val();
    var loc=$("#loc").val();

    console.log(pname);
    console.log(sno);
    console.log(dop);
    console.log(loc);
    console.log(specs);
    if(pname!="")
    {
    $.ajax({
        url:"insertb.php",
        type:"POST",

        data:{p_name:pname,s_no:sno,p_code:pcode,category:cat,count:count,price:price,d_op:dop,warp:wp,sellerdt:sd,spec:specs,loc:loc},
        success:function(data,status)
        {
          $('#msg').html("<h>data insert successfully</h>").fadeIn('slow') //also show a success message 
          $("#msg").css("background-color", "#cbf7d6");
          $("#msg").css("border", "1px solid green");
          $('#msg').delay(2000).fadeOut('slow');
           
        }

    })
  }

  })

})