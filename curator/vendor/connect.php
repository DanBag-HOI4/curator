<?php
if (!isset($_SESSION)) { 
    session_start(); 
}

$connect = mysqli_connect("localhost", "root", "root", "baginproject");

if(!$connect) {
    die("error");
}

?>