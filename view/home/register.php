<?php
use \fw_micro\core\auth\widget\RegisterWidget;
$title = 'Register';

if (count($error)) {
    echo '<ul>';
    foreach ($error as $item) {
        echo '<li><pre>';
        var_dump($item);
        echo '</pre></li>';
    }
    echo '</ul>';
}

echo (new RegisterWidget())->begin($config);