<?
if (!isset($_SESSION)) { 
    session_start(); 
}

require_once "./connect.php";

$group = $_POST["group"];
$t = time();
$t2 = date("Y-m-d-H:i:s", $t);
$connect ->query("INSERT INTO `groups` (`id`, `name`, `date`, `id_user`) VALUES (NULL, '$group', '$t2', '$userId') ");
?>