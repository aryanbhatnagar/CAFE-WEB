<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif;
            background-repeat: no-repeat;
    background-size: 100%;}
        button{padding : 25px}
        img{border-radius: 10px}
        .wrapper{height: 300px; width: 300px; display:inline-block ;padding: 10px;margin: 10px;border:solid black;border-width:thin;border-radius: 25px;align:center;background-image: url('data:image/jpeg;base64,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')}
    </style>
</head>
<script type="text/JavaScript">

function myFunction() {

    var a =document.getElementById("COFFEE").value;
    var b =document.getElementById("COOKIES").value;
    var c =document.getElementById("TEA").value;
    var d =document.getElementById("DONUTS").value;

}
</script>
<body background="https://images.pexels.com/photos/326279/pexels-photo-326279.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
    <div style="text-align: left; padding-left: 20px; padding-top:20px" class=button>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
</div>
<h1 class="my-5" style="text-align:left; color:white; padding: 20px">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to ARYAN'S CAFE.</h1>
<center>
<form action="confirm.html" method="get">
<div class="wrapper">
    <img src="https://images.pexels.com/photos/1170659/pexels-photo-1170659.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" width="175px" height="150px" >
    <h3>COFFEE</h3>
    <h3>Rs 50/-</h3>
    <h4>
    <input type="number" id="COFFEE" name="coffee" min="0" max="10">
</div>
<div class="wrapper">
    <img src="https://images.pexels.com/photos/2759135/pexels-photo-2759135.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" width="175px" height="150px" >
    <h3>COOKIES</h3>
    <h3>Rs 30/-</h3>
    <h4>
    <input type="number" id="COOKIES" name="cookies" min="0" max="10">
</div>
<div class="wrapper">
    <img src="https://images.pexels.com/photos/1417945/pexels-photo-1417945.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" width="175px" height="150px" >
    <h3>TEA</h3>
    <h3>Rs 50/-</h3>
    <h4>
    <input type="number" id="TEA" name="tea" min="0" max="10">
</div>
<div class="wrapper">
    <img src="https://images.pexels.com/photos/2955820/pexels-photo-2955820.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" width="175px" height="150px" >
    <h3>DONUTS</h3>
    <h3>Rs 70/-</h3>
    <h4>
    <input type="number" id="DONUTS" name="donuts" min="0" max="10">
</div>
<div>
    <input type="submit" class="btn btn-primary" value="Order">
</div>
</form>
</center>


    
</body>
</html>