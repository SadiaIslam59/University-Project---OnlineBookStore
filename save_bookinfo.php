<?php
session_start(); // Start session

// Check if user is not logged in, redirect to login page
if (!isset($_SESSION['username'])) {
    header("Location: user_login.php");
    exit();
}

include('connect.php');

if(isset($_GET['id'])) {
    $book_id = $_GET['id'];
    $user_id = $_SESSION['user_id']; // Assuming you store the user ID in a cookie

    $sqlInsert = "INSERT INTO saved_book (user_id, book_id) VALUES ('$user_id', '$book_id')";
    mysqli_query($conn, $sqlInsert);

    // Redirect to some page after saving
    header("Location: user_saved_books.php");
    exit();
}
?>