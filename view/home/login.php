<?php
use \fw_micro\core\auth\widget\AuthWidget;
$title = 'Login';

echo (new AuthWidget())->begin($config);
