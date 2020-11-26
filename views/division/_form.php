<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
/* @var $this yii\web\View */
/* @var $model app\models\Divisionexploration */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="divisionexploration-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ; ?>

    <?= FileInput::widget([
	'model' => $model,
	'attribute' => 'pdf',
	'name' => 'pdf',
	'options' => [
		'multiple' => true,
		'accept' => '/*'
	],
	'pluginOptions' => [
		'showCaption' => false,
		'showRemove' => false,
		'showUpload' => false,
		'browseClass' => 'btn btn-primary btn-block',
		'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
		'browseLabel' =>  'Attach Business Card',
		'allowedFileExtensions' => ['jpg','gif','pdf'],
		'overwriteInitial' => false
	],
]);?>
    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
