<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "perfil_usuario".
 *
 * @property integer $SEQ_PERFIL_PESSOA
 * @property integer $COD_PERFIL
 * @property integer $COD_USUARIO
 *
 * @property Usuario $cODUSUARIO
 * @property Perfil $cODPERFIL
 */
class PerfilUsuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'perfil_usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['COD_PERFIL', 'COD_USUARIO'], 'integer'],
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
            'SEQ_PERFIL_PESSOA' => 'Seq  Perfil  Pessoa',
            'COD_PERFIL' => 'Cod  Perfil',
            'COD_USUARIO' => 'Cod  Usuario',
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
