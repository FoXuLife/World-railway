<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\town */

$this->title = 'Create Town';
$this->params['breadcrumbs'][] = ['label' => 'Town', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="town-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
