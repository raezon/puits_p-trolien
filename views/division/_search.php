<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DivisionexplorationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="divisionexploration-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_puits') ?>

    <?= $form->field($model, 'nom_puits') ?>

    <?= $form->field($model, 'nom_reservoir') ?>

    <?= $form->field($model, 'le_groupe_Exploitant') ?>

    <?= $form->field($model, 'latitude') ?>

    <?php // echo $form->field($model, 'longitude') ?>

    <?php // echo $form->field($model, 'bloc') ?>

    <?php // echo $form->field($model, 'zone') ?>

    <?php // echo $form->field($model, 'bassin') ?>

    <?php // echo $form->field($model, 'phase') ?>

    <?php // echo $form->field($model, 'date_debut') ?>

    <?php // echo $form->field($model, 'date_fin') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
