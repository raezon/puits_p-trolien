<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
/* @var $this yii\web\View */
/* @var $model app\models\Divisionexploration */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="divisionexploration-form">

	<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

	<?= $form->field($model, 'pdf[]')->widget(FileInput::class, [
		'options' => ['multiple' => true, 'accept' => 'image/*'],
		'pluginOptions' => ['previewFileType' => 'any']
	]); ?>


	<div class="form-group">
		<?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>