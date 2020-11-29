<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "division_exploration".
 *
 * @property string $id
 */
class Search extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $id;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id du puits',
        ];
    }
}
