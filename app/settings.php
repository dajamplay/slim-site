<?php

use Psr\Container\ContainerInterface;

/**
 * Добавить опции отладки
 */
return function (ContainerInterface $container) {
    $container->set('settings', function () {
        return [
            'displayErrorDetails' => true,
            'logErrorDetails' => true,
            'logErrors' => true
        ];
    });
};
