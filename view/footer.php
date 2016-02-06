</section>
<footer>
  
    <script>
        $(document).ready(function(){
$(".languages").click(function(){
    $val=($(this).attr("title"));
    $.ajax({
        type:"POST",
        url:"http://localhost/project_mvc/index.php",
        data:{language:$val},
        success:function(){
         location.reload();
        }
    });
});
        }); 
    </script>
    <p>&copy; Designed  by </p>
</footer>