<?php
require 'config.php';

?>

<html>
<head>
    <title>View product</title>
    <style>
        body{
            overflow-x: hidden;
        }
        
    </style>

<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<script src="https://kit.fontawesome.com/1165876da6.js" crossorigin="anonymous"></script>
      <!--FONT AWESOME-->

<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>

<body>
<nav class="main">
            
            <ul>
                <li><a href="buyer.php">Details of orders</a></li>&nbsp&nbsp&nbsp&nbsp
               
                <li><a href="viewproduct.php">View added products</a></li>
                <li><a href="product.php">Add products</a></li>
    </ul>
    </nav>
    <br>
    
    <?php
        $rows=mysqli_query($conn,"SELECT * FROM tb_product ORDER BY id");
        ?> 
        <div class="gallery">
       
        <?php foreach($rows as $row): ?>
    
        <div class="content">
            <img src="foundation/<?php echo $row['image']; ?>" width=200 title="<?php echo $row['image']; ?>">
            <h3><?php echo $row["brand"];?></h3>
            <p><?php echo $row["product"];?></p>
            <p><?php echo $row["description"];?></p>
            <h5><?php echo $row["price"];?></h5>
            
            <form method="post" action=""> <!-- Assuming delete functionality is in delete_product.php -->
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <button type="submit" class="b" name="delete">Delete</button>
    </form>
        </div>
       
       
        <?php endforeach; ?> 
        </div> 
    <br>
    <?php
  
 
// Check if the form is submitted and the delete button is clicked
if (isset($_POST['delete'])) {
    
    // Get the product ID from the hidden input field
    $productId = $_POST['id'];

    // Assuming $conn is your mysqli connection object
    // Replace 'your_table_name' with the actual name of your table
    $sql = "DELETE FROM tb_product WHERE id = ?";

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare($sql);

    // Bind the parameter
    $stmt->bind_param('i', $productId); // 'i' represents integer, adjust if your ID is of a different type

    // Check if the query executed successfully
    if ($stmt->execute()) {
        "<script>alert('Product deleted Succesfully');</script>";
        // Redirect to a page after successful deletion
        header("Location: viewproduct.php"); // Change 'products.php' to your actual product listing page
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


 
    
    
      
   
    
  
    <!--<footer>
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
        </footer>-->


</body>

</html>