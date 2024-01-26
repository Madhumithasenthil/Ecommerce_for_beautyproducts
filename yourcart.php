<?php
require 'config.php';

?>

<html>
<head>
    <title>Maskara</title>
    <style>
        body{
            overflow-x: hidden;
        }
        
    </style>
</head>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<script src="https://kit.fontawesome.com/1165876da6.js" crossorigin="anonymous"></script>
      <!--FONT AWESOME-->

<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<body>
    <nav class="main">

        <ul>
            <li><a href="home.php">Home</a></li>&nbsp&nbsp&nbsp&nbsp

            <li><a href=" ">Makeup</a>
                <ul id="items1">
                    <li><a href="lipstick.php ">Lipstick</a></li>
                    <li><a href="lipgloss.php ">Lipgloss</a></li>
                    <li><a href="eyeliner.php ">Eyeliner</a></li>
                    <li><a href="maskara.php ">Maskara</a></li>
                    <li><a href="kajal.php ">kajal</a></li>
                    <li><a href="eshadow.php ">Eyeshadow</a></li>
                    <li><a href="primer.php ">Primers</a></li>
                    <li><a href="nailpolish.php ">Nailpolishes</a></li>
                </ul>
            </li>&nbsp&nbsp&nbsp&nbsp


            <li><a href=" ">Skincare</a>
                <ul id="items1">
                    <li><a href="bodywash.php ">Bodywashes</a></li>
                    <li><a href="facemask.php ">Facemasks</a></li>
                    <li><a href="facemoist.php ">Face moisturizers</a></li>
                    <li><a href="facewash.php ">Facewashes</a></li>
                    <li><a href="sunscreen.php ">Sunscreens</a></li>
                    
                </ul></li>&nbsp&nbsp&nbsp&nbsp</li>&nbsp&nbsp&nbsp&nbsp
            <li><a href=" ">Haircare</a></li>&nbsp&nbsp&nbsp&nbsp
            <li><a href=" ">Fragrances</a></li>&nbsp&nbsp&nbsp&nbsp
        
            <li><h3 style="padding-left:500px;padding-top:15px;">Welcome  <?php 
   if(isset($_COOKIE['username']))
   {
       echo $_COOKIE['username'];
   }
   else{
       echo "login";
   };?><h3></li>
                

                
        </ul>





    </nav>
    
    
   
   
    
    <a  style=" position: absolute;top: 0;right: 0;padding: 10px;" href="logout.php">Logout</a>
    <br>
    
    
    <a href="yourcart.php">
        <!-- Specify the image source using the src attribute -->
        <img src="carticon.jpg" style="height:50px;width:auto;float:right;" alt="Clickable Image">
    </a>
    <br>
    
    <?php
    if (isset($_COOKIE['username']))
    {
     
        $username = $_COOKIE['username'];
        $rows=mysqli_query($conn,"SELECT * FROM cartitems WHERE user = '$username' ORDER BY id");
    }
    else{
        "<script>alert('Please login or register to continue');</script>";
         header("Location:login.php"); 
    }
    ?>
        
        <div class="gallery">
       
        <?php foreach($rows as $row): ?>
    
        <div class="content">
            <img src="foundation/<?php echo $row['image']; ?>" width=200 title="<?php echo $row['image']; ?>">
            <h3><?php echo $row["brand"];?></h3>
            <p><?php echo $row["product"];?></p>
            <p><?php echo $row["descriptionn"];?></p>
            <h5><?php echo $row["price"];?></h5>
            
            <form method="post" action=""> <!-- Assuming delete functionality is in delete_product.php -->
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <button type="submit" class="b" name="delete">Remove from Cart</button>
    </form>
        </div>
       
       
        <?php endforeach; ?> 
       
        </div> 
        <div>
            <form  method="post" action="" >
            <button style="background-color:yellow;color:black;" type="submit" name="buynow"  onclick="showAlert()">BUY NOW</button>
        </form>
        </div>
       

        <script>
        function showAlert() {
            alert('Your order has been successfully processed. Thank you for shopping with us!');
        }
    </script>  
        
    <br>

    <?php
  
 
// Check if the form is submitted and the delete button is clicked
if (isset($_POST['delete'])) {
    
    // Get the product ID from the hidden input field
    $productId = $_POST['id'];

    // Assuming $conn is your mysqli connection object
    // Replace 'your_table_name' with the actual name of your table
    $sql = "DELETE FROM cartitems WHERE id = ?";

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare($sql);

    // Bind the parameter
    $stmt->bind_param('i', $productId); // 'i' represents integer, adjust if your ID is of a different type

    // Check if the query executed successfully
    if ($stmt->execute()) {
        "<script>alert('Product deleted Succesfully');</script>";
        // Redirect to a page after successful deletion
        //header("Location:yourcart.php"); // Change 'products.php' to your actual product listing page
        exit();
    } else {
        echo "Error deleting product: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>



 
    
    
        
   
    
  
    <footer>
        <div class="footer">
        <div class="row">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        </div>
        
        <div class="row">
        <ul>
        <li><a href="#">Contact us</a></li>
        <li><a href="#">Our Services</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms & Conditions</a></li>
        <li><a href="#">Career</a></li>
        </ul>
        </div>
        
        
        </div>
        </footer>


</body>

</html>