<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "perfil_pessoa".
 *
 * @property integer $SEQ_PERFIL_PESSOA
 * @property integer $COD_PERFIL
 * @property integer $COD_PESSOA
 *
 * @property Pessoa $cODPESSOA
 * @property Perfil $cODPERFIL
 */
class PerfilPessoa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'perfil_pessoa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['COD_PERFIL', 'COD_PESSOA'], 'integer'],
            [['COD_PESSOA'], 'exist', 'skipOnError' => true, 'targetClass' => Pessoa::className(), 'targetAttribute' => ['COD_PESSOA' => 'COD_PESSOA']],
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
            'COD_PESSOA' => 'Cod  Pessoa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODPESSOA()
    {
        return $this->hasOne(Pessoa::className(), ['COD_PESSOA' => 'COD_PESSOA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODPERFIL()
    {
        return $this->hasOne(Perfil::className(), ['COD_PERFIL' => 'COD_PERFIL']);
    }
}
