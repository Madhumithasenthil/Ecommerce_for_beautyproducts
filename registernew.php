<?php
require 'config.php';
if(!empty($_SESSION['id']))
{
    header("Location:index.php");
}

if (isset($_POST['submit'])) 
{
    // Retrieve user input from the form
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password= $_POST["password"];
    $confirmpassword=$_POST["confirmpassword"];
    $duplicate=mysqli_query($conn,"SELECT * FROM tb_user WHERE username='$username' OR email='$email'");
    if(mysqli_num_rows($duplicate)>0)
    {
        echo
        "<script> alert('Username or Email has already taken');</script>";
    }
    else
    {
        if($password==$confirmpassword)
        {
            $query="INSERT INTO tb_user VALUES('','$username','$email','$password','$confirmpassword')";
            mysqli_query($conn,$query);
            echo
            "<script> alert('Registered Successfully'); document.location.href='login.php'</script>";
            

        }
        
        else
        {
            echo
            "<script> 
            alert('Make sure your enetring the same password as your confirm password');</script>";
        }
        
        
    }
}
?>








<!DOCTYPE html>
<html>
<head>
    <title>Register Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        body {
    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
}

.container {
    background-color: #ffffff;
    border-radius: 7px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
    margin-top: 100px;
    width:20%;
    height:400px;
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
input[type="password"] {
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
<body>
    <nav class="main">
            
        <ul>
            <li><a href="home.html">Home</a></li>&nbsp&nbsp&nbsp&nbsp
           
            <li><a href=" ">Makeup</a>
                <ul id="items1">
                    <li><a href="lipstick.html ">Lipstick</a></li>
                    <li><a href="lipgloss.html ">Lipgloss</a></li>
                    <li><a href="eyeliner.html ">Eyeliner</a></li>
                    <li><a href="maskara.html ">Maskara</a></li>
                    <li><a href="kajal.html ">kajal</a></li>
                    <li><a href="eshadow.html ">Eyeshadow</a></li>
                    <li><a href="primer.html" >Primers</a></li>
                    <li><a href="nailpolish.html ">Nailpolishes</a></li>
                </ul>
            </li>&nbsp&nbsp&nbsp&nbsp
            
           
            <li><a href=" ">Skincare</a>
                <ul id="items1">
                    <li><a href="bodywash.html ">Bodywashes</a></li>
                    <li><a href="facemask.html ">Facemasks</a></li>
                    <li><a href="facemoist.html ">Face moisturizers</a></li>
                    <li><a href="facewash.html ">Facewashes</a></li>
                    <li><a href="sunscreen.html ">Sunscreens</a></li>
                    
                </ul>
            </li>&nbsp&nbsp&nbsp&nbsp
            <li><a href=" ">Haircare</a></li>&nbsp&nbsp&nbsp&nbsp
            <li><a href=" ">Fragrances</a></li>&nbsp&nbsp&nbsp&nbsp
        </ul>
   

    </nav>
    <br>
    <div class="center">
   

    <div class="container">
        <form action="" method="post" autocomplete="off">
            <h2>Register</h2>
            <div class="input-container">
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="input-container">
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-container">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="input-container">
                <input type="password" id="confirmpassword" name="confirmpassword" placeholder="ConfirmPassword" required>
            </div>
            <button type="submit" name="submit" >Register</button>
        </form>
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
</div>
</body>
</html>
