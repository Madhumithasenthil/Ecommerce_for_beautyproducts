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
 <?php
        $rows=mysqli_query($conn,"SELECT * FROM cartitems ORDER BY id");
        ?> 
        <div class="gallery">
       
        <?php foreach($rows as $row): ?>

    <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
        
            <tr>
            <td><img src="foundation/<?php echo $row['image']; ?>" width=200 title="<?php echo $row['image']; ?>"></td>
            <td><h3><?php echo $row["brand"];?></h3></td>
            <td><p><?php echo $row["product"];?></p></td>
            <td><p><?php echo $row["descriptionn"];?></p></td>
            <td><h5><?php echo $row["price"];?></h5></td>
            <td><h5>FROM : <?php echo $row["user"];?></h5></td>
           <!-- Assuming delete functionality is in delete_product.php -->
           <form action="" method="post">
        
            <td><button style="font-size: 12px;padding: 5px 10px;border: 1px solid #ccc;border-radius: 3px;background-color:yellow;color: #333;"   type="submit" class="b" name="delete">Confirm order</button></td>
        </form>
 
          <?php endforeach; ?> 
          <tr>
        </table>
       
       <?php
        if (isset($_POST['delete'])) 
        {
            echo
            "<script> alert('Order confirmed'); document.location.href='buyer.php'</script>";
        }
        ?>
        

    </body>
    </html>