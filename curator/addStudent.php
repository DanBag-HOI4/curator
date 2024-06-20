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
    
    <div class="operation group">
        <div class="wrap">
            <div class="operation__inner">
                <div class="operation__header">
                    <h1 class="operation__title title--medium">Добавить студента</h1>
                    <a class="operation__link" href="./groups.php">Вернуться к cпиcку студентов</a>
                </div>
                <form class="operation__form" method="POST" action>
                    <div class="operation__block">
                        <div class="operation__line">
                            <input class="operation__field field" type="text" name="fullname" placeholder="ФИО" required>
                            <input class="operation__field field" type="number" name="tel" placeholder="Номер телефона" required>
                        </div>
                        <div class="operation__line">
                            <div class="select box operation__select">
                                <select class="operation__select field" name="groups" id="groups-select" required>
                                    <option value="groups">Выберите группу</option>
                                    <option value="groups">И-24-1</option>
                                    <option value="groups">И-24-2</option>
                                </select>
                            </div>
                            <input class="operation__field field" type="email" name="email" placeholder="E-mail" required>
                        </div>
                    </div>

                    <div class="operation__block">
                        <div class="operation__line">
                            <input class="operation__field field" type="date" name="date" placeholder="Дата зачисления" required>
                        </div>
                    </div>
                    
                    <div class="operation__bottom">
                        <button type="submit" class="button button--common operation__button">Добaвить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>