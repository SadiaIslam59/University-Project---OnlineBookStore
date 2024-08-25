<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
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

        h1 {
            margin-bottom: 20px;
            text-align: right;
        }

        form {
            margin-top: 20px;
        }

        .form-element {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ced4da;
            box-sizing: border-box;
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

        .btn {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        header {
            display: flex;
            justify-content: space-between; /* Distribute items evenly */
            align-items: center;
            margin-bottom: 20px;
        }

        .btn-secondary {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .btn-secondary:hover {
            background-color: #545b62;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Add New Book</h1>
            <div>
                <a href="admin_index.php" class="btn btn-secondary">Back</a>
            </div>
        </header>
        
        <form action="../process.php" method="post">
            <div class="form-element">
                <input type="text" class="form-control" name="title" placeholder="Book Title">
            </div>
            <div class="form-element">
                <input type="text" class="form-control" name="author" placeholder="Author Name">
            </div>
            <div class="form-element">
                <select name="type" class="form-control">
                    <option value="">Select Book Type</option>
                    <option value="Bangali Novel">Bangali Novel</option>
                    <option value="Short Story">Short Story</option>
                    <option value="Poem">Poem</option>
                    <option value="Adventure">Adventure</option>
                    <option value="Thriller">Thriller</option>
                    <option value="Crime">Crime</option>
                    <option value="Text Book">Text Book</option>
                </select>
            </div>
            <div class="form-element">
                <textarea name="description" class="form-control" placeholder="Book Description"></textarea>
            </div>
            <div class="form-element">
                <input type="submit" name="create" value="Add Book" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>
</html>
