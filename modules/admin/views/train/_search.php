<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\trainSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="train-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_train') ?>

    <?= $form->field($model, 'id_type') ?>

    <?= $form->field($model, 'nomber') ?>

    <?= $form->field($model, 'wifi') ?>

    <?= $form->field($model, 'conditioner') ?>

    <?php // echo $form->field($model, 'animal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
