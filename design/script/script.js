
$(document).ready(function(){
    $(".languages").click(function(){
        $val=($(this).attr("title"));
        $.ajax({
            type:"POST",
            url:"http://localhost:8080/mvc2_multilanguage/index.php",
            data:{language:$val},
            success:function(){
                location.reload();
            }
        });
    });
    $(".delete").on("click",function(){
   $value=$(this).closest('tr').find('td').html();
   if(confirm("Are you sure you want to delete this user from databse?")){
       $.ajax({
           type:"POST",
           url:"http://localhost:8080/mvc2_multilanguage/user_data/delete",
           data:{id:$value},
           success:function(dsa){
alert("Deleted");
           }
       });
   };
        });


});

