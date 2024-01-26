<?php
require 'config.php';

if(isset($_POST["submit"]))
{
    $brand=$_POST["brand"];
    $product=$_POST["product"];
    $description=$_POST["description"];
    $price=$_POST["price"];
    if($_FILES["image"]["error"]==4)
    {
        echo
        "<script> alert('Image does not exists');</script>";
    }
    else{
        $fileName=$_FILES["image"]["name"];
        $fileSize=$_FILES["image"]["size"];
        $tmpName=$_FILES["image"]["tmp_name"];

        $validImageExtension=['jpg','jpeg','png'];
        $imageExtension=explode('.',$fileName);
        $imageExtension=strtolower(end($imageExtension));
        if(!in_array($imageExtension,$validImageExtension))
        {
            echo
            "<script> alert('invalid');</script>";
        }
        else if($fileSize > 10000000)
        {
            echo
            "<script> alert('image is too large');</script>";
        }
        else{
            $newImageName=uniqid();
            $newImageNew .='.' . $imageExtension;
            move_uploaded_file($tmpName, 'foundation/'. $newImageName);
            $query="INSERT INTO lipgloss VALUES('','$brand','$product','$description','$price','$newImageName')";
            mysqli_query($conn,$query);
            echo
            "<script> alert('Succesfully added'); document.location.href='lipgloss.php'</script>";
           
        }


    }


}
?>    

<!DOCTYPE html>
<html>
<head>
    <title>ADDPage</title>
    <link rel="stylesheet" type="text/css" href="styles.css" >
    <style>
        body {
    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    background-color: #f2f2f2;
   
    
}

.container {
    background-color: #ffffff;
    border-radius: 7px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
    margin-top: 100px;
   
}

h2 {
    margin-top: 0;
    font-size: 24px;
    color: black;
}

.input-container {
    margin: 15px 0;
    
}

input[type="text"],
input[type="email"],
input[type="password"], 
input[type="file"],
input[type="textarea"]{
    width: 80%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
input[type="submit"]
{
    padding-left:50px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

button {
    width: 80%;
    padding: 10px;
    background-color:rgb(248, 14, 182);
    border: none;
    border-radius: 5px;
    color: #fff;
    font-size: 18px;
    cursor: pointer;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}


button:hover {
    background-color: #f55bcc;
}

a {
    text-decoration: none;
    color: #007BFF;
}

a:hover {
    text-decoration: underline;
}
.center
{
    display: flex;
    justify-content: center; /* Horizontal centering */
    align-items: center;     /* Vertical centering */
    
    margin-bottom:80px;
}

    </style>
</head>
<nav class="main">
            
        <ul>
            <li><a href="buyer.php">Details of orders</a></li>&nbsp&nbsp&nbsp&nbsp
           
            <li><a href="viewproduct.php">View added products</a></li>
            <li><a href="product.php">Add products</a></li>
</ul>
</nav>
<body>
   
    <br>
    <div class="center">
    <div class="container">
        <form id="login-form" action="" method="post" autocomplete="off" enctype="multipart/form-data">
            <h2>Add products</h2>
            <div class="input-container">
                <input type="text" id="brand" name="brand" placeholder="Brand" value="" required>
            </div>
            
            <div class="input-container">
                <input type="text" id="product" name="product" placeholder="product" value="" required>
            </div>

            <div class="input-container">
                <input type="textarea" id="description" name="description" placeholder="productDescription"  value="" required>
            </div>

            <div class="input-container">
                <input type="text" id="price" name="price" placeholder="price"  value="" required>
            </div>

            <div class="input-container">
                <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png" value="">
            </div>

            
            
            <button type="submit" name="submit">Add</button>
        </form>
      
    </div>
</div>

</body>
</html>
