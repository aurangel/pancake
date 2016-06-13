## Введение

Pancake это мой личный блог написанный на Laravel 5.2 и PJAX. Надеюсь, никому не придет в голову посылать сюда pull-request :)

### Административная панель

![](http://aurathemes.ru/admin.png)

## Библиотеки

* [amsul/pickadate](https://github.com/amsul/pickadate.js);
* [luruke/barba.js](https://github.com/luruke/barba.js);
* [selectize/selectize](https://github.com/selectize/selectize.js);
* [OwlFonk/OwlCarousel](https://github.com/OwlFonk/OwlCarousel);
* [metafizzy/isotope](https://github.com/metafizzy/isotope);

## В планах

* php тестирование;

## Особенности

* Административная панель;
* Rss лента;
* Карта сайта;
* И ещё что-то;

## Требования к окружению

* PHP 5.5+
* Laravel 5.2

## Установка

### 1. Клонировать репу

    git clone https://github.com/aurangel/pancake

### 2. Установить Composer

    cd laravel-blog
    composer install
    
### 3. Настроить базу данных

Внести данные для подключения в .env, затем выполнить: 

    php artisan migrate

Усеять просторные поля базы данных, если потребуется: 

    php artisan db:seed


## Лицензия

Copyright (c) 2016 aurangel.

The MIT License (MIT). Please see [Opensource MIT License](http://www.opensource.org/licenses/MIT) for more information.
