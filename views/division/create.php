<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Divisionexploration */

$this->title = 'Create Divisionexploration';
$this->params['breadcrumbs'][] = ['label' => 'Divisionexplorations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="divisionexploration-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
