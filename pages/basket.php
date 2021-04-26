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
                $basket_id = 2;
                if (isset($basket_id))
                {
                    $query = "select * from basket_content_tbl where basket_id='$basket_id'";
                    $basket_content_result = mysqli_query($link,$query) or die("Ошибка1" . mysqli_error($link));
                    while ($row1=mysqli_fetch_array($basket_content_result))
                    {
                        $product_id = $row1['product_id'];
                        $query = "SELECT * FROM product_tbl where id=".$product_id;
                        $products_basket_result = mysqli_query($link, $query) or die("Ошибка2" . mysqli_error($link));
                        while ($row2=mysqli_fetch_array($products_basket_result))
                        {
                            echo '
                        <div class="basket-product-block">
                            <div class="basket-product-info">
                                <img alt="Video for Icon" src="../pics/'.$row2['category'].'/'.$row2['pic'].'">
                                <p class="basket-product-name">'.$row2['naming'].'</p>
                                <p class="basket-product-price"">'.$row2['price'].' р.<button >Удалить</button> </p>
                            </div>
                            <div class="basket-product-options">
    
                            </div>
                        </div>
                        ';
                        }
                    }
                }
                ?>

        </div>
       </div>
</main>


<footer>
    <?php include_once ("../include/footer.php");?>
</footer>

</body>
</html>
