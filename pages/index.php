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
    <div class="main-container">
        <div class="main-box">
            <div class="categoriesBox-header">
                <h2 class="categoriesBox-title">
                    Категории
                </h2>
            </div>

            <div class="categories-container">
                <?php
//                echo $_SESSION["login"];
                $query ="SELECT * FROM category_tbl";
                $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
                while ($row=mysqli_fetch_array($result))
                {
                    echo '
                <div class="categories-item">
                    <a href="catalog.php?ct='.$row['category_name'].'">
                    <div class="index_item_img">
                     <img src="../pics/'.$row['category_name'].'.jpg" />
                    </div>
                        <div class="categories-title">
                        ' . $row['category_name'].'
                        </div>
                    </a>
                </div>';
                }
                mysqli_close($link);
                ?>
            </div>
            <div class="banners-container">
                <div class="banner">
                    <h2 class="banner-title">
                        Скидки
                    </h2>
                    <img src="../pics/video2.png">

                </div>
                <div class="banner" >
                    <h2 class="banner-title">
                        Новинки
                    </h2>
                    <img src="../pics/video2.png">

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
