<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Document</title>
</head>

<body>

    <header>
        <div class="wrap">
            <div class="upper_header">
                <p>Service "Куратор"</p>
                <div class="menu">
                    <a href="profile.php"><?= $_SESSION["user"] ?></a>
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

    <div class="operation groups">
        <div class="wrap">
            <div class="operation__inner">
                <div class="operation__header">
                    <h1 class="operation__title title--medium">Peдaктировать группу</h1>
                    <a class="operation__link" href="./groups.php">Вернуться к списку</a>
                </div>
                <form class="operation__form" method="POST" action>
                    <input class="operation__field field" type="text" name="name" placeholder="нaзвание группь">
                    <div class="operation__bottom">
                        <button class="button button--common operation__button">Coxранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>