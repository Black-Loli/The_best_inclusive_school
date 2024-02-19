<?php
$bdName = 'the_best_inclusive_school';
$bdUser = 'root';
$bdPass = 'ainokitsune143';
$bdHost = 'localhost';
$bd = null;
try {
    //подключаемся к базе
    $bd = new PDO('mysql:host=' . $bdHost . ';dbname=' . $bdName, $bdUser, $bdPass);
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bd->exec('SET CHARACTER SET utf8');
    $bd->exec('SET lc_time_names="ru_RU"');
} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
}

