<?php
echo <<<HERE
    <div id="modal1" class="modal">
        <a class="back" href="#"></a>
        <div id="login-window">
            <div class="login-top">
                <h3 class="modal-title">Личный кабинет</h3>
                <a href="#" title="Закрыть" class="close">×</a>
            </div>
            <form action="../include/login-back.php?login" method="post">
             <p>Логин/E-mail</p>
            <input type="text" name="login-input">
            <p>Пароль</p>
            <input type="password" name="password-input">
            <br>
             <button class="login-button" formaction="#modal2">Регистрация</button>
             <button class="login-button" name="logIn" type="submit">Войти</button>
            </form>
        </div>
    </div>
    
    <div id="modal2" class="modal">
        <a class="back" href="#">  </a>
        <div id="registration-window">
            <div class="login-top">
                <h3 class="modal-title">Личный кабинет</h3>
                <a href="" title="Закрыть" class="close">×</a>
            </div>
         
<!--          <form action="#" method="post">-->
           <form method="post" action="../include/login-back.php?regis">
            <p>E-mail</p>
            <input type="text" name="mail-input">
            <p>Логин</p>
            <input type="text" name="login-input">
            <p>Пароль</p>
            <input type="password" name="password-input">
            <p>Повторите пароль</p>
            <input type="password" name="password2-input">
            <p>Мобильный телефон</p>
            <input type="text" name="mobile-input">
            <p>Фамилия</p>
            <input type="text" name="surname-input">
            <p>Имя</p>
            <input type="text" name="name-input">
            <p>Отчество</p>
            <input type="text" name="patro-input">
            <button class="login-button">Зарегестрироваться</button>
<!--            </form>-->

          </form>
            <form method="post">
                <button class="login-button" type="submit" formaction="#modal1">Назад</button>
            </form>
        </div>
    </div>
    
<div id="modalNoUser" class="modal">
        <a class="back" href="#"></a>
        <div id="login-window">
            <div class="login-top">
                <h3 class="modal-title">Ошибка</h3>
                <a href="#" title="Закрыть" class="close">×</a>
            </div>
            <b>Ошибка! Пользователь с таким логином и паролем не найден</b>
            <br>
        </div>
    </div>
    
<div id="modalExUser" class="modal">
        <a class="back" href="#"></a>
        <div id="login-window">
            <div class="login-top">
                <h3 class="modal-title">Ошибка</h3>
                <a href="#" title="Закрыть" class="close">×</a>
            </div>
            <b>Ошибка! Пользователь с таким логином уже существует</b>
            <br>
        </div>
    </div>

<div id="modalSucReg" class="modal">
        <a class="back" href="#"></a>
        <div id="login-window">
            <div class="login-top">
                <h3 class="modal-title">Успешная регистрация</h3>
                <a href="#" title="Закрыть" class="close">×</a>
            </div>
            <b>Вы успешно зарегистрированы!</b>
            <br>
        </div>
    </div>

<div id="modalPswdErr" class="modal">
        <a class="back" href="#"></a>
        <div id="login-window">
            <div class="login-top">
                <h3 class="modal-title">Ошибка</h3>
                <a href="#" title="Закрыть" class="close">×</a>
            </div>
            <b>Пароли не совпадают!</b>
            <br>
        </div>
    </div>

<div id="modalFieldErr" class="modal">
        <a class="back" href="#"></a>
        <div id="login-window">
            <div class="login-top">
                <h3 class="modal-title">Ошибка</h3>
                <a href="#" title="Закрыть" class="close">×</a>
            </div>
            <b>Неправильно заполнены поля!</b>
            <br>
        </div>
    </div>
    
<div id="modalPostErr" class="modal">
        <a class="back" href="#"></a>
        <div id="login-window">
            <div class="login-top">
                <h3 class="modal-title">Ошибка</h3>
                <a href="#" title="Закрыть" class="close">×</a>
            </div>
            <b>Пост еррор май дуд!</b>
            <br>
        </div>
    </div>
    
     <div id="modalPswrdChng" class="modal">
        <a class="back" href="#"></a>
        <div id="login-window">
            <div class="login-top">
                <h3 class="modal-title">Сменить пароль</h3>
                <a href="#" title="Закрыть" class="close">×</a>
            </div>
            <form action="../pages/LK.php?PswrdChng" method="post">
             <p>Старый пароль</p>
            <input type="password" name="old-password-input">
            <p>Новый пароль</p>
            <input type="password" name="new-password1-input">
            <p>Повторите пароль</p>
            <input type="password" name="new-password2-input">
            <br>
             <button class="login-button" type="submit">Сменить</button>
            </form>
        </div>
    </div>
    
    <div id="modalWrongPsrd" class="modal">
        <a class="back" href="#"></a>
        <div id="login-window">
            <div class="login-top">
                <h3 class="modal-title">Ошибка</h3>
                <a href="#" title="Закрыть" class="close">×</a>
            </div>
            <b>Неверный пароль!</b>
            <br>
        </div>
    </div>

HERE;
