<?php

$connect = mysqli_connect("localhost", "root", "", "baginproject");

if(!$connect) {
    die("error");
}

if (!isset($_SESSION)) { 
    session_start(); 
}

$userId = $_SESSION["user"]["dbid"];

$groups = $connect->query("SELECT * FROM `groups` WHERE `id_user` = '$userId'"); 
$groups = mysqli_fetch_all($groups);

$events = $connect->query("SELECT * FROM `events` WHERE `id_user` = '$userId'"); 
$events = mysqli_fetch_all($events);

$students = $connect->query("SELECT * FROM `students` WHERE `id_user` = '$userId'"); 
$students = mysqli_fetch_all($students);
?>