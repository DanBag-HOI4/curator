<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="Image/x-icon" href="./images/free-icon-school-167707.png" rel="icon">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Document</title>
</head>
<body class="page">
    <div class="auth">
    <div class="auth">
        <div class="wrap">
            <div class="auth_inner">
                <h1 class="auth__title title-big">Регистрация</h1>
                <p class="auth_desc"></p>
                <form class="auth__form" action="vendor/back_reg.php" method="POST">
                    <input class="auth__field field" type="text" name="fio" autocomplete="off" placeholder="ФИО" required>
                    <input class="auth__field field" type="text" name="login" placeholder="Логин" required>
                    <input class="auth__field field" type="email" name="email" placeholder="Почта" required>
                    <input class="auth__field field" type="password" name="password" placeholder="Пароль" required>
                    <input class="auth__field field" type="password" name="password_repeat" placeholder="Подтвердите пароль" required>
                    <label class="auth__checkbox checkbox">
                        <input class="checkbox__input" type="checkbox" name="User__Agreement" required>
                        Я согласен с <b>условиями использования</b>
                    </label>
                    <button type="submit" class="auth__button button button--common">Регистрация</button>
                    <a class="auth__recovery" href="./login.php">Есть аккаунт? Авторизуйтесь</a>
                </form>
            </div>
        </div>
    </div>
    <script src="./js/script.js"></script>
</body>
</html>