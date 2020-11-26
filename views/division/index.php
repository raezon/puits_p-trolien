<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\DivisionexplorationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Divisionexplorations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="divisionexploration-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Divisionexploration', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_puits',
            'nom_puits',
            'nom_reservoir',
            'le_groupe_Exploitant',
            'latitude',
            //'longitude',
            //'bloc',
            //'zone',
            //'bassin',
            //'phase',
            //'date_debut',
            //'date_fin',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
