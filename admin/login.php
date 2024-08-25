<?php
if (isset($_POST['login'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];

   //admin username and password are here
   if ($username == "admin" && $password == "pass") {
    session_start();
    $_SESSION["user"] = "admin";
    //header("Location:index.php");
    header("Location: admin_index.php");
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #E3FEF7;
        }

        .container {
            max-width: 400px;
            margin: 200px auto;
            background: #77B0AA;
            padding: 50px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            color: #F5F7F8; /* Color for the heading */
            text-align: center; /* Align text to the center */
            font-weight: bold;
        }

        .form-field {
            margin-bottom: 20px;
        }

        .form-field input[type="text"],
        .form-field input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-field input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        .form-field input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>ADMIN LOGIN</h2>
        <form action="login.php" method="post">
            <div class="form-field">
                <input type="text" name="username" placeholder="Username">
            </div>
            <div class="form-field">
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="form-field">
                <input type="submit" value="Login" name="login">
            </div>
        </form>
    </div>
</body>
</html>
