<?php

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {

    var_dump($context['CORS_ALLOW_ORIGIN']);
    var_dump($context['TRUSTED_HOSTS']);
    var_dump($context['TRUSTED_PROXIES']);
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
