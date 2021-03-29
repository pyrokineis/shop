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
    <?php include_once("../include/login_win.php");?>
    <div class="main-container">
        <div class="main-box">
            <div class="categoriesBox-header">
                <h2 class="categoriesBox-title">
                    Категории
                </h2>
            </div>

            <div class="categories-container">
                <?php
                require_once '../DB/connection.php';
                $link = mysqli_connect($host, $user, $password, $database)
                or die("Ошибка " . mysqli_error($link));

                $query ="SELECT * FROM category_tbl";
                $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
                while ($row=mysqli_fetch_array($result))
                {
                    echo '
                <div class="categories-item">
                    <a href="catalog.php?ct='.$row['category_name'].'">
                        <img src="../pics/video.png" />
                        <div class="categories-title">
                        '. $row['category_name'].'
                        </div>
                    </a>
                </div>';
                }
                mysqli_close($link);
                ?>
<!--                <div class="categories-item">-->
<!--                    <a href="catalog.php">-->
<!--                        <img src="../pics/video.png" />-->
<!--                        <div class="categories-title">-->
<!--                            Видеокарты-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </div>-->
<!---->
<!--                <div class="categories-item">-->
<!--                    <a href="">-->
<!--                        <img src="../pics/video.png" />-->
<!--                        <div class="categories-title">-->
<!--                            Материнские платы-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="categories-item">-->
<!--                    <a  href="">-->
<!--                        <img src="../pics/video.png" />-->
<!--                        <div class="categories-title">-->
<!--                            Процессоры-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="categories-item">-->
<!--                    <a  href="">-->
<!--                        <img src="../pics/video.png" />-->
<!--                        <div class="categories-title">-->
<!--                            Оперативная память-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="categories-item">-->
<!--                    <a  href="">-->
<!--                        <img src="../pics/video.png" />-->
<!--                        <div class="categories-title">-->
<!--                            Блоки питания-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="categories-item">-->
<!--                    <a  href="">-->
<!--                        <img src="../pics/video.png" />-->
<!--                        <div class="categories-title">-->
<!--                            HDD/SSD-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="categories-item">-->
<!--                    <a  href="">-->
<!--                        <img src="../pics/video.png" />-->
<!--                        <div class="categories-title">-->
<!--                            Корпусы-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="categories-item">-->
<!--                    <a  href="">-->
<!--                        <img src="../pics/video.png" />-->
<!--                        <div class="categories-title">-->
<!--                            Кулеры и СО-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="categories-item">-->
<!--                    <a  href="">-->
<!--                        <img src="../pics/video.png" />-->
<!--                        <div class="categories-title">-->
<!--                            Щлейфы и кабели-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="categories-item">-->
<!--                    <a  href="">-->
<!--                        <img src="../pics/video.png" />-->
<!--                        <div class="categories-title">-->
<!--                            Аксессуары-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </div>-->
            </div>
            <div class="banners-container">
                <div class="banner">
                    <h2 class="banner-title">
                        Скидки
                    </h2>
                    <img src="../pics/video.png">

                </div>
                <div class="banner" >
                    <h2 class="banner-title">
                        Новинки
                    </h2>
                    <img src="../pics/video.png">

                </div>
            </div>
        </div>
    </div>

</main>

<footer>
<!--    --><?php //include_once ("../include/footer.php");?>
    <div class="footer-main-container">
        <ul class="footer-column">
            <li>чота1</li>
            <li>чота1</li>
            <li>чота1</li>
            <li>чота1</li>
        </ul>
        <ul class="footer-column">
            <li>чота2</li>
            <li>чота2</li>
            <li>чота2</li>
            <li>чота2</li>
        </ul>
        <ul class="footer-column">
            <li>чота3</li>
            <li>чота3</li>
            <li>чота3</li>
            <li>чота3</li>
        </ul>
    </div>
</footer>

</body>
</html>
