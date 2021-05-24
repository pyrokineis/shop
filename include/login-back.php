<?php
include_once '../DB/connection.php';
if (isset($_GET['login']))
{
    if (isset($_POST['login-input']) && isset($_POST['password-input']))
    {
        $login = $_POST['login-input'];
        $password = $_POST['password-input'];
        if ($login!="" && $password!="")
        {
            $query="select * from client_tbl where login='$login' and client_password='$password'";
            $result = mysqli_query($link,$query) or die("Ошибка1" . mysqli_error($link));
            $row=mysqli_fetch_array($result);
            $row_num=mysqli_num_rows($result);
            if ($row_num==1)
            {
                    session_start();
                    $_SESSION["login"]=$login;
                    echo '<script>window.location.href="../pages/LK.php"</script>';

            }
            else
            {
                echo '<script>window.location.href="../pages/index.php#modalNoUser"</script>';
            }
        }

    }
}
else if (isset($_GET['regis']))
{
    if (isset($_POST['mail-input']) && isset($_POST['login-input']) && isset($_POST['password-input']) && isset($_POST['password2-input']) && isset($_POST['surname-input'])
        && isset($_POST['name-input'])  && isset($_POST['mobile-input']) && isset($_POST['patro-input']))
    {
        $mail=$_POST['mail-input'];
        $login=$_POST['login-input'];
        $password=$_POST['password-input'];
        $password2=$_POST['password2-input'];
        $mobile=$_POST['mobile-input'];
        $surname=$_POST['surname-input'];
        $name=$_POST['name-input'];
        $patro=$_POST['patro-input'];
        If ($mail!="" && $login!="" && $password!="" && $password2!="" && $mobile!="")
        {
            if ($password==$password2)
            {
                $query="select login from client_tbl where login='$login'";
                $result=mysqli_query($link,$query) or die("Ошибка2".mysqli_error($link));
                if($row=mysqli_fetch_array($result))
                {
                    echo '<script>window.location.href="../pages/index.php#modalExUser"</script>';
                }
                else {
                    $query="insert into client_tbl(login,email,client_password,phone, firstname, surname, patro) 
                        values ('$login','$mail','$password','$mobile','$name','$surname','$patro')";
                    mysqli_query($link,$query) or die ("Ошибка3".mysqli_error($link));
                    $id=$_COOKIE["BASKET_ID"];
                    $query="update baskets_tbl set client_login='$login' where baskets_id='$id'";
                    mysqli_query($link,$query) or die ("Ошибка4".mysqli_error($link));
                    echo '<script>window.location.href="../pages/index.php#modalSucReg"</script>';
                }
            }
            else{
                echo '<script>window.location.href="../pages/index.php#modalPswdErr"</script>';
            }
        }
        else {
            echo '<script>window.location.href="../pages/index.php#modalFieldErr"</script>';
        }
    }
    else {
        echo '<script>window.location.href="../pages/index.php#modalPostErr"</script>';
    }

}
else if (isset($_GET["exit"]))
{
    session_start();
    session_destroy();
//    unset($_SESSION["login"]);
    echo '<script>window.location.href="../pages/index.php"</script>';
}
