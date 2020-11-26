<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "division_exploration".
 *
 * @property string $pdf
 */
class Form extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $pdf;
    public static function tableName()
    {
        return 'division_exploration';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pdf'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pdf' => 'attacher un pdf',
        ];
    }
}
