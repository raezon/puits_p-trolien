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
            [['pdf'], 'file', 'extensions' => 'svg, png,jpg', 'when' => function ($model) {
                //return true to apply the rule
                return $model->isImageUploaded();
            }],
        ];
    }
    public function upload()
    {
        if ($this->validate()) {
            //$this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [];
    }
}
