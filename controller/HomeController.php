<?php

namespace src\controller;

use fw_micro\core\controller\BaseController;

/**
 * Class HomeController
 * @package src\controller
 */
class HomeController extends BaseController
{
    protected $layout = __DIR__ . '/../view/layout/main.php';

    public function index()
    {
        return $this->render(__DIR__ . '/../view/home/index.php', ['a' => 'hello', 'lang' => 'en']);
    }
}