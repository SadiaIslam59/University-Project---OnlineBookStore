
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
        <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #E3FEF7;
        }

        .container {
            position: relative; /* Position relative for absolute positioning of button */
            height: 100vh;
        }

        .content {
            position: absolute; /* Position absolute for button */
            top: 36%; /* Position button at the vertical center */
            left: 50%; /* Position button at the horizontal center */
            transform: translate(-50%, -50%); /* Center the button */
            text-align: center;
        }

        .content img {
            width: 830px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .content button {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            position: 100px 100px; /* Position the button absolutely */
            top: 20px; /* Adjust top position */
            right: 20px; /* Adjust right position */
        }

        .content button:hover {
            background-color: #0056b3;
        }

        .heading {
            color: #FA7070; /* Color for the heading */
            text-align: center; /* Align text to the center */
            font-weight: bold;
        }

    </style>
</head>
<body>
    <div class="heading">
        <h2>WELCOME TO</h2>
    </div>
    <div class="container">
        <div class="content">
            <img src="libraryimage.png" alt="Login Image">

            <button onclick="location.href='admin/login.php'"> Admin Login</button> 
            <button onclick="location.href='user_login.php'"> User Login</button>
        </div>
    </div>
    
</body>
</html>
