<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oui oui | Sign up</title>
    <link rel="stylesheet" href="style_register.css">
    <link rel="shortcut icon" href="ouioui_logo_2.png" type="image/x-icon">
</head>
<body>
    <header>
        <div class="contentheader">
<!--    <img class="imagenh" src="ouioui_logo_2.png">
            <dir></dir>
            <nav>
                <ul class="menu">
                    <li><a href="#.html">Chats</a></li>
                    <li><a href="#.html">Profile</a></li>
                    <li><a href="#.html">States</a></li>
                    <li><a href="#.html">Contacts</a></li>
                </ul>
            </nav>
            
-->
        </div>
        <div class="wave">
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#126b81" fill-opacity="1"
                    d="M0,288L48,288C96,288,192,288,288,256C384,224,480,160,576,133.3C672,107,768,117,864,138.7C960,160,1056,192,1152,170.7C1248,149,1344,75,1392,37.3L1440,0L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
                </path>
            </svg>
        </div>
    </header>

    <div class="formulario">
        <form method="POST">
            <h1>Sign Up</h1>
            <!--<label>name</label>
            <input type="text" required name="name">-->

            <label>email</label>
            <input type="email" name="user_email">
            
            <label>password</label>
            <input type="password" name="user_password">

            <!--<label>Upload a picture</label>
            <input type="file" required name="pic_profile">-->            

            <div class="botones">
                <input type="submit" name ="register" value="Sign up" class="btn enviar">
                <a class="btn login" href="index.html">Log in</a>
            </div>
        </form>
	<?php
		include("register.php");
	?>
        <img src="ouioui_logo_2.png" width="50" height="300" alt="ouioui_logo" >
    </div>

    <footer>
        <div class="conteninfo">
            <h2>oui oui application</h2></br>
            <h4>By Team 2B - Software Architecture 2021 - II | Universidad Nacional de Colombia </h4>           
        </div>
    </footer>
    
</body>
</html>
