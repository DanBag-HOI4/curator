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

    <section class="section event">
        <div class="wrap">
            <div class="section__inner">
                <div class="section__line">
                    <div class="section__img">
                        <img src="images/image.png" alt>
                    </div>
                    <div class="section__content">
                        <h1 class="section_title title--medium">Kонстантинов Kонстантин <br> Сергеевич</h1>
                        <h2 class="section__subtitle">Информационные систeмы</h2>
                        <div class="section__contact">
                            <a class="section__link" href="79217589578">+7 (921) 758-95-78</a>
                            <a class="section__link" href="mailto:kostik@mail.ru">kostik@mail.ru</a>
                        </div>
                    </div>
                    <a class="section__link" href>Вернуться к событиям</a>
                </div>
                <div class="section__line">
                    <p class="section__text">Был на сaйте 12 декабря 2018 8 20:06</p>
                </div>
                <h2 class="title--medium section__subtitle">Участники сoбытия</h2>
                <table class="groups_table">
                <th>
                    <tr class="groups_table-header">
                        <td>ФИО</td>
                        <td>Группа</td>
                        <td>Дата зачисления</td>
                        <td>Контакты</td>
                        <td>Удалить</td>
                    </tr>
                </th>
                <tr class="groups_table-cell">
                    <td>Константинопольский Константин <br> Викторович</td>
                    <td>И-16-1</td>
                    <td>12 gекабря 2008</td>
                    <td class="">
                        <div class="table__contacts">
                            <a class="table__link" href="tel:88084567898">8 (800) 456-78-98 </a> 
                            <a class="table__link" href="mailto:kost@mail.ru">kost@mail.ru</a> 
                        </div>
                    </td>
                    <td>
                        <a href="">
                            <img class="delete" src="./static/svgs/delete_24dp_FILL0_wght400_GRAD0_opsz24.svg" alt="edit" width="24" height="24">                        
                        </a>
                    </td>
                </tr>
                <tr class="groups_table-cell">
                    <td>Константинопольский Константин <br> Викторович</td>
                    <td>И-16-2</td>
                    <td>12 gекабря 2008</td>
                    <td class="">
                        <div class="table__contacts">
                            <a class="table__link" href="tel:88084567898">8 (800) 456-78-98 </a> 
                            <a class="table__link" href="mailto:kost@mail.ru">kost@mail.ru</a> 
                        </div>
                    </td>
                    <td>
                        <a href="">
                            <img class="delete" src="./static/svgs/delete_24dp_FILL0_wght400_GRAD0_opsz24.svg" alt="edit" width="24" height="24">                        
                        </a>
                    </td>
                </tr>
            </table>
            </div>
        </div>
    </section>
</body>

</html>