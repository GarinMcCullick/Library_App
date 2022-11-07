<?php
function editBook()
{
    if (isset($_POST['editBookID']) && isset($_POST['editBookName'])) {

        $bookName = $_POST['editBookName'];
        $bookID = $_POST['editBookID'];


        global $db;
        $sql = "UPDATE books SET book_name = '$bookName' WHERE book_id = '$bookID'";
        $stmt = $db->prepare($sql);
        $stmt->execute();
    }
}
