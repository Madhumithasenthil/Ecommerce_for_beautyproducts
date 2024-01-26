<?php
require 'config.php';

if(isset($_POST["addtocart"]))
{
    $brand=$_POST["brand"];
    $product=$_POST["product"];
    $description=$_POST["description"];
    $price=$_POST["price"];
    $newImageName=$_POST["foundation/"];
    $user=$_POST["useremail"];
    $check_sql = "SELECT * FROM cartitems WHERE descriptionn = '$description'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows > 0) {
        // Item is already in the cart, display alert or handle as needed
        echo
        "<script> alert('Already in cart'); document.location.href=''</script>";
    } 
    else {
    $query="INSERT INTO cartitems VALUES('','$brand','$product','$description','$price','$newImageName','$user')";
            mysqli_query($conn,$query);
            echo
            "<script> alert('Added to cart'); document.location.href=''</script>";
           
}
}

?>