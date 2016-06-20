<html>
    <head>
        <title>Practice</title>
    </head>
    <script type="text/javaScript" src="jquery-1.11.2.min.js"></script>
        <script>
         $(document).ready(function(){
             $("#submit_hide").click(function(){
                 $("#p11").hide();
                 
             });
            $("#submit_show").click(function(){
                
                $("#p11").css("background-color","blue").show();
            });
            $("#submit_show").click(function(){
                
                $("#p11").scroll("down");
            }); 
            $("h1").mousemove(function(){
                $(this).css("background-color","yello");
            });
            
         });
        </script>
    <body>
             
        <font color="red" size="10"><center>
          <p id="p11">Welcome <strong>to</strong> jQuery</p>
          <button id="submit_hide" value="Show" style="width: 100px;height: 40px;font-size: 20px;background-color: red;">Hide</button><br>
          <input type="submit" id="submit_show" value="Show" style="width: 100px;height: 40px;font-size: 20px;background-color: red">
    </center>         
             <h1>Welcome To</h1>
             
        
    </body>
</html>
<?php


?>
