<html>

<head>
    <title>Eyeshadows</title>
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
            <li><a href="home.php ">Home</a></li>

            <li><a href=" ">Makeup</a>
                <ul id="items1">

                    <li><a href="lipstick.php ">Lipstick</a></li>
                    <li><a href="lipgloss.php ">Lipgloss</a></li>

                    <li><a href="eyeliner.php ">Eyeliner</a></li>
                    <li><a href="maskara.php ">Maskara</a></li>
                    <li><a href="kajal.php ">kajal</a></li>
                    <li><a href="eshadow.php ">Eyeshadows</a></li>

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
                    
                </ul></li>&nbsp&nbsp&nbsp&nbsp
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


   
    
    
    
 
    
    <div class="gallery">
        <div class="content">
            <img src="eshadow\es1.jpg">
            <h3>MAYBELLINE</h3>
            <p>Eyeshadow(12 shades)</p>
            <h5>Rs.2800</h5>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star "></i></li>

            </ul>
            <button   class="b">Buy now</button>
        </div>
  

    

    

        <div class="content">
            <img src="eshadow\es2.jpg">
            <h3>SUGAR POP</h3>
            <p>Pastel Eyeshadows</p>
            <h5>Rs.1700</h5>
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
            <img src="eshadow\es3.jpg">
            <h3>DAZZLER</h3>
            <p>Eyeshadow cum blush</p>
            <h5>Rs.1650</h5>
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
            <img src="eshadow\es4.jpg">
            <h3>SEATTLE</h3>
            <p>GentleAura Eyeshadow</p>
            <h5>Rs.1500</h5>
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
            <img src="eshadow\es5.jpg">
            <h3>SIVZZ</h3>
            <p>Eyeshadow(10 Shades)</p>
            <h5>Rs.1000</h5>
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
            <img src="eshadow\es6.jpg">
            <h3>INFITELOVE</h3>
            <p>We are colours Palette Eyeshadow</p>
            <h5>Rs.999</h5>
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
            <img src="eshadow\es7.jpg">
            <h3>MAVERICK</h3>
            <p>Eyeshadow</p>
            <h5>Rs.850</h5>
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
            <img src="eshadow\es8.jpg">
            <h3>DIOR</h3>
            <p>Heart Poppins Eyeshadow</p>
            <h5>Rs.1800</h5>
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
            <img src="eshadow\es9.jpg">
            <h3>HAMELEON</h3>
            <p>Shades of Pink and sandal</p>
            <h5>Rs.1500</h5>
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
            <img src="eshadow\es10.jpg">
            <h3>HAMELEON</h3>
            <p>Peacock shades</p>
            <h5>Rs.2000</h5>
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
            <img src="eshadow\es11.jpg">
            <h3>FOCAL</h3>
            <p>Loose Pigment-10 different shades</p>
            <h5>Rs.1700</h5>
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
            <img src="eshadow\es12.jpg">
            <h3>STAR DUST</h3>
            <p>Red love Shades</p>
            <h5>Rs.1100</h5>
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