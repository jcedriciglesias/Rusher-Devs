<?php
include '..\inc\connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\css\menu.css">
    <title>  Menu | Mihanz Catering  </title>
</head>
<nav id="home" >
        <a href="..\index.php"><img src="..\images\mihanz_Logo.jpg" alt="logo" id="logo" title="Mihanz Catering"> </a> 

        <ul>
            <li><a href="#" id="active">Menu</a></li>
            <li><a href="#tap">Account</a></li>
            <li><a href="#">Info</a></li>
            <li><a href="">Log In</a></li>


        </ul>
    </nav> 
<div class="option">
<ul>
    <li><a href="#Pork">Pork</a></li>
    <li><a href="#Beef">Beef</a></li>
    <li><a href="#Poultry">Poultry</a></li>
    <li><a href="#Fish">Fish/SeaFood</a></li>
    <li><a href="#Pasta">Pasta </a></li>
</ul>
</div>
<body id="Pork">
    <div class="menucon">
        
        <div  id="Prk" class="menu-option-container">
            <div class="menu-title"> <h1 >Pork</h1> </div>
            <div class="item-con">
                <div class="menu-item">
                    <img src="..\images\mihanz_Logo.jpg" alt="" class="item-picture">
                    <h1 class="item-name">ITEM NAME</h1><br>
                    <p>ITEM PRICE</p>

                </div>
                <div class="menu-item">
                    <img src="..\images\mihanz_Logo.jpg" alt="" class="item-picture">
                    <h1 class="item-name">ITEM NAME</h1><br>
                    <p>ITEM PRICE</p>

                </div>
                <div class="menu-item">
                    <img src="..\images\mihanz_Logo.jpg" alt="" class="item-picture">
                    <h1 class="item-name">ITEM NAME</h1><br>
                    <p>ITEM PRICE</p>

                </div>
                <div class="menu-item">
                    <img src="..\images\mihanz_Logo.jpg" alt="" class="item-picture">
                    <h1 class="item-name">ITEM NAME</h1><br>
                    <p>ITEM PRICE</p>

                </div>
                <div class="menu-item">
                    <img src="..\images\mihanz_Logo.jpg" alt="" class="item-picture">
                    <h1 class="item-name">ITEM NAME</h1><br>
                    <p>ITEM PRICE</p>

                </div>
                <div class="menu-item">
                    <img src="..\images\mihanz_Logo.jpg" alt="" class="item-picture">
                    <h1 class="item-name">ITEM NAME</h1><br>
                    <p>ITEM PRICE</p>

                </div>




            </div>
            
        </div>
        <div  id="Beef" class="menu-option-container">
        <div class="menu-title"> <h1 >Beef</h1> </div>
            <div class="item-con" id="sh">
                <div class="menu-item">
                    <img src="..\images\mihanz_Logo.jpg" alt="" class="item-picture">
                    <h1 class="item-name">ITEM NAME</h1><br>
                    <p>ITEM PRICE</p>

                </div>
            
        </div>
        <div id="Poultry" class="menu-option-container">
            <h1>Poultry</h1>
        </div>
        <div id="Fish" class="menu-option-container">
            <h1>Fish/SeaFood</h1>
        </div>
        <div id="Pasta" class="menu-option-container">
            <h1>Pasta</h1>
        </div>
    </div>
</body>

<footer id="footer">
        <div id="foot-con">
        <center> 
        <img src="..\images\mihanz_Logo.jpg" alt="logo" id="flogo" title="Mihanz Catering">
        <h1 id="fsname">Mihanz Cataring</h1>
        </center>
        <br>
        <address></address>
        <p>Copyright &copy; 2012 Minhazcatering. All rights reserved.</p>
        </div>
       
</footer>
</html>