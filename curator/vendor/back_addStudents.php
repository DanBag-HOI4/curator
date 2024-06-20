<?
if (!isset($_SESSION)) { 
    session_start(); 
}

require_once "./connect.php";

$fullname = $_POST["fullname"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$date = $_POST["date"];

$groupId = $_POST["group"];


$connect ->query("INSERT INTO `students` (`id`, `fio`, `email`, `telephone`, `date`, `id_group`, `id_user`) VALUES (NULL, '$fullname', '$email', '$tel', '$date', '$groupId', '$userId') ");
?>