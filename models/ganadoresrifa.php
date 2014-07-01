<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ganadoresrifa".
 *
 * @property integer $id
 * @property integer $id_rifa
 * @property integer $orden
 * @property integer $nroGan
 * @property string $premio
 * @property string $nomGan
 * @property string $donante
 */
class ganadoresrifa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ganadoresrifa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_rifa'], 'required'],
            [['id_rifa', 'orden', 'nroGan'], 'integer'],
            [['premio', 'nomGan', 'donante'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_rifa' => 'Id Rifa',
            'orden' => 'Orden',
            'nroGan' => 'Nro Gan',
            'premio' => 'Premio',
            'nomGan' => 'Nom Gan',
            'donante' => 'Donante',
        ];
    }
}
