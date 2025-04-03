<?php
// index.php
$page = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$file = __DIR__ . '/pages/' . ($page ?: 'home') . '.php';

if (file_exists($file)) {
    include $file;
} else {
    http_response_code(404);
    include __DIR__ . '/pages/404.php';
}
