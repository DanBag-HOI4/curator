<?
if (!isset($_SESSION)) { 
    session_start(); 
}

require_once "./connect.php";

$eventname = $_POST["eventname"];
$groupForEvent = $_POST["group"];
$status = $_POST["status"];
$description = $_POST["description"];
$t = time();
$t2 = date("Y-m-d-H:i:s", $t);

$groupName = $_POST["group"];
echo $groupName;
$groupName = explode(", ", $groupName);

$connect ->query("INSERT INTO `events` (`id`, `name`, `description`, `students`, `date`, `img`, `id_user`) VALUES (NULL, '$eventname', '$description', '$groupName', '$t2', NULL, '$userId') ");


?>