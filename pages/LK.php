<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Железяка.ru</title>
    <link rel="stylesheet" type="text/css" href="../css/based.css">
    <link rel="stylesheet" type="text/css" href="../css/LK.css">
</head>
<body>

<header>
    <?php include_once ("../include/header.php");?>
</header

<main>
    <div class="LK-main-container">
        <div class="LK-header">
<!--            <input name="type" type="hidden" value="--><?//= $var ?><!--">-->
            <h1>Личный кабинет: <?= $_SESSION["login"] ?> </h1>
            <form method="post" action="../include/login-back.php?exit">
                <button id="exit-btn" type="submit">Выйти</button>
            </form>
        </div>
        <div class="LK-data-container">
            <p>Логин</p>
            <input>
            <p>Почта</p>
            <input>
            <p>Пароль</p>
            <input>
            <p>Телефон</p>
            <input>
            <p>Имя</p>
            <input>
            <p>Фамилия</p>
            <input>
            <p>Отчество</p>
            <input>
        </div>
        <div class="LK-orders-container">
            <div class="LK-orders-header">
                <h1>Заказы</h1>
            </div>
            <div>

            </div>
        </div>
    </div>

</main>

 </html>

