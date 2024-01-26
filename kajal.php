<html>

<head>
    <title>lipsticks</title>
    <style>
        body{
            overflow-x: hidden;
        }
        
    </style>
    
</head>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<script src="https://kit.fontawesome.com/1165876da6.js" crossorigin="anonymous"></script>
<script src="jquery.min.js"></script>
      <!--FONT AWESOME-->

<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
    
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<body>
    <script src="store.js"></script>
    <nav class="main">

        <ul>
            <li><a href="home.php ">Home</a></li>

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
            </li>


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
    <img style="width:90%;height:500px;" src="kajal\label.jpg">
    <div class="gallery">
        <div class="content">
            <img src="kajal\k1.jpg">
            <h3>LORD AND BERRY</h3>
            <p>Water proof Kajal</p>
            <h5>Rs.800</h5>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star "></i></li>

            </ul>
            <button  onclick="addToCart()" class="b" >Buy now</button>
        </div>

        <div class="content">
            <img src="kajal\k2.jpg">
            <h3>LAKME</h3>
            <p>kajal which Stays 24 hours(Pack of 2)</p>
            <h5>Rs.700</h5>
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
            <img src="kajal\k3.jpg">
            <h3>SOULTREE</h3>
            <p>Ayurvedic kajal</p>
            <h5>Rs.650</h5>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>

            </ul>
            <button class="b">Buy now</button>
        </div>

        <div class="content">
            <img src="kajal\k4.jpg">
            <h3>SHISEIDO</h3>
            <p>Brown KajalInk Artist</p>
            <h5>Rs.500</h5>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star"></i></li>

            </ul>
            <button class="b" >Buy now</button>
        </div>

        <div class="content">
            <img src="kajal\k5.jpg">
            <h3>Mars</h3>
            <p>Superliner kajal</p>
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
        <br>
        <div class="content">
            <img src="kajal\k6.jpg">
            <h3>BENECOS</h3>
            <p>Natural Kajal with Aloe</p>
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
            <img src="kajal\k7.jpg">
            <h3>TRACTA</h3>
            <p>Snow White</p>
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
            <img src="kajal\k8.jpg">
            <h3>MAC</h3>
            <p>High Intense Kajal</p>
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
            <img src="kajal\k9.jpg">
            <h3>FACES CANADA</h3>
            <p>Magnet Eyes</p>
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
            <img src="kajal\k10.jpg">
            <h3>MAMA EARTH</h3>
            <p>With Oliveoil</p>
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
            <img src="kajal\k11.jpg">
            <h3>COLOSSAL</h3>
            <p>Super black</p>
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
            <img src="kajal\k12.jpg">
            <h3>FACES CANADA</h3>
            <p>SmudgeProof|WaterProof</p>
           
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