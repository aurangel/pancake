# Pancake [![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
Простая платформа для ведения личных записей, написанная на Laravel 5.2.

## Возможности
* Навигация без перезагрузки страницы (PJAX)
* Административная часть
    * Авторизация пользователей
    * Работа с записями и тегами (CRUD)
    * Загрузка изображений на сервер
* DISQUS комментарии
* Случайные цитаты
* Отправка email
* Карта сайта
* RSS лента

## TODO
- [x] HTTPS
- [ ] "Мне нравится"
- [ ] Категории
- [ ] Архив

## Установка (Laravel 5.x)
### Клонировать репозиторий

    git clone https://github.com/aurangel/pancake

### Установить Composer зависимости

    cd pancake
    composer install
    
### Настроить подключение и базу данных

Ввести данные для подключения в .env файле, в корне приложения, затем там же выполнить: 

    php artisan migrate

Если нужно, усеять просторные поля базы данных фейковыми данными: 

    php artisan db:seed

## Библиотеки

- [amsul/pickadate](https://github.com/amsul/pickadate.js)
- [luruke/barba.js](https://github.com/luruke/barba.js)
- [selectize/selectize](https://github.com/selectize/selectize.js)
- [OwlFonk/OwlCarousel](https://github.com/OwlFonk/OwlCarousel)
- [metafizzy/isotope](https://github.com/metafizzy/isotope)
