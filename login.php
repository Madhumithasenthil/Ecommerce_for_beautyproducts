<?php
require 'config.php';
if(!empty($_SESSION['id']))
{
    header("Location:login.php");
}
if(isset($_POST["submit"]))
{
    $usernameemail=$_POST["usernameemail"];
    $password=$_POST["password"];
    $result=mysqli_query($conn,"SELECT * FROM tb_user WHERE username='$usernameemail' OR email='$usernameemail' ");
    $row=mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)>0)
    {
        if($password==$row["password"])
        {
            $_SESSION["login"]=true;
            $_SESSION["id"]=$row["id"];
            setcookie("username",$usernameemail,time()+36000);
            
            echo
            "<script> alert('logged in successfully'); document.location.href='home.php'</script>";
        }
        else
        {
            echo
            "<script>alert('Wrong password');</script>";
        }
    }
    else{
        echo
            "<script>alert('User not Registered');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>loginPage</title>
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
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
    margin-top: 100px;
    width:20%;
    height:250px;
   
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
        <form id="login-form" action="" method="post">
            <h2>Login</h2>
            <div class="input-container">
                <input type="text" id="usernameemail" name="usernameemail" placeholder="Username or Email" required>
            </div>
            
            <div class="input-container">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" name="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="registernew.php">Register now</a></p>
    </div>
</div>
</body>
</html>
