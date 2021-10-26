<?php

require_once("config/Config.php");
require_once("config/Database.php");
$model = new Config();
include "includes/header.php";

$users = $model->get_user(); ?>
<main class="container">
    <div class="row mt-5">
        <div class="col">
            <h2 class="text-center">Необходимо <a href="<?= $model->get_url('register.php'); ?>">зарегистрироваться</a>
                или <a href="<?= $model->get_url('login.php'); ?>">войти</a>
                под своей учетной записью</h2>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <h2 class="text-center">Пользователей в системе: 100</h2>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <h2 class="text-center">Ссылок в системе: 200</h2>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <h2 class="text-center">Всего переходов по ссылкам: 300</h2>
        </div>
    </div>
    <div class="container mt-5">
        <table class="table table-bordered">
            <tr class="text-center">
                <th>Пользователь</th>
                <th>Пароль</th>
            </tr>
            <?
            if ($users != 'error') {
                for ($i = 0; $i < count($users); $i++) { ?>
                    <tr>
                        <td><?= $users[$i][0] ?></td>
                        <td><?= $users[$i][1] ?></td>
                    </tr>
                    <?
                }
            } else { ?>
                <tr>
                    <td colspan="2" class="text-danger text-center">Простите, произошла ошибка!</td>
                </tr>
                <?
            } ?>

        </table>
    </div>
</main>
<?php
include "includes/footer.php"; ?>
