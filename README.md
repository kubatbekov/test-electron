<h1 align="center">Тестовое задание</h1>

Тестовое задание. Проверка кандидата на умение верстать адаптивно по psd макету. Работа с локальными объектами. 

1. Использовать grid сетку на 12 колонок (флоаты или флексы, можно bootstrap)
2. Режим адаптива десктоп и мобильный (320px).
3. Не использовать сторонние js плагины.
4. Значение статуса профиля должно сохраняться / меняться при его сохранении (при нажатии на Enter либо на кнопку сохранить), по типу как "вконтакте". Использовать localStorage. 
5. По клику на логин профиля в хедере (либо с аватарку) всплывает меню пользователя. Пункты меню указаны в макете. 
6. В мобильном разрешении должен быть скролл фотографий пользователя (влево/вправо) без использования плагинов. Сам скролл не должен быть виден. Кнопок переключений нет, только пролистывание влево/вправо тачем.
7. Реализовать систему комментирования без обновления страницы с использованием СУБД sqlite. Добавление и удаление комментария 

<h3 align="center">Установка проекта</h5>

1. Клонировать репозиторий

```sh
$ https://github.com/kubatbekov/test-electron.git
```
2. Перейти в папку проекта

```sh
$ cd test-electron
```
3. Установить зависимости через composer

```sh
$ composer install
```
4. Импортировать дамп базы данных (файл находиться в папке dump/test-electron.sql):

5. Настроить подключение к БД MYSQl в файле config/db.php 

```sh
<?php

return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=mysql;dbname=test-electron',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
    ],
];
```

<h3>Как посмотреть тестовое задание?</h3>
Перейти по адресу: <b>http://localhost/test-electron</b>
<p>Тестовый юзер:</p>

```sh
 Login: electron
 Password: electron
```

