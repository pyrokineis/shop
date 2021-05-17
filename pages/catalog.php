
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
            $query ="SELECT * FROM category_tbl";
            $result = mysqli_query($link, $query) or die("Ошибка1 " . mysqli_error($link));

            while ($row=mysqli_fetch_array($result))
            {
                echo '
                <li class="l-menu-item">
                <a href="catalog.php?ct='.$row['category_name']. '">
                    <span>' .$row['category_name'].'</span>
                </a>
            </li>';
            }
            ?>
        </ul>
    </div>
    <div class="main-box">

        <?php
        if (!empty($_POST['search_query'])){
            if (isset($_POST['search_query'])){
                if (isset($_GET['go'])){
                    $string = $_POST['search_query'];
                    $query="SELECT * FROM product_tbl where naming like '%".$string."%' or category like '%".$string."%' or descr like '%".$string."%'";
                    $result=mysqli_query($link,$query) or die("Ошибка " . mysqli_error($link));
                    echo '<div><p class="menu-header">Результаты поиска</p></div>';
                    while ($row=mysqli_fetch_array($result))
                    {
                        echo '
                        <form action="../include/basket-add.php?basket-add" method="post" target="_blank">
                            <div class="product-block">
                                <div class="product-info">
                                    <a href="../pages/product.php?id=' .$row['id'].'">
                                        <img alt="Video for Icon" src="../pics/'.$row['category'].'/'.$row['pic'].'">
                                        <p class="product-name">'.$row['naming'].'</p>
                                        <p class="product-price">'.$row['price'].' р.<button name="prod_id" type="submit" value="'.$row['id'].'">Добавить</button> </p>
                                    </a>
                                </div>
                            </div>
                        </form>';
                    }
                }
            }
        }

        else{
            $ct=$_GET["ct"];
            $query ="SELECT * FROM product_tbl where category='$ct'";
            $result = mysqli_query($link, $query) or die("Ошибка3 " . mysqli_error($link));

            while ($row=mysqli_fetch_array($result))
            {
                echo '
                <form action="../include/basket-add.php?basket-add" method="post" target="_blank">
                    <div class="product-block">
                        <div class="product-info">
                            <a href="../pages/product.php?id=' .$row['id'].'">
                                <img alt="Video for Icon" src="../pics/'.$row['category'].'/'.$row['pic'].'">
                                <p class="product-name" name="prod_name">'.$row['naming'].'</p>
                                <p class="product-price">'.$row['price'].' р.<button name="prod_id" type="submit" value="'.$row['id'].'">Добавить</button> </p>
                            </a>
                        </div>
                    </div>
                </form>';
            }

        }
        mysqli_close($link);
        ?>

    </div>
</div>

</main>

<footer>
    <?php include_once ("../include/footer.php");?>
</footer>

</body>
</html>
