<?php
function addBook()
{
    global $db;

    if (isset($_POST['bookName'])) {
        $bookName = $_POST['bookName'];

        $sql = "insert into books (book_name) values('$bookName')";

        $stmt = $db->prepare($sql);
        $stmt->execute();

        /*
        $qry = $db->query($sql);
        $rs = $qry->fetch();
        return $rs;
        */
    }
}
