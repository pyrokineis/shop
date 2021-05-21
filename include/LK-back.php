<?php
include_once("../include/header.php");
if ($_SESSION["name"]=="None")
{
    echo '<script>window.location.href="../pages/index.php#modal1"</script>';
}
else
{
    echo '<script>window.location.href="../pages/LK.php"</script>';
}

