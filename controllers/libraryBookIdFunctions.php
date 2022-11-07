<?php

//getBook gets books by id
function getBook($id)
{
    global $db;
    $sql = "select * from books where book_id = $id";
    $qry = $db->query($sql);
    $rs = $qry->fetch();
    return $rs;
}
