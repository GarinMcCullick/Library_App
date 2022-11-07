<?php
require_once "./model/database.php";
//get books gets all books
function getBooks()
{
    global $db;

    $sql = "select * from books where active = 1";

    $qry = $db->query($sql);
    $books = $qry->fetchAll();

    return $books;
}
