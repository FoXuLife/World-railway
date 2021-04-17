<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\train */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="train-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_train')->textInput() ?>

    <?= $form->field($model, 'id_type')->textInput() ?>

    <?= $form->field($model, 'nomber')->textInput() ?>

    <?= $form->field($model, 'wifi')->textInput() ?>

    <?= $form->field($model, 'conditioner')->textInput() ?>

    <?= $form->field($model, 'animal')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
