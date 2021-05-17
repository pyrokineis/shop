<?php
include_once '../DB/connection.php';
if (isset($link)) {
    if (isset($_COOKIE["BASKET_ID"]) && mysqli_num_rows(mysqli_query($link, "select baskets_id from baskets_tbl where baskets_id=" . $_COOKIE["BASKET_ID"])) == 1) {
//        echo "ETO TI? Nomer " . $_COOKIE["BASKET_ID"] . "<br>";
        setcookie("BASKET_ID", $_COOKIE["BASKET_ID"], time() + (30 * 24 * 60 * 60), "/");
    } else {
        $res = mysqli_query($link, "SELECT MAX(baskets_id) as baskets_id FROM baskets_tbl");
        $row = mysqli_fetch_array($res);
        $row['baskets_id'] = $row['baskets_id'] + 1;
        while (mysqli_query($link, "INSERT INTO baskets_tbl(baskets_id) VALUE (" . ($row["baskets_id"]) . ")") != 1)
            $row['baskets_id'] = $row['baskets_id'] + 1;
        setcookie("BASKET_ID", $row['baskets_id'], time() + (30 * 24 * 60 * 60), "/");
//        echo " NOVIY" . $row['baskets_id'] . "<br />";
    }
}
