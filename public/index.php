<?php

require __DIR__ . '/../../vendor/autoload.php';

$config = require __DIR__ . '/../config/main.php';

(new \fw_micro\core\Web())->run($config);
