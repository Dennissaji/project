$(document).ready(function()
{
 $(document).on("click",".reject",function()
 {
    if(confirm("Do you realy Want to REJECT the record ?"))
    {
    console.log("button clicked");
    var email=$(this).data("email");
    var element=this;

    $.ajax({
      url: "ajax pending.php",
      type: "POST",
      data:{email: email},
      success: function(data)
      { echo(data);
        if(data==1)
        {
            $(element).closest("tr").fadeOut();
        }
        else{
                 alert("data cant be removed");
        }
      }
    })
}
 })


})