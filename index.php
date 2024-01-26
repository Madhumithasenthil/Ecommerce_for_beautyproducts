<?php
require 'config.php';
if(!empty($_SESSION["id"]))
{
    $id=$_SESSION["id"];
    $result=mysqli_query($conn,"SELECT * FROM tb_user WHERE id=$id");
    $row=mysqli_fetch_assoc($result);
}
else{
    header("Location:login.php");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>logout</title>
    </head>
    <body>
       
        <h3>Welcome  <?php echo $row["username"];?></h3>
        
        </body>
    
</html>

