<?php
define('APP_ROOT_DIR', __DIR__);
define('APP_VIEW_DIR', APP_ROOT_DIR . '/View/');
define('APP_DEFAULT_ROOT', 'home');
define('APP_DB_HOST', 'localhost');
define('APP_DB_PORT', '3306');
define('APP_DB_NAME', 'dwit');
define('APP_DB_USER', 'root');
define('APP_DB_PASS', 'root');

try {
    $pdo = new PDO('mysql:host=' . APP_DB_HOST . ';dbname=' . APP_DB_NAME . ';port=' . APP_DB_PORT, APP_DB_USER, APP_DB_PASS);
} catch (PDOException $m) {
    die($m->getMessage());
}
$pdo->query("SET NAME 'utf8';");