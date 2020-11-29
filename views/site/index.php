<?php
use yii\web\JsExpression;
use yii\widgets\ActiveForm;
use dosamigos\google\maps\LatLng;
use dosamigos\google\maps\services\DirectionsWayPoint;
use dosamigos\google\maps\services\TravelMode;
use dosamigos\google\maps\overlays\PolylineOptions;
use dosamigos\google\maps\services\DirectionsRenderer;
use dosamigos\google\maps\services\DirectionsService;
use dosamigos\google\maps\overlays\InfoWindow;
use dosamigos\google\maps\overlays\Marker;
use dosamigos\google\maps\Map;
use dosamigos\google\maps\services\DirectionsRequest;
use dosamigos\google\maps\overlays\Polygon;
use dosamigos\google\maps\layers\BicyclingLayer;
use yii\helpers\Html;
/* @var $this yii\web\View */
 $form = ActiveForm::begin([
    'options' => [
   'enctype' => 'multipart/form-data',
    
],
   
   'id' => 'dynamic-form',
   //'enableAjaxValidation' => true,
   'enableClientValidation' => true,

]);
$this->title = 'My Yii Application';
?>

    <div class="body-content">
    <div class="row">
<!--Our Form-->
        <div class="col-lg-1">
            <span><b>Id puits:</b></span>
        </div>
        <div class="col-lg-10">
            
            <?= $form->field($model, 'id')->textInput()->label(false)  ?>
            <!--our button-->
        </div>
        
            <div class="form-group col-lg-1">
                        <?= Html::submitButton('Search', ['class' => 'btn btn-success']) ?>     
            </div>
        
<?php ActiveForm::end() ?>
<!-- Our map-->
            <div class="col-lg-12">
<?php
        $map=array();
        if(empty($model1)){
            $model1->latitude=100000000;
            $model1->longitude=55555;
        }
    //    foreach($model1 as $element){
            if(!empty($model1))
            $coord = new LatLng(['lat' =>$model1->latitude, 'lng' => $model1->longitude]);
            if(!empty($model1))
                $map= new Map([
                    'center' => $coord,
                    'zoom' => 14,
                ]);
            if(!empty($model1))
            $marker = new Marker([
                'position' => $coord,
                'title' => 'My Home Town',
            ]);
            if(!empty($model1))
                $marker->attachInfoWindow(
                    new InfoWindow([
                        'content' => '<p>نفيلية ام لهب هههههه </p>'
                    ])
                );
            if(!empty($model1))
                 $map->addOverlay($marker);
            echo $map->display();
            
     //   }

?>
            </div>
      
           
        </div>

    </div>

