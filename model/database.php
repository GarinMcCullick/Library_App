<?php
$dsn = "mysql:host=localhost;dbname=library";
$username = "root";
$password = "";

try {
    $db = new PDO($dsn, $username, $password);
    //echo("connected");
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    echo ("<p>Error message: $error_message");
}
//table books
// book id, book name, active

//table users
//user id, privilage (0 or 1, 1= auth, 0 = public), password

//table requests
//user_id, book_id