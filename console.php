<?php

require __DIR__ . '/../vendor/autoload.php';

$config = require __DIR__ . '/config/console.php';

(new \fw_micro\core\Console())->run($config);
