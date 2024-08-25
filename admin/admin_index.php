<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
            margin-bottom: 0px;
            margin-top: 20px; /* Reduce top margin */
            text-align: center;

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

        .btn-group {
            margin-top: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center; /* Align items vertically */
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

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .btn-warning {
            background-color: #ffc107;
            color: #212529;
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }

        .btn-info {
            background-color: #17a2b8;
            color: #fff;
        }

        .btn-info:hover {
            background-color: #138496;
        }

        .form-control {
            width: 90%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ced4da;
        }

        .input-group {
            margin-top: 15px;
            margin-bottom: 20px;
            max-width: 1500px;
            display: flex;

        }

        .input-group-btn {
            margin-left: -5px;
            
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
    <h1>Admin Dashboard</h1>
    <div class="container">
        <header class="d-flex justify-content-between">
            
            <div class="btn-group">
                <div>
                    <a href="userinfo.php" class="btn btn-primary">User Info</a>
                    <a href="create.php" class="btn btn-primary">Add New Book</a>
                </div>
                <form class="input-group" action="#" method="get">
                    <input type="text" class="form-control" placeholder="Search by title" name="search">
                    <div class="input-group-btn">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </header>

        <!-- Display Success Messages -->
        <?php
        session_start();
        if (isset($_SESSION["create"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["create"];
            ?>
        </div>
        <?php
        unset($_SESSION["create"]);
        }

        if (isset($_SESSION["update"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["update"];
            ?>
        </div>
        <?php
        unset($_SESSION["update"]);
        }

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
        
        <!-- Display Book List -->
        <table>
            <thead>
                <tr>
                    <th>Sl.</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include('../connect.php');

                //**********SEARCH STARTS HERE********

                if(isset($_GET['search']) && !empty($_GET['search'])) {
                    $search = $_GET['search'];
                    $sqlSelect = "SELECT * FROM books WHERE title LIKE '%$search%'";
                } else {
                    $sqlSelect = "SELECT * FROM books";
                }
                
                $result = mysqli_query($conn,$sqlSelect);
                while($data = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $data['id']; ?></td>
                    <td><?php echo $data['title']; ?></td>
                    <td><?php echo $data['author']; ?></td>
                    <td><?php echo $data['type']; ?></td>
                    <td>
                        <a href="view.php?id=<?php echo $data['id']; ?>" class="btn btn-info">Read More</a>
                        <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
