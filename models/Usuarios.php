<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Usuarios".
 *
 * @property string $id
 * @property string $nick
 * @property string $password_2
 * @property string $dni
 * @property string $nombre
 * @property string $apellido
 * @property string $direccion
 * @property string $telefono
 * @property string $email
 * @property string $tip
 * @property string $session
 */
class Usuarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['password_2', 'tip', 'session'], 'string'],
            [['session'], 'required'],
            [['nick'], 'string', 'max' => 10],
            [['dni'], 'string', 'max' => 8],
            [['nombre', 'apellido'], 'string', 'max' => 50],
            [['direccion'], 'string', 'max' => 100],
            [['telefono'], 'string', 'max' => 15],
            [['email'], 'string', 'max' => 80]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nick' => 'Nick',
            'password_2' => 'Password 2',
            'dni' => 'Dni',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'direccion' => 'Direccion',
            'telefono' => 'Telefono',
            'email' => 'Email',
            'tip' => 'Tip',
            'session' => 'Session',
        ];
    }
}
