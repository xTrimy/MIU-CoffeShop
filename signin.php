<?php
include("includes/head.php");

if (isset($_POST['signin'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    User::Login($username,$password);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | MIU Coffee Shop</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Lato:wght@700&family=Mate+SC&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="layout/css/master.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div id="header">
        <div class="logo">
            <img src="layout/images/logo.jfif" alt="">
        </div>
        <div class="nav flex">
            <div class="item">Home</div>
            <div class="item">Our Menu</div>
            <div class="item">Order History</div>
            <div class="item">Login</div>
            <div class="item">Sign Up</div>
        </div>
    </div>

    <div class="wrapper auth">
        <div class="flex align-center justify-center">
            <form method="POST" action="signin.php">
                <label for="username">Username</label><br>
                <input type="text" id="username" name="username"><br>
                <label for="password">Password</label><br>
                <input type="password" id="password" name="password">
                <br>
                <input type="submit" value="Login" class="xbutton" name="signin">
            </form>
        </div>
    </div>
</body>
</html>