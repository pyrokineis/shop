<?php
$host = 'localhost'; // адрес сервера
$database = 'shop'; // имя базы данных
$user = 'root'; // имя пользователя
$password = 'root'; // пароль
$link = mysqli_connect($host, $user, $password, $database)  or die("Ошибка2 " . mysqli_error($link));

