<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rifa".
 *
 * @property integer $id
 * @property string $institucion
 * @property string $fecha_sorteo
 */
class Rifa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rifa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['institucion', 'fecha_sorteo'], 'required'],
            [['fecha_sorteo'], 'safe'],
            [['institucion'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'institucion' => 'Institucion',
            'fecha_sorteo' => 'Fecha Sorteo',
        ];
    }
}
