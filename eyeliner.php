<html>

<head>
    <title>lipsticks</title>

<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
   /*$(document).ready(function(){
  $("#b1").click(function(){
    $("#hi").hide();
  });
});*/
 // Get a reference to the button element
 

       

</script>
</head>

<body>
    
    <nav class="main">

        <ul>
            <li><a href="home.php ">Home</a></li>&nbsp&nbsp&nbsp&nbsp

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
        src="eye\eyelabel.jpg">
    <div class="gallery">
        <div class="content">
            <img src="eye\el1.jpg">
            <h3>MARC JACOBS</h3>
            <p>Black liner</p>
            <h5>Rs.800</h5>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star "></i></li>
                
            </ul>
            <button class="b">Buy now</button>
            
        </div>

        <div class="content">
            <img src="eye\el2.jpg">
            <h3>Dior</h3>
            <p>Mark liner</p>
            <h5>Rs.700</h5>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star"></i></li>
                
            </ul>
            <button class="b" id="b1">Buy now</button>
            
        </div>
        <div class="content">
            <img src="eye\el3.jpg">
            <h3>NYX</h3>
            <p>Eyeliner</p>
            <h5>Rs.650</h5>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                
            </ul>
            <button class="b" id="b2">Buy now</button>
        </div>

        <div class="content">
            <img src="eye\el4.jpg">
            <h3>Daniel's</h3>
            <p>6 markliners(Pack of 10)</p>
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
        
        <div class="content">
            <img src="eye\el5.jpg">
            <h3>T&G</h3>
            <p>Eyeliner</p>
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
            <img src="eye\el6.jpg">
            <h3>Queens Kingdom</h3>
            <p>Intense black</p>
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
            <img src="eye\el7.jpg">
            <h3>DelineDor</h3>
            <p>Ultra black</p>
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
            <img src="eye\el8.jpg">
            <h3>L'oreal</h3>
            <p>Voluminous lash paradise</p>
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
            <img src="eye\el9.jpg">
            <h3>Hour glass</h3>
            <p>Charcoal black</p>
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
            <img src="eye\el10.jpg">
            <h3>Cat Eye's</h3>
            <p>C/R Eyeliner</p>
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
            <img src="eye\el11.jpg">
            <h3>VIVID Matte</h3>
            <p>White Eyeliner</p>
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
            <img src="eye\el12.jpg">
            <h3>NYX</h3>
            <p>Epic Ink Liner</p>
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