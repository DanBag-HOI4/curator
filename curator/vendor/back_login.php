<?
session_start();
require_once "./connect.php";
$login = $_POST["login"];
$password = $_POST["password"];
$password2 = md5($password);

$result = $connect->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password2'");

if(mysqli_num_rows($result)>0) {
    $row = $result->fetch_assoc();
    $_SESSION["user"] = [
        "dbid" => $row["id"],
        "dbfio" => $row["fio"],
        "dblogin" => $row["login"],
        "dbemail" => $row["email"],
        "dbtelephone" => $row["telephone"]
    ];
    header("Location: ../profile.php");
}

?>