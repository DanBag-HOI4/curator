<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
if (!isset($_SESSION)) { 
    session_start(); 
}

require_once "./connect.php";
$login = $_POST["login"];
$password = $_POST["password"];
$password2 = md5($password);

$result = $connect->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password2'");

if(mysqli_num_rows($result)>0) {
    $row = mysqli_fetch_array($result);
    $user = array(
        "dbid" => $row["id"],
        "dblogin" => $row["login"],
        "dbemail" => $row["email"],
        "dbtel" => $row["telephone"],
        "dbfio" => $row["fio"],
        "dbpfp" => $row["pfp"],
    );
    $_SESSION["user"] = $user;
    header("Location: ../profile.php");
}

?>