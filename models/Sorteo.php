<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sorteo".
 *
 * @property integer $id
 * @property string $iniSorteo
 * @property string $finSorteo
 * @property boolean $realizado
 * @property integer $canPremios
 *
 * @property Ganadores $ganadores
 * @property Premios[] $premios
 */
class Sorteo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sorteo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['iniSorteo'], 'required'],
            [['iniSorteo', 'finSorteo'], 'safe'],
            [['realizado'], 'boolean'],
            [['canPremios'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'iniSorteo' => Yii::t('app', 'Ini Sorteo'),
            'finSorteo' => Yii::t('app', 'Fin Sorteo'),
            'realizado' => Yii::t('app', 'Realizado'),
            'canPremios' => Yii::t('app', 'Can Premios'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGanadores()
    {
        return $this->hasOne(Ganadores::className(), ['id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPremios()
    {
        return $this->hasMany(Premios::className(), ['id_sorteo' => 'id']);
    }
}
