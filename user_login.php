
<!--username and password checking if not match will not take to homepage-->

<?php
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form submission
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to check if the username and password exist in the database
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    // If a matching record is found, redirect to the home page
    if ($result->num_rows > 0) {
        // Start session and store user information if needed
        session_start();
        $_SESSION['username'] = $username; // Store username in session if needed
        header("Location: booklist.php"); // Redirect to the home page
        exit();
    } else {
        // If no matching record is found, redirect back to the login page with an error message
        header("Location: user_login.php?error=1"); // Redirect to the login page with an error parameter
        
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
            color: #F5F7F8;
            text-align: center;
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
        .register-link {
            text-align: center;
            margin-top: 10px;
            color: #F5F7F8;
        }
        .register-link a {
            color: #F5F7F8;
            text-decoration: none;
        }
        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>USER LOGIN</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST"> 
            <div class="form-field">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="form-field">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-field">
                <input type="submit" value="Login" name="login">
            </div>
        </form>
        <div class="register-link">
            <a href="registration.php">New User? Register Here</a>
        </div>
    </div>
</body>
</html>



