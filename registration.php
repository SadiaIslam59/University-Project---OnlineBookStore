<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #E3FEF7;
        }
        .container {
            max-width: 400px;
            margin: 200px auto;
            padding: 50px;
            background-color: #77B0AA;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container h2 {
            color: #F5F7F8;
            text-align: center;
            font-weight: bold;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            color: #F5F7F8;
        }
        .form-group input[type="text"],
        .form-group input[type="password"],
        .form-group input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            margin: 0 auto; /* Center the button horizontally */
            display: block; /* Make the button a block element */
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="container">
    <h2>USER REGISTRATION</h2>
    <form action="registration_process.php" method="POST">
        <div class="form-group">
            <input type="text" id="fullname" name="fullname" placeholder="Enter Your Full Name" required>
        </div>
        <div class="form-group">
            <input type="email" id="email" name="email" placeholder="Email Address" required>
        </div>
        <div class="form-group">
            <input type="text" id="username" name="username" placeholder="Username"required>
        </div>
        <div class="form-group">
            <input type="password" id="password" name="password" placeholder="Password" required>
        </div>

        <button type="submit" class="btn">Register</button>
    </form>
</div>

</body>
</html>
