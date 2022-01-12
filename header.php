<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clothing store</title>

    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 
    <!--custom css file link-->
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    
<!--header section start-->

<header class="header">

    <a href="#" class="logo">
        <img src="images/Logo.png" alt="">
    </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#offer">offer</a>
        <a href="#women">women</a>
        <a href="#men">men</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>

    </nav>
     
     <div class="icons">
         <div class="fas fa-search" id="search-btn"></div>
         <div class="fas fa-shopping-cart" id="cart-btn"></div>
         <div class="fas fa-bars" id="menu-btn"></div>
     </div>

     <div class="search-from">
         <input type="search" id="search-box" placeholder="search here">
         <label for="search-box" class="fas fa-search"></label>
     </div>

     <div class="cart-items-container">

         
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/1.jpg" alt="">
            <div class="content">
                <h3>cart item 01</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/3.jpg" alt="">
            <div class="content">
                <h3>cart item 02</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/2.jpg" alt="">
            <div class="content">
                <h3>cart item 03</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <a href="#" class="btn">checkout now</a>
    </div>

  <?php
  require('database/controller.php');
  ?>
</header>
<!--hearder section end-->