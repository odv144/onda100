<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "premios".
 *
 * @property integer $id
 * @property integer $id_sorteo
 * @property string $json
 *
 * @property Sorteo $idSorteo
 */
class Premios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'premios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_sorteo', 'json'], 'required'],
            [['id_sorteo'], 'integer'],
            [['json'], 'string'],
            [['id_sorteo'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_sorteo' => Yii::t('app', 'Id Sorteo'),
            'json' => Yii::t('app', 'Json'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdSorteo()
    {
        return $this->hasOne(Sorteo::className(), ['id' => 'id_sorteo']);
    }
}
