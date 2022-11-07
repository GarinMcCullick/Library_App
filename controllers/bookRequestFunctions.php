<?php
require_once "./model/database.php";
function getRequests()
{

    global $db;

    $sql = "SELECT * FROM `requests` WHERE 1";

    $qry = $db->query($sql);
    $requests = $qry->fetchAll();

    return $requests;
}
