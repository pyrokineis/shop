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
            <div class="basket-product-block">
                <div class="basket-product-info">
                    <img alt="Video for Icon" src="../pics/'.$row['category'].'/'.$row['pic'].'">
<!--                    <p class="product-name">'.$row['naming'].'</p>-->
                    <p class="basket-product-name">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, laborum?</p>
<!--                    <p class="product-price">'.$row['price'].' р.<button >Добавить</button> </p>-->
                    <p class="basket-product-price">99999 р.</p>
                </div>
                <div class="basket-product-options">

                </div>
            </div>
        </div>


    </div>
</main>


<footer>
    <?php include_once ("../include/footer.php");?>
</footer>

</body>
</html>
