<?php

    if(isset($_POST['submit']))
    {
     

        include_once('../models/config.php');

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $birthdate = $_POST['birthdate'];
     

        $result = mysqli_query($conect, "INSERT INTO users(name,password,email,gender,birthdate) 
        VALUES ('$name','$password','$email','$gender','$birthdate')");

        header('Location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLP SIGNUP</title>
    <style>
      body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, black, #530d63);
         
            color: white;
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid white;
        }
        fieldset:hover{
            border:3px solid purple;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
            color:#00c4cc;
        }
      
        a{
           
            text-decoration:none;
            color:white;
        }
        a:hover{
            text-decoration:none;
            color:purple;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: purple;
        }
        #birthdate{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-color: #00c4cc;          
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-color:purple;
        }
        p{
            color:#00c4cc;
        }
        label{
            color:#00c4cc;
        }
        
    </style>
</head>
<body>
    <a href="index.html">Back</a>
    <div class="box">
        <form action="signup.php" method="POST">
            <fieldset>
              <h2>PLP</h2>
                <div class="inputBox">
                    <input type="text" name="name" id="name" class="inputUser" required>
                    <label for="name" class="labelInput">name </label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="password" id="password" class="inputUser" required>
                    <label for="password" class="labelInput">password</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email / Username</label>
                </div>
                <br><br>
                
                <div class="inputBox">
                <input type="text" id="gender" name="gender" class="inputUser" required>
                <label for="gender" class="labelInput">Gender</label>
                </div>
                <br>
              
     
                <br><br>
                <label for="birthdate"><b>Birthday:</b></label><br><br>
                <input type="date" name="birthdate" id="birthdate" required>
                <br><br><br>
                
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>