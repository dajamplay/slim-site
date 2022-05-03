<?php

use Slim\App;

/**
 * Настроить красивые ошибки
 */
return function (App $app) {
    $settings = $app->getContainer()->get('settings');

    $app->addErrorMiddleware(
        $settings['displayErrorDetails'],
        $settings['logErrorDetails'],
        $settings['logErrors'],
    );
};