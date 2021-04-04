<?php
require_once '../DB/connection.php';
$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));
$string = $_POST['search_query'];
$query="select * from product_tbl where naming like '%".$string."%' or category like '%".$string."%' or descr like '%".$string."%'";
$result=mysqli_query($link,$query);
mysqli_close($link);

