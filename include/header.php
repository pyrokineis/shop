<?php
session_start();
require_once '../DB/connection.php';
require_once '../include/cookie-set.php';
include_once("../include/login_win.php");


echo <<<HERE

<div class="header-container">
    <div class="h1-block">
        <a href="index.php"><h1>Железяка.ru</h1></a>
    </div>
    <div class="panel-block">
        <div class="panel">
            <a href="../pages/basket.php">Корзина</a>
            <form action="../include/LK-back.php" method="post">
                <button type="submit" class="LK-btn" >Личный кабинет</button>
            </form>  
        </div>
    </div>

    <nav>
        <ul class="upper-menu">
            <a href="catalog.php?ct=Видеокарты"><li class="upper-menu-item">Каталог</li></a>
            <li class="upper-menu-item">Оплата и доставка</li>
            <li class="upper-menu-item">Акции</li>
            <li class="upper-menu-item">О компании</li>
            <li class="upper-menu-item">Контакты</li>
        </ul>
    </nav>
</div>


   <form name="search" method="post" action="catalog.php?go">
    <div class="search-container">
        <div class="search-panel">
            <input type="search" name="search_query" placeholder="  Поиск на сайте">
        </div>
            <div class="search-button">
                <button type="submit">Найти</button>
            </div>
        </form>        
    </div>
</form>

HERE;
