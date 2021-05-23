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
          
          <form action="#" method="post">
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
            <form method="post" action="login-back.php?regis">
                 <button class="login-button">Зарегестрироваться</button>
            </form>

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
HERE;
