<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #77B0AA;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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

        .form-control {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ced4da;
            box-sizing: border-box;
            margin-bottom: 20px;
        }

        select.form-control {
            appearance: none;
            /* use for drop down arrow sign */
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M7 10l5 5 5-5H7z" fill="currentColor"/></svg>');
            background-repeat: no-repeat;
            background-position: right 8px center;
            background-size: 18px;
            padding-right: 30px;
        }

        textarea.form-control {
            height: 120px;
            resize: vertical;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <header>
            <h1>Edit Book</h1>
            <a href="admin_index.php" class="btn btn-primary">Back</a>
        </header>
        <form action="../process.php" method="post">
            <?php 
            if (isset($_GET['id'])) {
                include("../connect.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM books WHERE id=$id";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
            ?>
            <div class="form-element">
                <input type="text" class="form-control" name="title" placeholder="Book Title:" value="<?php echo $row["title"]; ?>">
            </div>
            <div class="form-element">
                <input type="text" class="form-control" name="author" placeholder="Author Name:" value="<?php echo $row["author"]; ?>">
            </div>
            <div class="form-element">
                <select name="type" class="form-control">
                    <option value="">Select Book Type:</option>
                    <option value="Bangali Novel" <?php if($row["type"]=="Bangali Novel"){echo "selected";} ?>>Bangali Novel</option>

                    <option value="Short Story" <?php if($row["type"]=="Short Story"){echo "selected";} ?>>Short Story</option>

                    <option value="Poem" <?php if($row["type"]=="Poem"){echo "selected";} ?>>Poem</option>

                    <option value="Adventure" <?php if($row["type"]=="Adventure"){echo "selected";} ?>>Adventure</option>

                    <option value="Thriller" <?php if($row["type"]=="Thriller"){echo "selected";} ?>>Thriller</option>

                    <option value="Crime" <?php if($row["type"]=="Crime"){echo "selected";} ?>>Crime</option>
                    
                    <option value="Text Book" <?php if($row["type"]=="Text Book"){echo "selected";} ?>>Text Book</option>
                </select>
            </div>
            <div class="form-element">
                <textarea name="description" class="form-control" placeholder="Book Description:"><?php echo $row["description"]; ?></textarea>
            </div>
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <div class="form-element">
                <input type="submit" name="edit" value="Edit Book" class="btn btn-primary">
            </div>
            <?php
            } else {
                echo "<h3>Book Does Not Exist</h3>";
            }
            ?>
        </form>
    </div>
</body>
</html>
