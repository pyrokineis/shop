<?php
echo <<<HERE

    
        <div class="h1-block">
        <a href="index.php"><h1>Железяка.ru</h1></a>
    </div>
    <div class="panel-block">
        <div class="panel">
            <a>Корзина</a>
            <a href="#modal1">Личный кабинет</a>
        </div>
    </div>

    <nav>
        <ul class="upper-menu">
            <a href="catalog.php"><li class="upper-menu-item">Каталог</li></a>
            <li class="upper-menu-item">Оплата и доставка</li>
            <li class="upper-menu-item">Акции</li>
            <li class="upper-menu-item">О компании</li>
            <li class="upper-menu-item">Контакты</li>
        </ul>
    </nav>



    <div class="search-container">
        <div class="search-panel">
            <input type="text" name="search" placeholder="  Поиск на сайте">
        </div>
        <div class="search-button">
            <button type="submit">Найти</button>
        </div>
    </div>
HERE;
