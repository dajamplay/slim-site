<?php

use DI\Container;
use Slim\Factory\AppFactory;

/**
 * Подключить автозагрузку классов
 */
require __DIR__ . '/../vendor/autoload.php';

/**
 * Создать PHP DI контейнер
 */
$container = new Container;

/**
 * Записать настройки в контейнер в поле settings
 */
$settings = require __DIR__ . '/../app/settings.php';
$settings($container);

/**
 * Передать новый PHP DI контейнер в Slim
 */
AppFactory::setContainer($container);

/**
 * Создать приложение
 */
$app = AppFactory::create();

/**
 * Создать промежуточное ПО
 */
$middleware = require __DIR__ . '/../app/middleware.php';
$middleware($app);

/**
 * Определить маршруты
 */
$routes = require __DIR__ . '/../app/routes.php';
$routes($app);

/**
 * Запустить приложение
 */
$app->run();