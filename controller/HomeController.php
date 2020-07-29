<?php

namespace src\controller;

use fw_micro\core\controller\BaseController;
use fw_micro\pattern\Register\Register;

/**
 * Class HomeController
 * @package src\controller
 */
class HomeController extends BaseController
{
    protected $layout = __DIR__ . '/../view/layout/main.php';

    protected $accessList = [
        '*' => ['allow' => ['index']],
        '@' => ['allow' => ['logout']],
        '?' => ['allow' => ['register', 'login']],
    ];

    public function init()
    {
        Register::get()->lang = 'en';
        parent::init();
    }

    public function index()
    {
        return $this->render(__DIR__ . '/../view/home/index.php', []);
    }

    public function login()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (Register::get()->auth->login($_POST['login'], $_POST['password'])) {
                return $this->redirect('/');
            } else {
                return $this->redirect('/login?status=error');
            }
        }
        return $this->render(__DIR__ . '/../view/home/login.php', ['config' => ['action' => '/login']]);
    }

    public function register()
    {
        $error = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (Register::get()->auth->register($_POST['login'], $_POST['password'])) {
                return $this->login();
            }
            $error = Register::get()->auth->getErrors();
        }

        return $this->render(__DIR__ . '/../view/home/register.php', ['config' => ['action' => '/register'], 'error' => $error]);
    }

    public function logout()
    {
        Register::get()->auth->logout();
        return $this->redirect('/');
    }
}