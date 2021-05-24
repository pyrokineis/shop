<?php
include_once("../include/header.php");
if (!isset($_SESSION["login"]))
{
    echo '<script>window.location.href="../pages/index.php#modal1"</script>';
}
else
{
    echo '<script>window.location.href="../pages/LK.php"</script>';
}



