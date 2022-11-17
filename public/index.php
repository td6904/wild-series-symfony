<?php

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};

// Using Yarn  in this project, not NPM, never change half way through. According to quest.
// LTS = Long Term Strategy
// 1. NVM (Node Version Manager)
