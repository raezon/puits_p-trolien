<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "division_exploration".
 *
 * @property int $id_puits
 * @property string $nom_puits
 * @property string $nom_reservoir
 * @property int $le_groupe_Exploitant
 * @property float $latitude
 * @property float $longitude
 * @property int $bloc
 * @property int $zone
 * @property string $bassin
 * @property int $phase
 * @property string $date_debut
 * @property string $date_fin
 */
class Divisionexploration extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
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
            [['nom_puits', 'nom_reservoir', 'le_groupe_Exploitant', 'latitude', 'longitude', 'bloc', 'zone', 'bassin', 'phase', 'date_debut', 'date_fin'], 'required'],
           // [['le_groupe_Exploitant', 'bloc', 'zone', 'phase'], 'integer'],
            [['latitude', 'longitude'], 'number'],
            [['date_debut', 'date_fin'], 'safe'],
            [['nom_puits', 'nom_reservoir', 'bassin'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_puits' => 'Id Puits',
            'nom_puits' => 'Nom Puits',
            'nom_reservoir' => 'Nom Reservoir',
            'le_groupe_Exploitant' => 'Le Groupe Exploitant',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'bloc' => 'Bloc',
            'zone' => 'Zone',
            'bassin' => 'Bassin',
            'phase' => 'Phase',
            'date_debut' => 'Date Debut',
            'date_fin' => 'Date Fin',
        ];
    }
}
