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
        </div>
    </header>

    <main class="section groups">
        <div class="wrap">
            <div class="section__inner">
                <div class="section__header">
                    <h1 class="section__header-title title--medium">Мoи гpyппы</h1>
                    <a class="section__link" href="./addGroup.php">Добавить новую гpуппy</a>
                </div>
            </div>
            <table class="groups_table">
                <th>
                    <tr class="groups_table-header">
                        <td>Название группы</td>
                        <td>Дата создания</td>
                        <td>Редактировать</td>
                        <td>Просмотр</td>
                        <td>Удалить</td>
                    </tr>
                </th>
                <tr class="groups_table-cell">
                    <td>И-16-2</td>
                    <td>13.12.2016</td>
                    <td><img class="edit" src="./static/svgs/edit_24dp_FILL0_wght400_GRAD0_opsz24.svg" alt="edit" width="24" height="24"></td>
                    <td><img class="edit" src="./static/svgs/visibility_24dp_FILL0_wght400_GRAD0_opsz24.svg" alt="edit" width="24" height="24"></td>
                    <td><img class="edit" src="./static/svgs/delete_24dp_FILL0_wght400_GRAD0_opsz24.svg" alt="edit" width="24" height="24"></td>
                </tr>
                <tr class="groups_table-cell">
                    <td>И-16-1</td>
                    <td>12.01.2016</td>
                    <td><img class="edit" src="./static/svgs/edit_24dp_FILL0_wght400_GRAD0_opsz24.svg" alt="edit" width="24" height="24"></td>
                    <td><img class="edit" src="./static/svgs/visibility_24dp_FILL0_wght400_GRAD0_opsz24.svg" alt="edit" width="24" height="24"></td>
                    <td><img class="edit" src="./static/svgs/delete_24dp_FILL0_wght400_GRAD0_opsz24.svg" alt="edit" width="24" height="24"></td>
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
    </main>
</body>

</html>