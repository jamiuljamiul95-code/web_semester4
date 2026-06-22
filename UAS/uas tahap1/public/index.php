<?php
define('ROOT', dirname(__DIR__));
require_once ROOT . '/vendor/autoload.php';

// Load env
$env = parse_ini_file(ROOT . '/.env');
foreach ($env as $key => $value) {
    $_ENV[$key] = $value;
}

// Router sederhana
$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
require_once ROOT . '/routes/web.php';