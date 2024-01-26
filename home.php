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

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        THE FACE SHOP
    </title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/1165876da6.js" crossorigin="anonymous"></script>
      <!--FONT AWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
    
    <script src="store.js" async></script>
    <style>
        body
        {
            overflow-x: hidden;
        }
        .text-container {
    position: relative;
    display: inline-block;
}

.animated-text {
    display: inline-block;
    position: relative;
    transition: color 0.3s;
}

.animated-text::after {
    content: "";
    position: absolute;
    width: 0;
    height: 3px;
    background-color: #141415; /* Change to the desired line color */
    left: 0;
    bottom: 0;
    transition: width 0.3s;
}

.animated-text:hover {
    color: #131314; /* Change to the desired text color */
}

.animated-text:hover::after {
    width: 100%;
}
.others
{
    display: inline;
    margin-right: 2px;
    text-decoration: none;
}
.others:hover{
    text-decoration: underline;
    text-decoration-color:black;
    
}
.arrivals
{
    text-decoration: none;
}
.arrivals:hover{
    text-decoration: underline;
    text-decoration-color:black;
    
}





    </style>
    








</head>

<body>

    <nav class="main">

        <ul>
            <li><a href="home.php">Home</a></li>

            <li><a href=" ">Makeup</a>
                <ul id="items1">
                    <li><a href="lipstick.php ">Lipstick</a></li>
                    <li><a href="lipgloss.php ">Lipgloss</a></li>
                    <li><a href="eyeliner.php ">Eyeliner</a></li>
                    <li><a href="maskara.php ">Maskara</a></li>
                    <li><a href="kajal.php ">kajal</a></li>
                    <li><a href="eshadow.php ">Eyeshadow</a></li>
                    <li><a href="primer.php">Primers</a></li>
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

                </ul>
            </li>
            <li><a href=" ">Haircare</a></li>
            <li><a href=" ">Fragrances</a></li>
           
        
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
 




    <h1>&nbsp;M E D A L&nbsp; W O R T H Y&nbsp; B R A N D S&nbsp; T O&nbsp; G R A B</h1><br>
  <div class="models" style="padding-left:110px;">

    <div class="video-container" style="display: flex;align-items: center;">
        <h2 class="animated-text" style="color: rgb(236, 10, 85);margin-right: 80px;padding-left: 60px;">&nbsp;&nbsp;&nbsp;M A Y B E L L I N E&nbsp; N E W Y O R K</h2>
        <video controls width="800" height="auto" loop autoplay muted  id="myVideo">
            <source
                src="x2mate.com-Lash Sensational Sky High Mascara _ Maybelline New York-(1080p).mp4"
                type="video/mp4">



        </video>
        
       
            
    </div>
       
        <div class="video-container" style="display: flex;align-items: center;">
            <video controls width="800" height="auto" loop autoplay muted  id="myVideo" style="padding-left: 80px;">
                <source
                    src="Lakmé Absolute Matte Melt - Looks like Matte Feels Like Love.mp4"
                    type="video/mp4">
    
    
    
            </video>
            <h2 class="animated-text" style="color: rgb(236, 10, 85);margin-right: 80px;">&nbsp;&nbsp;&nbsp;L A K M E</h2>
            
           
                
            </div>
             
            <div>
                <h1 style="text-align: center;">O T H E R&nbsp;  B R A N D S</h1><br>
                <a href=lipstick.php><h2 class="others" style="color: rgb(236, 10, 85);padding-left: 60px;">&nbsp;&nbsp;&nbsp;D A Z Z L E R</h2></a>
                <h2 class="others" style="color: rgb(236, 10, 85);padding-left: 60px;">D I O R</h2>
                <h2 class="others" style="color: rgb(236, 10, 85);padding-left: 60px;">M A M A E A R T H</h2>
                <h2 class="others" style="color: rgb(236, 10, 85);padding-left: 60px;">N I V E A</h2>
                <h2 class="others" style="color: rgb(236, 10, 85);padding-left: 60px;">O L A Y</h2>
                <h2 class="others" style="color: rgb(236, 10, 85);padding-left: 60px;">P L U M</h2>
                <h2 class="others" style="color: rgb(236, 10, 85);padding-left: 60px;">A Q U A L O G I C A</h2>


            </div>
    </div> 
    <br>
    <a href="viewproduct.php"><h2 class="arrivals" style="padding-left:750px;">NEW ARRIVALS</h2></a>
    <br>
    <br>
 


<footer>
<div class="footer" >
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