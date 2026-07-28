<?php

// Set required Vercel environment variables so you don't have to do it manually in the dashboard
$_ENV['APP_KEY'] = $_SERVER['APP_KEY'] = 'base64:Ua7e8nEkCPU4E/J0eEAh14XQEVDhaMGqUmKjjLjpgE4=';
$_ENV['APP_ENV'] = $_SERVER['APP_ENV'] = 'production';
$_ENV['APP_DEBUG'] = $_SERVER['APP_DEBUG'] = 'true';
$_ENV['LOG_CHANNEL'] = $_SERVER['LOG_CHANNEL'] = 'stderr';
$_ENV['VIEW_COMPILED_PATH'] = $_SERVER['VIEW_COMPILED_PATH'] = '/tmp';
$_ENV['SESSION_DRIVER'] = $_SERVER['SESSION_DRIVER'] = 'cookie';
$_ENV['CACHE_STORE'] = $_SERVER['CACHE_STORE'] = 'array';

putenv('APP_KEY=' . $_ENV['APP_KEY']);
putenv('APP_ENV=' . $_ENV['APP_ENV']);
putenv('APP_DEBUG=' . $_ENV['APP_DEBUG']);
putenv('LOG_CHANNEL=' . $_ENV['LOG_CHANNEL']);
putenv('VIEW_COMPILED_PATH=' . $_ENV['VIEW_COMPILED_PATH']);
putenv('SESSION_DRIVER=' . $_ENV['SESSION_DRIVER']);
putenv('CACHE_STORE=' . $_ENV['CACHE_STORE']);

require __DIR__ . '/../public/index.php';