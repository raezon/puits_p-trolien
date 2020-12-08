<?php

namespace app\tests\fixtures;

use  yii\test\ActiveFixture;

class DivisionFixture extends ActiveFixture
{
    public $modelClass = 'app\models\Divisionexploration';
    public $depends = ['app\tests\fixtures\UserFixture'];
}
