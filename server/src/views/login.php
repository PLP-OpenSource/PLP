<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
    <title>Login</title>
    <style>
        body{
            font-family: 'Kdam Thmor Pro', sans-serif;
    -webkit-font-smoothing: antialiased !important;
    background: linear-gradient(to right, black, #530d63);
        }
        a{
            text-decoration:none;
            color:white;
        }
        a:hover{
            text-decoration:none;
            color:#530d63;
        }
        div{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-color: black;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        .inputSubmit:hover{
            background-color: purple;
            cursor: pointer;
        }
    </style>
</head>
<body>
   
         <a href="index.html">Back</a>
   
   
  </div>
    <div>
        <h1>PLP LOGIN</h1>
        <form action="../controllers/testLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="password" placeholder="password">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Login">
        </form>
    </div>
    <br><br><br>
    <a href="signup.php">SignUp</a>
</body>
</html>