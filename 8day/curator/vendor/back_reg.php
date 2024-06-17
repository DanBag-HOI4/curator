<?
require_once "./connect.php";

$fio = $_POST["fio"];
$login = $_POST["login"];
$email = $_POST["email"];
$password = $_POST["password"];
$password2 = md5($password);
$password_repeat = $_POST["password_repeat"];

if($password==$password_repeat) {
    $connect->query("INSERT INTO `users` (`id`, `fio`, `login`, `email`, `password`) VALUES (NULL, '$fio', '$login', '$email', '$password2')");
    header("Location: ../login.php");
}
?>