<?php
echo <<<HERE
    <div id="modal1" class="modal">
        <a class="back" href="#"></a>
        <div id="login-window">
            <div class="login-top">
                <h3 class="modal-title">Личный кабинет</h3>
                <a href="#" title="Закрыть" class="close">×</a>
            </div>
            <form action="#" method="post">
             <p>Логин/E-mail</p>
            <input type="text">
            <p>Пароль</p>
            <input type="password">
            <br>
             <button class="login-button" formaction="#modal2">Регистрация</button>
                <form>
                    <button class="login-button" >Войти</button>
                </form>
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
            <input type="text">
            <p>Логин</p>
            <input type="text">
            <p>Пароль</p>
            <input type="password">
            <p>Мобильный телефон</p>
            <input type="text">
            <p>Фамилия</p>
            <input type="text">
            <p>Имя</p>
            <input type="text">
            <p>Отчество</p>
            <input type="text">
                <button class="login-button" >Зарегестрироваться</button>
          </form>
            <form>
                <button class="login-button" type="submit" formaction="#modal1">Назад</button>
            </form>
        </div>
    </div>
HERE;
