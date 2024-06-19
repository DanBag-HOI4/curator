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
                    <a href="profile.php"><?=$_COOKIE["user"]["dblogin"]?></a>
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

    <section class="section group">
        <div class="wrap">
            <div class="section__inner">
                <h1 class="section__title title--big">События</h1>
                <div class="section__panel panel">
                    <a class="" href="./addEvents.php">Добавить событие</a>
                </div>
                <table class="groups_table">
                <th>
                    <tr class="groups_table-header">
                        <td>Название</td>
                        <td>Дата события</td>
                        <td>Статус</td>
                        <td>Редактировать</td>
                        <td>Просмотр</td>
                        <td>Удалить</td>
                    </tr>
                </th>
                <tr class="groups_table-cell">
                    <td>Соревнование по вёрстке сайтов</td>
                    <td>13.12.2016</td>
                    <td>Закрыт</td>
                    <td>
                        <a href="./editEvents.php">
                            <img class="edit" src="./static/svgs/edit_24dp_FILL0_wght400_GRAD0_opsz24.svg" alt="edit" width="24" height="24">
                        </a>
                    </td>
                    <td>
                        <a href="./viewEvents.php">
                            <img class="view" src="./static/svgs/visibility_24dp_FILL0_wght400_GRAD0_opsz24.svg" alt="edit" width="24" height="24">                        
                        </a>
                    </td>
                    <td>
                        <a href="">
                            <img class="delete" src="./static/svgs/delete_24dp_FILL0_wght400_GRAD0_opsz24.svg" alt="edit" width="24" height="24">                        
                        </a>
                    </td>
                </tr>
                <tr class="groups_table-cell">
                    <td>Что-то произошло</td>
                    <td>12.01.2016</td>
                    <td>Открыт</td>
                    <td>
                        <a href="./editEvents.php">
                            <img class="edit" src="./static/svgs/edit_24dp_FILL0_wght400_GRAD0_opsz24.svg" alt="edit" width="24" height="24">
                        </a>
                    </td>
                    <td>
                        <a href="./viewEvents.php">
                            <img class="view" src="./static/svgs/visibility_24dp_FILL0_wght400_GRAD0_opsz24.svg" alt="edit" width="24" height="24">                        
                        </a>
                    </td>
                    <td>
                        <a href="">
                            <img class="delete" src="./static/svgs/delete_24dp_FILL0_wght400_GRAD0_opsz24.svg" alt="edit" width="24" height="24">                        
                        </a>
                    </td>
                </tr>
            </table>
            <div class="pagination_block">
                <ul class="pagination section__pagination">
                    <li class="pagination__item"><a class="pagination__link" href="#"> Предыдушая </a></li>
                    <li class="pagination__item"><a class="pagination__link" href="#">1</a></li>
                    <li class="pagination__item"><a class="pagination__link" href="#">2</a></li>
                    <li class="pagination__item"><a class="pagination__link" href="#">3</a></li>
                    <li class="pagination__item"><a class="pagination__link" href="#"> Следующaя </a></li>
                </ul>
            </div>
            </div>
        </div>
    </section>
</body>

</html>