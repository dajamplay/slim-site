<?php

/**
 * Контейнер
 */
use DI\Container;

/**
 * Bridge соеденит приложение с контейнером
 */
use DI\Bridge\Slim\Bridge as SlimAppFactory;

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
 * Создать приложение
 */
$app = SlimAppFactory::create($container);

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