<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Divisionexploration */

$this->title = $model->id_puits;
$this->params['breadcrumbs'][] = ['label' => 'Divisionexplorations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="divisionexploration-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_puits], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_puits], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_puits',
            'nom_puits',
            'nom_reservoir',
            'le_groupe_Exploitant',
            'latitude',
            'longitude',
            'bloc',
            'zone',
            'bassin',
            'phase',
            'date_debut',
            'date_fin',
        ],
    ]) ?>

</div>
