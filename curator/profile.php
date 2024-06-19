<?
if (!isset($_SESSION)) { 
    session_start(); 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="Image/x-icon" href="./images/free-icon-school-167707.png" rel="icon">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="wrap">
            <div class="upper_header">
                <p>Service "Куратор"</p>
                <div class="menu">
                    <a href="profile.php"><?= $_SESSION["user"]["dblogin"] ?></a>
                    <a href="./vendor/logout.php">Выход</a>
                </div>
            </div>
        </div>
        <div class="lower_header__bg">
            <div class="wrap">
                <nav class="lower_header">
                    <a href="./groups.php">Мои группы</a>
                    <a href="./events.php">События</a>
                    <a href="./students.php">Студенты</a>
                </nav>
            </div>
        </div>
    </header>
    <section class="section profile">
        <div class="wrap">
            <div class="section__inner">
                <div class="section__line">
                    <div class="profile__avatar">
                        <img src="<?=$pfp?>" alt="profile">
                    </div>
                    <div class="section__content">
                        <h1 class="section__title title--medium profile__title">
                            <?= $_SESSION["user"]["dbfio"] ?>
                        </h1>
                        <h2 class="section__subtitle">Информационные системы</h2>
                        <a class="section__link" href="">Номер телефона:<?= $_SESSION["user"]["dbtel"] ?></a>
                        <a class="section__link" href=""><?= $_SESSION["user"]["dbemail"] ?></a>
                    </div>
                    <a class="section__link profile_link" href="editProfile.php">Редактировать профиль</a>
                </div>
            </div>
        </div>
    </section>
    <script src="./js/script.js"></script>
</body>

</html>