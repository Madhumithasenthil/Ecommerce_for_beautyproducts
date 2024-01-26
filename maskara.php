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
<script src="success.js"></script>
<script src="jquery.min.js"></script>
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
    <img style="width:90%;height:500px;"
        src="maskara\maslabel.jpg">
        <?php
    
        $rows=mysqli_query($conn,"SELECT * FROM maskara ORDER BY id");
        ?> 
        <div class="gallery">
       
        <?php foreach($rows as $row): ?>
    
        <div class="content">
            <img src="foundation/<?php echo $row['image']; ?>" width=200 title="<?php echo $row['image']; ?>">
            <h3><?php echo $row["brand"];?></h3>
            <p><?php echo $row["product"];?></p>
            <p><?php echo $row["description"];?></p>
            <h5><?php echo $row["price"];?></h5>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star "></i></li>
                
            </ul>
            
             <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="hidden" name="brand" value="<?php echo $row['brand']; ?>">
        <input type="hidden" name="product" value="<?php echo $row['product']; ?>">
        <input type="hidden" name="description" value="<?php echo $row['description']; ?>">
        <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
        <input type="hidden"  name="foundation/"  value="<?php echo $row['image']; ?>">
        <input type="hidden"  name="useremail"  value="<?php echo isset($_COOKIE['username']) ? htmlspecialchars($_COOKIE['username']) : ''; ?>">
        <!-- Add more hidden fields as needed -->
        <button type="submit" class="b" name="addtocart">Add to Cart</button>
    </form>
        </div>
       
       
        <?php endforeach; ?> 
        <?php


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
        </div> 
    <div class="gallery">
        
        
       
        
        <div class="content">
            <img src="maskara\m4.jpg">
            <h3>CLINIQUE</h3>
            <p>High impact maskara</p>
            <h5>Rs.500</h5>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star"></i></li>
               
            </ul>
            <button class="b" onclick= >Buy now</button>
        </div>
        
       
       
       
        <div class="content">
            <img src="maskara\m7.jpg">
            <h3>ESSENCE</h3>
            <p>I love Extreme maskara</p>
            <h5>Rs.500</h5>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star"></i></li>
               
            </ul>
            <button class="b" onclick=>Buy now</button>
        </div>
        <div class="content">
            <img src="maskara\m8.jpg">
            <h3>AVON</h3>
            <p>Supershock brights</p>
            <h5>Rs.500</h5>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star"></i></li>
               
            </ul>
            <button class="b" onclick=>Buy now</button>
        </div>
       
        

        <div class="content">
            <img src="maskara\m11.jpg">
            <h3>SHRYOAN</h3>
            <p>Perfect curl maskara</p>
            <h5>Rs.500</h5>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star"></i></li>
               
            </ul>
            <button class="b">Buy now</button>
        </div>

        <div class="content">
            <img src="maskara\m12.jpg">
            <h3>PLUM</h3>
            <p>EYE swear By Volume maskara</p>
            <h5>Rs.500</h5>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star"></i></li>
               
            </ul>
            <button class="b">Buy now</button>
        </div>

        

    </div>
    


    <script>
        // Get references to all elements with the class name "buyNowButton"
        const buyNowButtons = document.getElementsByClassName("b");

        // Loop through each button and change its text to "Add to Cart"
        for (const button of buyNowButtons) {
            button.textContent = "Add to Cart";
        }


    </script>
    
    
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