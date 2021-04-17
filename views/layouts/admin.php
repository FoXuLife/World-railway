<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AdminAsset;

AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Railway</title>
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<style>
    h1 {
        margin-top:0;
        padding-top:20px;
    }
</style>
    <nav>
        <div class="logo">
            <img src="../../web/img/menu_logo.png" alt="logo">
        </div>
        <menu style="font-size:20px; color:white">
            <ul>
                <li><a href="/">Главная</a></li>
                <li><?= Html::a(Html::encode('Тип поезда'), ['type/index'], ['class' => 'profile-link']) ?></li>
                <li><?= Html::a(Html::encode('Города'), ['town/index'], ['class' => 'profile-link']) ?></li>
                <li><?= Html::a(Html::encode('Поезда'), ['train/index'], ['class' => 'profile-link']) ?></li>
                <li><?= Html::a(Html::encode('Рейсы'), ['flight/index'], ['class' => 'profile-link']) ?></li>
                <li><?= Html::a(Html::encode('Комментарии'), ['comments/index'], ['class' => 'profile-link']) ?></li>
                <li><?= Html::a(Html::encode('Пользователи'), ['user/index'], ['class' => 'profile-link']) ?></li>
            </ul>
        </menu>
        <div class="contact">
            <p>worlrailway@gmail.com</p>
            <p>+8-800-555-35-35</p>
            <div class="social">
                <a href="#"><img src="/img/vk.png" alt="vk"></a>
                <a href="#"><img src="/img/inst.png" alt="inst"></a>
            </div>
        </div>
    </nav>
    <main>
    <?= $content; ?>
    </main>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>