<?php
include_once '../DB/connection.php';
if (isset($_GET['login']))
{
    if (isset($_POST['login-input']) && isset($_POST['password-input']))
    {
        $login = $_POST['login-input'];
        $password = $_POST['password-input'];
        //TODO проверки содержания

        $query="select * from client_tbl where login='$login' and client_password='$password'";
        $result = mysqli_query($link,$query) or die("Ошибка1" . mysqli_error($link));
        $row_num=mysqli_num_rows($result);
        if ($row_num==1)
        {
            session_start();
            $_SESSION["name"]=$login;
            echo '<script>window.location.href="../pages/LK.php"</script>';
        }
    }
}
else if (isset($_GET['regis']))
{
    if (isset($_POST['mail-input']) && isset($_POST['login-input']) && isset($_POST['password-input']) && isset($_POST['surname-input'])
        && isset($_POST['name-input'])  && isset($_POST['mobile-input']) && isset($_POST['patro-input']))
    {
        $mail=$_POST['mail-input'];
        $login=$_POST['login-input'];
        $password=$_POST['password-input'];
        $mobile=$_POST['mobile-input'];
        $surname=$_POST['surname-input'];
        $name=$_POST['name-input'];
        $patro=$_POST['patro-input'];
        //TODO проверки содержания
    }

}
