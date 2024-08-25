<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; /* Change background color */
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1500px; /* Match the max-width */
            margin: 0 auto; /* Center align */
            padding: 20px;
        }

        h2 {
            margin-top: 20px; /* Adjust top margin */
            text-align: center; /* Center align */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #dee2e6;
            text-align: left; /* Align text to left */
        }

        th {
            background-color: #BACD92;
        }

        tr:hover {
            background-color: #f9f9f9;
        }

        .btn {
            display: inline-block;
            background-color: #17a2b8; /* Match button color */
            color: #fff;
            padding: 10px 20px; /* Adjust padding */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #138496; /* Change hover color */
        }

        .btn-info {
            background-color: #17a2b8; /* Match button color */
        }

        .input-group-btn {
            margin-left: -5px;
            
        }

        .btn-info2 {
            background-color: #E65C19; /* Match button color */
        }

    </style>
</head>
<body>

    <div class="container">
        <h2>User Dashaboard</h2>
        <!-- Search form -->
        <form method="GET">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search by title" name="search">
                <div class="input-group-btn">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </div>
        </form>

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
                include('connect.php');

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
                        <a href="user_view.php?id=<?php echo $data['id']; ?>" class="btn btn-info">Read More</a>

                        <a href="save_bookinfo.php?id=<?php echo $data['id']; ?>" class="btn btn-info2">Save</a>
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
