<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\town */

$this->title = 'Update Town: ' . $model->id_town;
$this->params['breadcrumbs'][] = ['label' => 'Towns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_town, 'url' => ['view', 'id' => $model->id_town]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="town-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
