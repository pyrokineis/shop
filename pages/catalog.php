
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
            $result = mysqli_query($link, $query) or die("Ошибка1 " . mysqli_error($link));

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
        </ul>
    </div>
    <div class="main-box">

        <?php
        require_once '../DB/connection.php';
        $link = mysqli_connect($host, $user, $password, $database)
        or die("Ошибка2 " . mysqli_error($link));


        if (!empty($_POST['search_query'])){
            if (isset($_POST['search_query'])){
                if (isset($_GET['go'])){
                    $string = $_POST['search_query'];
                    $query="SELECT * FROM product_tbl where naming like '%".$string."%' or category like '%".$string."%' or descr like '%".$string."%'";
                    $result=mysqli_query($link,$query) or die("Ошибка " . mysqli_error($link));
                    while ($row=mysqli_fetch_array($result))
                    {
                        echo '<div><p class="menu-header">Результаты поиска</p></div> 
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
