<?php
$conn = connect();
if (!$conn) die("Under Construction!");

function connect()
{
    $conn = new mysqli("localhost", "root", "", "train");
    if (!$conn) die("Database is being upgrade!");
    return $conn;
}