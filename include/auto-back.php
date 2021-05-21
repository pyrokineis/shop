<?php
include_once ("../include/header.php");
include_once ("../include/login_win.php");
if ($_SESSION["name"]="None")
{
    echo '<script>window.location.href="../pages/index.php#modal1"</script>';
}
else
{
    echo '<script>window.location.href="LK-back.php"</script>';
}

