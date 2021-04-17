<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\flight */

$this->title = 'Update Flight: ' . $model->id_flight;
$this->params['breadcrumbs'][] = ['label' => 'Flights', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_flight, 'url' => ['view', 'id' => $model->id_flight]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="flight-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
