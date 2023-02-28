<?php
    require_once('db.php');
    if (isset($_POST['enviar']))
        $email=$_POST['email'];
        $contraseña=$_POST['contra'];
        
        $query= "INSERT INTO sesiones (email,contraseña) values ('$email','$contraseña')";
        $result= $conn->query($query);
        
        session_start();
        $_SESSION['token']='user';
        header('location:login_valido.html')
?>

