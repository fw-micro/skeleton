<?php

return [
    'controllers' => [
        \fw_micro\core\console\MigrateUp::class,
        \fw_micro\core\console\MigrateDown::class,
        \src\console\Server::class,
    ],
    'migrate' => [
        \src\migrate\Users::class,
        \src\migrate\Profile::class,
    ],
    'bootstrap' => [
        [
            'class' => \fw_micro\core\InitMonolog::class,
            'name' => 'console',
            'file' => __DIR__ . '/../log/' . date('YmdH') . '.console.log',
            'level' => \Monolog\Logger::DEBUG
        ],
        [
            'class' => \fw_micro\core\InitDB::class,
            'config' => new \fw_micro\db\sqlite\Config(__DIR__ . '/../db/file.db'),
        ],
    ],
];