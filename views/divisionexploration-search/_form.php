<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Divisionexploration */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="divisionexploration-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nom_puits')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nom_reservoir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'le_groupe_Exploitant')->textInput() ?>

    <?= $form->field($model, 'latitude')->textInput() ?>

    <?= $form->field($model, 'longitude')->textInput() ?>

    <?= $form->field($model, 'bloc')->textInput() ?>

    <?= $form->field($model, 'zone')->textInput() ?>

    <?= $form->field($model, 'bassin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phase')->textInput() ?>

    <?= $form->field($model, 'date_debut')->textInput() ?>

    <?= $form->field($model, 'date_fin')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
