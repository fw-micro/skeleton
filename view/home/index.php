<?php
/** @var \fw_micro\core\controller\BaseController $this */
/** @var \fw_micro\core\response\Response $response */

$title = 'Home';

$isLogin = \fw_micro\pattern\Register\Register::get()->auth->isLogin();
?>
<h1>Hello world</h1>

<div class="alert alert-<?= ($isLogin) ? 'success' : 'danger';?> alert-dismissible fade show" role="alert">
    <?=($isLogin) ? 'Login success' : 'Not login';?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
