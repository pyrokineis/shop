<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Железяка.ru</title>
    <link rel="stylesheet" type="text/css" href="../css/based.css">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
</head>
<body>

<header>
    <?php include_once ("../include/header.php");?>
</header>
<main>

</main>
 </html>

<?php
session_start();
echo"ZDAROVA ".$_SESSION["name"];
