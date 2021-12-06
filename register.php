<?php

//include("connection.php");
$con = mysqli_connect("auth_db:3306","root","auth2021","auth_db");

if(isset($_POST[register])){
    if(strlen($_POST['user_email']) >= 1 && strlen($_POST['user_password']) >= 1){
        $user_email =trim($_POST['user_email']);
        $user_password =trim($_POST['user_password']);
        $query = "INSERT INTO user_credentials(user_email, user_password) values('$user_email','$user_password')";
        $result = mysqli_query($con, $query);
        if($result){
            echo'<script type="text/javascript">
            alert("Registro Correcto");
            window.location.href="index.html";
            </script>';
        }else{
            echo'<script type="text/javascript">
            alert("Algo salio mal..");
            window.location.href="register.html";
            </script>';
        }
    }else{
        echo'<script type="text/javascript">
        alert("Complete todos los campos..");
        window.location.href="register.html";
        </script>';
    }
}




?>
