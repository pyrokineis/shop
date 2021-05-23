<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Корзина</title>
    <link rel="stylesheet" type="text/css" href="../css/based.css">
    <link rel="stylesheet" type="text/css" href="../css/basket.css">
</head>
<body>

<header>
    <?php include_once ("../include/header.php");?>
</header>

<main>
    <?php include_once("../include/login_win.php");?>

    <div class="basket-body">
        <p class="basket-header">Корзина</p>
        <div class="basket-main">

                <?php
                $basket_id = $_COOKIE["BASKET_ID"];
                if (isset($basket_id))
                {
                    if (isset($_GET['delete']))
                    {
                        if (isset($_POST['product_id']))
                        {
                            $product_id=$_POST['product_id'];
                            $query="delete from basket_content_tbl where product_id='$product_id' and basket_id='$basket_id'";
                            mysqli_query($link,$query) or die("Ошибка1" . mysqli_error($link));
                        }
                    }

                    if (isset($_GET['minus']))
                    {
                        if (isset($_POST['product_id']))
                        {

                            $product_id = $_POST['product_id'];
                            $query0="select product_count from basket_content_tbl where product_id='$product_id' and basket_id='$basket_id'";
                            $query0_res=mysqli_query($link,$query0) or die("Ошибка0" . mysqli_error($link));
                            $row_num=mysqli_num_rows($query0_res);
                            echo "kfkfkfkf '$row_num'";
                            if ($row_num>0)
                            {
                                $row0=(mysqli_fetch_array($query0_res));
                                if ($row0['product_count']==1)
                                {
                                    $product_id=$_POST['product_id'];
                                    $query="delete from basket_content_tbl where product_id='$product_id' and basket_id='$basket_id'";
                                    mysqli_query($link,$query) or die("Ошибка1" . mysqli_error($link));
                                }
                                if ($row0['product_count']>1)
                                {
                                    $prod_count=$row0['product_count']-1;
                                }
                                $query1 = "update basket_content_tbl set product_count='$prod_count' where product_id='$product_id' and basket_id='$basket_id'";
                                mysqli_query($link,$query1) or die("Ошибка0" . mysqli_error($link));
                            }
                        }
                    }

                    if (isset($_GET['plus']))
                    {

                        if (isset($_POST['product_id']))
                        {
                            $product_id = $_POST['product_id'];
                            $query0="select product_count from basket_content_tbl where product_id='$product_id' and basket_id='$basket_id'";
                            $query0_res=mysqli_query($link,$query0) or die("Ошибка0" . mysqli_error($link));
                            $row_num=mysqli_num_rows($query0_res);
                            if ($row_num>0)
                            {
                                $row0=(mysqli_fetch_array($query0_res));
                                if ($row0['product_count']>0)
                                {
                                    $prod_count=$row0['product_count']+1;
                                }
                                $query1 = "update basket_content_tbl set product_count='$prod_count' where product_id='$product_id' and basket_id='$basket_id'";
                                mysqli_query($link,$query1) or die("Ошибка0" . mysqli_error($link));
                            }
                        }
                    }


                    $query = "select * from basket_content_tbl where basket_id='$basket_id'";
                    $basket_content_result = mysqli_query($link,$query) or die("Ошибка1" . mysqli_error($link));
                    while ($row1=mysqli_fetch_array($basket_content_result))
                    {
                        $product_id = $row1['product_id'];
                        $product_count=$row1['product_count'];
                        $query = "SELECT * FROM product_tbl where id=".$product_id;
                        $products_basket_result = mysqli_query($link, $query) or die("Ошибка2" . mysqli_error($link));
                        while ($row2=mysqli_fetch_array($products_basket_result))
                        {
                            echo '
                    
                    <div class="basket-product-block">
                        <form action="basket.php?delete" method="post">
                            <div class="basket-product-info">
                                <img alt="Video for Icon" src="../pics/'.$row2['category'].'/'.$row2['pic'].'">
                                <p class="basket-product-name">'.$row2['naming'].'</p>
                                <p class="basket-product-price"">'.$row2['price'].' р.<button type="submit" name="product_id" value="'.$row2['id'].'">Удалить</button> </p>
                            </div>
                        </form>
                            <div class="input-group-options"> 
                            
                                <input class="option-input" type="number" name="count_input" value="'.$product_count.'" disabled> 
                                <form action="basket.php?plus" method="post">
                                    <button class="option-button" type="submit" name="product_id" value="'.$row2['id'].'">+</button>
                                </form>
                                <form action="basket.php?minus" method="post">
                                    <button type="submit" name="product_id" value="'.$row2['id'].'">-</button>
                                </form>
                            </div>
                    </div>
                        ';
                        }
                    }
                    echo '
                        <form action="order.php"><button name="order" type="submit">Оформить</button></form>

                    ';
                }
                ?>

        </div>
       </div>
    <div class="orders-body">
        <h1>Заказы</h1>
<!--        <div class="order-info">-->
<!--            -->
<!--        </div>-->
    </div>
</main>


<footer>
    <?php include_once ("../include/footer.php");?>
</footer>

</body>
</html>
