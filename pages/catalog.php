
<html lang="ru">
<head>

    <meta charset="UTF-8">
    <title>Железяка.ru</title>
    <link rel="stylesheet" type="text/css" href="../css/based.css">
    <link rel="stylesheet" type="text/css" href="../css/catalog.css">

</head>
<body>

<header>
    <?php include_once ("../include/header.php");?>
</header>


<main>
    <?php include_once("../include/login_win.php");?>

<div class="main-container">
    <div class="left-menu">
        <ul class="left-menu-list">
            <li>
                <p class="menu-header" >Категории</p>
            </li>
            <?php
            require_once '../DB/connection.php';
            $link = mysqli_connect($host, $user, $password, $database)
            or die("Ошибка " . mysqli_error($link));

            $query ="SELECT * FROM category_tbl";
            $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
            while ($row=mysqli_fetch_array($result))
            {
                echo '
                <li class="l-menu-item">
                <a href="catalog.php?ct='.$row['category_name'].'">
                    <img src="../pics/video.png">
                    <span>'.$row['category_name'].'</span>
                </a>
            </li>';
            }
            mysqli_close($link);
            ?>

<!--            <li class="l-menu-item">-->
<!--                <a href="">-->
<!--                    <img src="../pics/video.png">-->
<!--                    <span>Материнские платы</span>-->
<!--                </a>-->
<!--            </li>-->
<!--            <li class="l-menu-item">-->
<!--                <a href="">-->
<!--                    <img src="../pics/video.png">-->
<!--                    <span>Процессоры</span>-->
<!--                </a>-->
<!--            </li>-->
<!--            <li class="l-menu-item">-->
<!--                <a href="">-->
<!--                    <img src="../pics/video.png">-->
<!--                    <span>Оперативная память</span>-->
<!--                </a>-->
<!--            </li>-->
<!--            <li class="l-menu-item">-->
<!--                <a href="">-->
<!--                    <img src="../pics/video.png">-->
<!--                    <span>Блоки питания</span>-->
<!--                </a>-->
<!--            </li>-->
<!--            <li class="l-menu-item">-->
<!--                <a href="">-->
<!--                    <img src="../pics/video.png">-->
<!--                    <span>HHD/SSD</span>-->
<!--                </a>-->
<!--            </li><li class="l-menu-item">-->
<!--                <a href="">-->
<!--                    <img src="../pics/video.png">-->
<!--                    <span>Корпусы</span>-->
<!--                </a>-->
<!--            </li>-->
<!--            <li class="l-menu-item">-->
<!--                <a href="">-->
<!--                    <img src="../pics/video.png">-->
<!--                    <span>Кулеры и СО</span>-->
<!--                </a>-->
<!--            </li>-->
<!--            <li class="l-menu-item">-->
<!--                <a href="">-->
<!--                    <img src="../pics/video.png">-->
<!--                    <span>Шлейфы и кабели</span>-->
<!--                </a>-->
<!--            </li>-->
<!--            <li class="l-menu-item">-->
<!--                <a href="">-->
<!--                    <img src="../pics/video.png">-->
<!--                    <span>Аксессуары</span>-->
<!--                </a>-->
<!--            </li>-->
        </ul>
    </div>
    <div class="main-box">
        <?php
        require_once '../DB/connection.php';
        $link = mysqli_connect($host, $user, $password, $database)
        or die("Ошибка " . mysqli_error($link));
        $ct=$_GET["ct"];
        $query ="SELECT * FROM product_tbl where category='$ct'";
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

        while ($row=mysqli_fetch_array($result))
        {
            echo '
        <div class="product-block">
            <div class="product-info">
                <a href="../pages/product.php?id='.$row['id'].'">
                    <img alt="Video for Icon" src="../pics/'.$row['pic'].'">
                    <p class="product-name">'.$row['naming'].'</p>
                    <p class="product-price">'.$row['price'].' р.<button >Добавить</button> </p>
                </a>
            </div>
        </div>';
        }
        mysqli_close($link);
        ?>

<!--        <div class="product-block">-->
<!--            <a href="">-->
<!--                <img alt="VIdeo for icon" src="../pics/video.png">-->
<!--                <p class="product-name">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad aperiam dolores harum laboriosam neque nostrum, perspiciatis saepe soluta vero?</p>-->
<!--                <p class="product-price">100 р.<button>Добавить</button></p>-->
<!--            </a>-->

<!--        </div>-->
<!--        <div class="product-block">-->
<!--            <a href="">-->
<!--                <img src="../pics/video.png">-->
<!--                <p class="product-name">Товар 3</p>-->
<!--                <p class="product-price">100 р.<button class="add-product-btn">Добавить</button></p>-->
<!--            </a>-->
<!---->
<!--        </div>-->
<!--        <div class="product-block">-->
<!--            <a href="">-->
<!--                <img src="../pics/video.png">-->
<!--                <p class="product-name">Товар 4</p>-->
<!--                <p class="product-price">100 р.<button class="add-product-btn">Добавить</button></p>-->
<!--            </a>-->
<!---->
<!--        </div>-->
<!--        <div class="product-block">-->
<!--            <a href="">-->
<!--                <img src="../pics/video.png">-->
<!--                <p class="product-name">Товар 5</p>-->
<!--                <p class="product-price">100 р.<button class="add-product-btn">Добавить</button></p>-->
<!--            </a>-->
<!---->
<!--        </div>-->
<!--        <div class="product-block">-->
<!--            <a href="">-->
<!--                <img src="../pics/video.png">-->
<!--                <p class="product-name">Товар 6</p>-->
<!--                <p class="product-price">100 р.<button class="add-product-btn">Добавить</button></p>-->
<!--            </a>-->
<!---->
<!--        </div>-->
<!--        <div class="product-block">-->
<!--            <a href="">-->
<!--                <img src="../pics/video.png">-->
<!--                <p class="product-name">Товар 7</p>-->
<!--                <p class="product-price">100 р.<button class="add-product-btn">Добавить</button></p>-->
<!--            </a>-->
<!---->
<!--        </div>-->
    </div>
</div>

</main>

<footer>
    <?php include_once ("../include/footer.php");?>
</footer>

</body>
</html>
