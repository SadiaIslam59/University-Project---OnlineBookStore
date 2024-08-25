<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 1500px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 10px;
            margin-top: 10px; /* Reduce top margin */
        }

       table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #dee2e6;
        }

        th {
            background-color: #BACD92;
            text-align: left;
        }

        td {
            background-color: #fff;
        }

        .btn-container {
            display: flex;
            justify-content: flex-end; /* Align items to the end of the container */
            margin-bottom: 10px; /* Add margin to the bottom */
        }

        .btn {
            text-decoration: none;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .alert {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 5px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border-color: #c3e6cb;
        }
    </style>
</head>
<body>

<div class="container">
    <header class="d-flex justify-content-between">
        <h1>USER INFORMATION</h1>
    </header>

    <div class="btn-container">
        <a href="admin_index.php" class="btn btn-primary">Back</a>
    </div>

    <!-- Display Success Messages -->
    <?php
    session_start();
    if (isset($_SESSION["delete"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["delete"];
            ?>
        </div>
        <?php
        unset($_SESSION["delete"]);
    }
    ?>
    
    <!-- Display User Information -->
    <table>
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Username</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("../connect.php");

            // Handle Search
            $search = '';
            if(isset($_GET['search'])) {
                $search = $_GET['search'];
                $sql = "SELECT fullname, email, username FROM users WHERE fullname LIKE '%$search%'";
            } else {
                $sql = "SELECT fullname, email, username FROM users";
            }

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["fullname"]. "</td>";
                    echo "<td>" . $row["email"]. "</td>";
                    echo "<td>" . $row["username"]. "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No results found.</td></tr>";
            }

            // Close connection
            $conn->close();
            ?>
        </tbody>
    </table>
</div>
</body>
</html>
