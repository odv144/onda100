<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ganadores".
 *
 * @property integer $id
 * @property string $json
 *
 * @property Sorteo $id0
 */
class Ganadores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ganadores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'json'], 'required'],
            [['id'], 'integer'],
            [['json'], 'string'],
            [['id'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'json' => Yii::t('app', 'Json'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Sorteo::className(), ['id' => 'id']);
    }
}
