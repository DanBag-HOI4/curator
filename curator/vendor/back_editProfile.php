<?

if (!isset($_SESSION)) { 
    session_start(); 
}

require_once "./connect.php";

$fio = $_POST["fio"];
$login = $_POST["login"];
$email = $_POST["email"];
$password = $_POST["password"];
$password2 = md5($password);
$password_repeat = $_POST["password_repeat"];
$telephone = $_POST["telephone"];
$pfp = "images/pfps/" . time() . $_FILES["pfp"]["name"];

if($password==$password_repeat) {
    if(move_uploaded_file($_FILES["pfp"]["tmp_name"], "../" . $pfp)) {
        $connect->query("UPDATE `users` SET (`id`, `fio`, `login`, `email`, `password`, `telephone`, `pfp`) VALUES (NULL, '$fio', '$login', '$email', '$password2', '$telephone', '$pfp')");
        header("Location: ../profile.php");
    } else {
        $connect->query("UPDATE `users` SET (`id`, `fio`, `login`, `email`, `password`, `telephone`, `pfp`) VALUES (NULL, '$fio', '$login', '$email', '$password2', '$telephone', '$pfp')");
        header("Location: ../profile.php");
    }
}
?>