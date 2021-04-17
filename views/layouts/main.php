<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\User;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" href="<?=Url::to('/img/favicon.ico')?>" type="image/x-icon" />
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <nav>
        <div class="logo">
            <img src="img/menu_logo.png" alt="logo">
        </div>
        <menu>
            <ul>
                <li><a href="/">Главная</a></li>
                
                <li>World Railway</li>
                
                <li><a href="profile">Профиль</a></li>
            </ul>
        </menu>
        <?
        $id = Yii::$app->user->id;
        $name = Yii::$app->user->identity->name;
        $family = Yii::$app->user->identity->family;
        
        if ($id != null) {
            echo '<a href="logout" class="name_exit">'.$name.' '.$family.'<br> Выход</a>';
        }?>
        
        <div class="contact">
            <p>worlrailway@gmail.com</p>
            <p>+8-800-555-35-35</p>
            <div class="social">
                <a href="#"><img src="img/vk.png" alt="vk"></a>
                <a href="#"><img src="img/inst.png" alt="inst"></a>
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