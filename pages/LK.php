<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Железяка.ru</title>
    <link rel="stylesheet" type="text/css" href="../css/based.css">
    <link rel="stylesheet" type="text/css" href="../css/LK.css">
</head>
<body>

<header>
    <?php include_once ("../include/header.php");?>
    <?php include_once ("../include/login_win.php");?>
</header

<main>
    <?php
    $login=$_SESSION["login"];
    if (isset($_GET['save']))
    {
        if (isset($_POST['mail-input']) && isset($_POST['phone-input']))
        {
//            $newlogin=$_POST['new-login-input'];
            $mail=$_POST['mail-input'];
            $phone=$_POST['phone-input'];
            $surname=$_POST['surname-input'];
            $firstname=$_POST['firstname-input'];
            $patro=$_POST['patro-input'];
            $query="update client_tbl set email='$mail', phone='$phone', firstname='$firstname', surname='$surname', patro='$patro' where login='$login'";
            mysqli_query($link,$query) or die("Ошибка1  ".mysqli_error($link));
//            $_SESSION["login"]=$newlogin;
            echo '<script>window.location.href="../pages/LK.php?done"</script>';
        }
    }

    if (isset($_GET['PswrdChng']))
    {
        if (isset($_POST['old-password-input']) && isset($_POST['new-password1-input']) && isset($_POST['new-password2-input']) )
        {
            $oldPswrd=$_POST['old-password-input'];
            $newPswrd1=$_POST['new-password1-input'];
            $newPswrd2=$_POST['new-password2-input'];
            $query="select client_password from client_tbl where login='$login'";
            $row=mysqli_fetch_array(mysqli_query($link,$query));
            $origPswrd=$row['client_password'];
            if ($oldPswrd==$origPswrd)
            {
                if($newPswrd1==$newPswrd2)
                {
                    $query="update client_tbl set client_password='$newPswrd1' where login='$login'";
                    mysqli_query($link,$query) or die ("Ошибка1   ".mysqli_error($link));
                }
                else
                    {
                        echo '<script>window.location.href="../pages/LK.php#modalPswdErr"</script>';
                    }
            }
            else
                {
                    echo '<script>window.location.href="../pages/LK.php#modalWrongPsrd"</script>';
                }

        }
    }

    $query="select * from client_tbl where login='$login'";
    $row=mysqli_fetch_array(mysqli_query($link,$query));
    $email=$row['email'];
    $phone=$row['phone'];
    $firstname=$row['firstname'];
    $surname=$row['surname'];
    $patro=$row['patro'];
    ?>
    <div class="LK-main-container">
        <div class="LK-header">
            <h1>Личный кабинет: <?= $login ?> </h1>
            <form method="post" action="../include/login-back.php?exit">
                <button id="exit-btn" type="submit">Выйти</button>
            </form>
        </div>
        <div class="LK-data-container">
            <form method="post" action="LK.php?save">
                <p>Логин</p>
                <input name="new-login-input" readonly value="<?= $login ?>">
                <p>Почта</p>
                <input name="mail-input" value="<?= $email ?>">
                <p>Телефон</p>
                <input name="phone-input" value="<?= $phone ?>">
                <p>Фамилия</p>
                <input name="surname-input" value="<?= $surname ?>">
                <p>Имя</p>
                <input name="firstname-input" value="<?= $firstname ?>">
                <p>Отчество</p>
                <input name="patro-input" value="<?= $patro ?>">
                <br>
                <button id="exit-btn" type="submit">Сохранить изменения</button>
            </form>
            <br>
            <br>
            <a href="LK.php#modalPswrdChng" class="password-change-href">Изменить пароль</a>

        </div>
        <div class="LK-orders-container">
            <div class="LK-orders-header">
                <h1>Заказы</h1>
            </div>
            <div>

            </div>
        </div>
    </div>

</main>

 </html>

