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
    <h1>Подтверждение заказа</h1>
    <?php
    if (isset($_SESSION["login"]))
    {
//        print($_SESSION["login"]);
        $login=$_SESSION["login"];
        $date=date("Y-m-j H:i:s");
//        print($date);
        $query="select order_id from order_tbl where client_login='$login'";
        $result=mysqli_query($link,$query);
//        $row=mysqli_fetch_array($result);
//        if (mysqli_num_rows($result)==0)
//        {
//
//        }
        $query="insert into order_tbl(dataTime,status,client_login) values ('$date','0','$login')";
        mysqli_query($link,$query) or die ("Ошибка0".mysqli_error($link));
        $result0=mysqli_query($link,"select max(id) as id from order_tbl where client_login='$login'");
        $row=mysqli_fetch_array($result0);
        $order_id=$row['id'];
//        print(       $order_id);
        $query="select baskets_id from baskets_tbl where client_login='$login'";
        $result=mysqli_query($link,$query) or die ("Ошибка1".mysqli_error($link));
        $row1=mysqli_fetch_array($result);
        $basket_id=$row1['baskets_id'];
//        print(       $basket_id);
        $query="select * from basket_content_tbl where basket_id='$basket_id'";
        $result2=mysqli_query($link, $query);
        echo '
<table>
    <tr>
        <td>ID</td>
        <td>Наимннование</td>
        <td>Кол-во</td>
        <td>Цен за шт.</td>
    </tr>

';
        while ($row2=mysqli_fetch_array($result2))
        {
            $product_id=$row2['product_id'];
            $product_count=$row2['product_count'];
            $query2="insert into product_in_order_tbl(product_id,order_id,amount) values ('$product_id','$order_id','$product_count')";
            mysqli_query($link,$query2) or die("Ошибка3".mysqli_error($link));
            $query="select * from product_tbl where id='$product_id'";
            $result=mysqli_query($link, $query);
            $row=mysqli_fetch_array($result);
            $id=$row['id'];
            $naming=$row['naming'];
            $price=$row['price'];


            echo '
<tr>
    <td>'.$id.'</td>
    <td>'.$naming.'</td>
    <td>'.$product_count.'</td>
        <td>'.$price.'</td>
</tr>
';

        }

        echo '</table>';

    }
    else{
        echo '<script>window.location.href="../pages/index.php#modal1"</script>';
    }


    ?>

</main>

</body>
</html>