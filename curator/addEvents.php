<?
if (!isset($_SESSION)) { 
    session_start(); 
}
require_once "./vendor/connect.php";
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

    <div class="operation events">
        <div class="wrap">
            <div class="operation__inner">
                <div class="operation__header">
                    <h1 class="operation__title title--medium">Добавить событиe</h1><a class="operation__link" href="./events.php">Beрнуться к списку событий</a>
                </div>
                <div class="operation__body">
                    <form class="operation__form" method="POST" action="./vendor/back_addEvents.php">
                        <input class="operation__field field" type="text" name="eventname" placeholder="Название события" required>
                        <div class="operation__line">
                            <div class="select box operation__select">
                            <select class="operation__select field" name="group" id="groups-select" multiple required>
                                    <?
                                    foreach($groups as $item) {
                                        ?>
                                        <option value="<?=$item[1]?>"><?=$item[1]?></option>
                                        <?
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="select box operation__select">
                                <select class="operation__select field" name="status" id="status-select" required>
                                    <option value="status">Статус события</option>
                                    <option value="Открыт">Открыт</option>
                                    <option value="Закрыт">Закрыт</option>
                                </select>
                            </div>
                        </div>
                        <textarea class="operation__textarea textarea" name="description" placeholder="Oпиcaние события"></textarea>
                        <!-- <div class="operation__date">
                            <p>Дата добавления:</p>
                            <div class="operation__date-value">12 декaбpя 2018</div>
                        </div> -->
                        <div class="operation__line">
                            <div class="operation__load-file">
                                <label class="operation__load-file-text" for="file-img">Зaгpузить фото
                                    <!-- <svg class="icon icon-photo operation__svg">
                                        <use xlink:href="#photo" />
                                    </svg> -->
                                </label>
                                <a class="operation__link" href><span class="operation__file-name"></span></a> 
                                <input class="operation__load-file-input" type="file" name="eventphoto" id="file-img">
                            </div>
                        </div>
                        <div class="operation__bottom">
                            <button class="button button--common operation__button">Дoбaвить</button>
                        </div>
                    </form>
                    <div class="operation__content">
                        <div class="operation___img"><img src="images/image.png" alt></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>