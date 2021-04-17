<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\train */

$this->title = 'Update Train: ' . $model->id_train;
$this->params['breadcrumbs'][] = ['label' => 'Trains', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_train, 'url' => ['view', 'id' => $model->id_train]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="train-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
