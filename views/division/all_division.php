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
<div class="site-index">


    <div class="body-content">

        <div class="row">
            <div class="col-lg-12">
<?php

//creating the new foreach
$map=array();
$j=0;
foreach($model as $element){
    $coord = new LatLng(['lat' =>$element->latitude, 'lng' => $element->longitude]);
    if($j==0)
    $map= new Map([
        'center' => $coord,
        'zoom' => 14,
    ]);
    $marker = new Marker([
        'position' => $coord,
        'title' => 'My Home Town',
    ]);
    $marker->attachInfoWindow(
        new InfoWindow([
            'content' => '<p>نفيلية ام لهب هههههه </p>'
        ])
    );
    $map->addOverlay($marker);
    echo $map->display();
    $j++;
}


///////////////////////////////////////////////////
/*$coord1 = new LatLng(['lat' => 36.801730, 'lng' => 2.920540]);
$map1 = new Map([
    'center' => $coord1,
    'zoom' => 14,
]);
$marker1 = new Marker([
    'position' => $coord1,
    'title' => 'My Home Town',
]);
$marker1->attachInfoWindow(
    new InfoWindow([
        'content' => '<p>This is my super cool content</p>'
    ])
);
$map->addOverlay($marker1);
echo $map->display();
*/
?>
            </div>
      
           
        </div>

    </div>
</div>
