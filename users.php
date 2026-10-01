<?php
header('Content-Type: text/html; charset=utf-8');

spl_autoload_register(function ($className) {
    require_once __DIR__ . '/classes/' . $className . '.php';
});

// Задание 1-2
$user1 = new User('Иван', 'ivan', '1111');
$user2 = new User('Мария', 'maria', '2222');
$user3 = new User('Пётр', 'petr', '3333');

$user1->showInfo();
$user2->showInfo();
$user3->showInfo();

// Задание 3
$user = new SuperUser('Админ', 'admin', 'secret', 'administrator');
$user->showInfo();

// Задание 4
echo '<pre>';
print_r($user->getInfo());
echo '</pre>';

echo 'Авторизация (верные данные): ';
var_dump($user->auth('admin', 'secret'));
echo '<br>Авторизация (неверные данные): ';
var_dump($user->auth('admin', 'wrong'));
echo '<br><br>';

// Задание 5
echo 'Всего обычных пользователей: ' . User::$count . '<br>';
echo 'Всего супер-пользователей: ' . SuperUser::$count . '<br><br>';
