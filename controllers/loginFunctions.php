<?php
include "./model/database.php";

//Auth() is going to fetch db password compare typed password and if matches will authenticate and redirect else error message
function Auth()
{
    global $db;
    $sql = "SELECT `user_id`, `password`, `privilege` FROM `users` WHERE 1";

    $qry = $db->query($sql);
    $auth = $qry->fetchAll();

    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        $password = 'error';
    }
    if ($auth[0][1] === $password) {
        return $auth[0][2];
    } else {
        return "ERROR! " . $password . " wrong password please try again";
    }
}
