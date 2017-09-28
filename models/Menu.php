<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property integer $COD_MENU
 * @property string $DESCR
 * @property string $ARQUIVO
 * @property integer $COD_USUARIO
 * @property integer $COD_PERFIL
 *
 * @property Usuario $cODUSUARIO
 * @property Perfil $cODPERFIL
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['COD_USUARIO', 'COD_PERFIL'], 'required'],
            [['COD_USUARIO', 'COD_PERFIL'], 'integer'],
            [['DESCR', 'ARQUIVO'], 'string', 'max' => 20],
            [['COD_USUARIO'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['COD_USUARIO' => 'COD_USUARIO']],
            [['COD_PERFIL'], 'exist', 'skipOnError' => true, 'targetClass' => Perfil::className(), 'targetAttribute' => ['COD_PERFIL' => 'COD_PERFIL']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_MENU' => 'Cod  Menu',
            'DESCR' => 'Descr',
            'ARQUIVO' => 'Arquivo',
            'COD_USUARIO' => 'Cod  Usuario',
            'COD_PERFIL' => 'Cod  Perfil',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODUSUARIO()
    {
        return $this->hasOne(Usuario::className(), ['COD_USUARIO' => 'COD_USUARIO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODPERFIL()
    {
        return $this->hasOne(Perfil::className(), ['COD_PERFIL' => 'COD_PERFIL']);
    }
}
