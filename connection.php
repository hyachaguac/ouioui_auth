<?php 
$email = $_POST['email'];
$password = $_POST['password'];

$con = mysqli_connect("auth_db:3306","root","auth2021","auth_db");
$query = "select * from user_credentials where user_email='".$email."' and user_password='".$password."'";

if($con){
    $result = mysqli_query($con, $query);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $email = $row['user_email'];
            $password = $row['user_password'];

            echo '<!DOCTYPE html>
            <html lang="es">
            
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=1, initial-scale=1.0">
                <title>oui oui</title>
                <link rel="stylesheet" href="style_home.css">
                <link rel="shortcut icon" href="ouioui_logo_2.png" type="image/x-icon">
            </head>
            
            <body>
                <header>
                    <div class="contentheader">
                        <img class="imagenh" src="ouioui_logo_2.png">
                        <dir></dir>
                        <nav>
                            <ul class="menu">
                                <li><a href="#.html">Chats</a></li>
                                <li><a href="#.html">Profile</a></li>
                                <li><a href="#.html">States</a></li>
                                <li><a href="#.html">Contacts</a></li>
                            </ul>
                        </nav>
                </header>
            
                <div class="formulario">
                    <form action="">
                        <div class="user">
                            <img src="ouioui_login_avatar.png">
                            <h1>name'.$name.'</h1>
                        </div>
                        <div class="infouser">
			    <h2>Email: '.$email.'</h2><br>
                            <h2>Password: '.$password.'</h2><br>
                            
                            <!-- <h2>UserName: '.$username.'</h2><br> -->
                        </div>
                    </form>
                </div>
            
                <footer>
                    <div class="conteninfo">
                        <h2>oui oui application</h2></br>
            <h4>By Team 2B - Software Architecture 2021 - II | Universidad Nacional de Colombia </h4>
            
                    </div>
                </footer>
            </body>
            
            </html>';
        }
      } else {
        echo'<script type="text/javascript">
        alert("Usuario o contraseña incorrectos");
        window.location.href="index.html";
        </script>';
      }

    mysqli_close($con);
}else{
    echo "No connection..";
}

?>
