<?php
function checkoutBook()
{
    global $db;

    if (isset($_POST['checkoutBookID']) && isset($_POST['custName']) && isset($_POST['checkoutBookName'])) {

        $bookName = $_POST['checkoutBookName'];
        $bookID = $_POST['checkoutBookID'];
        $custName = $_POST['custName'];
        $sql = "INSERT INTO `requests`(`user_name`, `book_id`, `book_name`) VALUES ('$custName','$bookID','$bookName')";

        $stmt = $db->prepare($sql);
        $stmt->execute();

        /*
        $qry = $db->query($sql);
        $rs = $qry->fetch();
        return $rs;
        */
    }
}
