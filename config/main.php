<?php

return [
    'router' => [
        '<controller>/<action>' => ['action' => 'index'],
        '' => ['controller' => 'home', 'action' => 'index'],
    ],
    'controllers' => [
        'home' => \src\controller\HomeController::class
    ],
    'bootstrap' => [
        \fw_micro\core\InitDebug::class,
        [
            'class' => \fw_micro\core\InitMonolog::class,
            'name' => 'app',
            'file' => __DIR__ . '/../log/' . date('YmdH') . '.app.log',
            'level' => \Monolog\Logger::DEBUG
        ],
        [
            'class' => \fw_micro\core\InitDB::class,
            'config' => new \fw_micro\db\sqlite\Config(__DIR__ . '/../db/file.db'),
        ],
        \fw_micro\core\router\Router::class,
        \fw_micro\core\InitController::class,
        [
            'class' => \fw_micro\core\InitResponse::class,
            'response' => \fw_micro\core\response\ResponseInterface::class,
        ],
    ],
];