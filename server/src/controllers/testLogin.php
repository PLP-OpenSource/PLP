<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        // Acessa
        include_once('../models/config.php');
        $email = $_POST['email'];
        $password = $_POST['password'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('password: ' . $password);

        $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";

        $result = $conect->query($sql);

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            header('Location: ../views/login.php');
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('Location: ../views/../models/system.php');
        }
    }
    else
    {
       
        header('Location: ../views/login.php');
    }
?>