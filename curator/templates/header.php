<?
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="Image/x-icon" href="./images/free-icon-school-167707.png" rel="icon">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Document</title>
</head>
<body class="header__body">
    <header>
        <div class="upper_header">
            <p>Service "Куратор"</p>
            <div class="menu">
                <a href="profile.php"><?=$_SESSION["user"]?></a>

                <a href="">Выход</a>
            </div>
        </div>
        </div>
        <div class="lower_header__bg">
            <nav class="lower_header">
                <a href="">Мои группы</a>
                <a href="">События</a>
                <a href="">Студенты</a>
            </nav>
        </div>
    </header>
    <?echo $_SESSION["user"]?>
    <script src="./js/script.js"></script>
</body>
</html>