<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "baginproject");

if(!$connect) {
    die("error");
}

?>