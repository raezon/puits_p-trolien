<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Divisionexploration */

$this->title = 'Update Divisionexploration: ' . $model->id_puits;
$this->params['breadcrumbs'][] = ['label' => 'Divisionexplorations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_puits, 'url' => ['view', 'id' => $model->id_puits]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="divisionexploration-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
