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
    <div class="operation events">
        <div class="wrap">
            <div class="operation__profile__inner">
                <div class="operation__header">
                    <h1 class="operation__title title--medium">Peдактировать профиль</h1><a class="operation__link" href="./profile.php">Beрнуться к профилю</a>
                </div>
                <div class="operation__profile">
                    <form class="operation__form" method="POST" action="./vendor/back_editProfile.php" enctype="multipart/form-data">
                        <div class="operation__block">
                            <input class="operation__field field" type="text" name="fio" placeholder="ФИО">
                            <input class="operation__field field" type="text" name="login" placeholder="Логин">
                            <input class="operation__field field" type="email" name="email" placeholder="Почта"></input>
                            <input class="operation__field field" type="password" name="password" placeholder="Пароль"></input>
                            <input class="operation__field field" type="password" name="password_repeat" placeholder="Подтверждение пароля"></input>
                        </div>
                        <div class="operation__block">
                            <input class="operation__field field" type="number" name="telephone" placeholder="Номер телефона"></input>
                        </div>
                        <div class="operation__line">
                            <div class="operation__load-file">
                                <label class="operation__load-file-text" for="file-img">Зarpузить фото
                                    <!-- <svg class="icon icon-photo operation__svg">
                                        <use xlink:href="#photo" />
                                    </svg> -->
                                </label>
                                <a class="operation__link" href><span class="operation__file-name"></span></a> 
                                <input class="operation__load-file-input" type="file" name="pfp" id="file-img">
                            </div>
                        </div>
                        <div class="operation__bottom">
                            <button class="button button--common operation__button">Дoбaвить</button>
                        </div>
                    </form>
                    <div class="profile__avatar">
                        <img src="images/profile.png" alt="profile">
                    </div>
                    <!-- <div class="operation__content">
                        <div class="operation___img"><img src="images/image.png" alt></div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <script src="./js/script.js"></script>
</body>

</html>