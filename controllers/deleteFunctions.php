<?php
function deleteBook()
{
    if (isset($_POST['BookID']) && isset($_POST['deleteBook'])) {

        $deleteBook = $_POST['deleteBook'];
        $bookID = $_POST['BookID'];


        global $db;
        $sql = "UPDATE books SET active = '$deleteBook' WHERE book_id = '$bookID'";
        $stmt = $db->prepare($sql);
        $stmt->execute();
    }
}
