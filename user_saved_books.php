<?php
include('connect.php');

$user_id = $_COOKIE['user_id']; // Assuming you store the user ID in a cookie

$sqlSelect = "SELECT * FROM saved_book WHERE user_id = '$user_id'";
$result = mysqli_query($conn, $sqlSelect);
?>

<!-- Display saved books -->
<h2>Saved Books</h2>
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Type</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while($data = mysqli_fetch_array($result)){
            $book_id = $data['book_id'];
            $sqlBook = "SELECT * FROM books WHERE id = '$book_id'";
            $resultBook = mysqli_query($conn, $sqlBook);
            $bookData = mysqli_fetch_array($resultBook);
        ?>
        <tr>
            <td><?php echo $bookData['title']; ?></td>
            <td><?php echo $bookData['author']; ?></td>
            <td><?php echo $bookData['type']; ?></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>