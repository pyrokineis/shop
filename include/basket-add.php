<?php
include_once '../DB/connection.php';
if (isset($_GET['basket-add']))
{
    if(isset($_POST['prod_id']))
    {
        $basket_id=$_COOKIE["BASKET_ID"];
        $product_id=$_POST['prod_id'];
        $query0="select product_count from basket_content_tbl where product_id='$product_id' and basket_id='$basket_id'";
        $query0_res=mysqli_query($link,$query0) or die("Ошибка0" . mysqli_error($link));
        $row_num=mysqli_num_rows($query0_res);
        echo "lalalal '$row_num'";
        if ($row_num>0)
        {
            $row0=(mysqli_fetch_array($query0_res));
            echo "lolool '$row0'";
            if ($row0['product_count']>0)
            {
                $prod_count=$row0['product_count']+1;
            }
            $query1 = "update basket_content_tbl set product_count='$prod_count' where product_id='$product_id' and basket_id='$basket_id'";
            mysqli_query($link,$query1) or die("Ошибка1" . mysqli_error($link));
        }
        else
        {
            $query2="insert into basket_content_tbl(basket_id, product_id, product_count) values ('$basket_id','$product_id',1)";
            mysqli_query($link,$query2) or die("Ошибка2" . mysqli_error($link));
        }
        echo '<script>window.close()</script>';
    }
    else echo "Ошибка Пост Прод_АЙДИ";
}
else echo "Ошибка Гет Баскет-эдд";
