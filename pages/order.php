<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Корзина</title>
    <link rel="stylesheet" type="text/css" href="../css/based.css">
    <link rel="stylesheet" type="text/css" href="../css/basket.css">
<!--    <link rel="stylesheet" type="text/css" href="../css/order.css">-->
</head>
<body>
<header>
    <?php include_once ("../include/header.php");?>
</header>
<main>
    <?php
    print($_SESSION["login"]);
    $login=$_SESSION["login"];
    $date=date("Y-m-j H:i:s");
    print($date);

    $query="insert into order_tbl(dataTime,status,client_login) values ('$date','0','$login')";
    mysqli_query($link,$query) or die ("Ошибка0".mysqli_error($link));
    $result0=mysqli_query($link,"select max(id) as id from order_tbl where client_login='$login'");
    $row=mysqli_fetch_array($result0);
    $order_id=$row['id'];
    print(       $order_id);
    $query="select baskets_id from baskets_tbl where client_login='$login'";
    $result=mysqli_query($link,$query) or die ("Ошибка1".mysqli_error($link));
    $row1=mysqli_fetch_array($result);
    $basket_id=$row1['baskets_id'];
    print(       $basket_id);
    $query="select * from basket_content_tbl where basket_id='$basket_id'";
    while ($row2=mysqli_fetch_array($query))
    {
        $product_id=$row2['product_id'];
        $product_count=$row2['product_count'];
        $query2="insert into product_in_order_tbl(product_id,order_id,amount) values ('$product_id','$order_id','$product_count')";
        mysqli_query($link,$query2) or die("Ошибка3".mysqli_error($link));
    }

    ?>
</main>

</body>
</html>