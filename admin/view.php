<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #77B0AA;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        h1 {
            margin: 0;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
            text-decoration: none;
            color: #fff;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .book-details {
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .book-details h3 {
            margin-top: 0;
        }

        .book-details p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container my-4">
        <header>
            <h1>Book Details</h1>
            <a href="admin_index.php" class="btn btn-primary">Back</a>
        </header>
        <div class="book-details">
            <?php
            include("../connect.php");
            $id = $_GET['id'];
            if ($id) {
                $sql = "SELECT * FROM books WHERE id = $id";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                 ?>
                 <h3>Title:</h3>
                 <p><?php echo $row["title"]; ?></p>
                 <h3>Description:</h3>
                 <p><?php echo $row["description"]; ?></p>
                 <h3>Author:</h3>
                 <p><?php echo $row["author"]; ?></p>
                 <h3>Type:</h3>
                 <p><?php echo $row["type"]; ?></p>
                
                 <?php
                }
            }
            else{
                echo "<h3>No books found</h3>";
            }
            ?>
        </div>
    </div>
</body>
</html>
