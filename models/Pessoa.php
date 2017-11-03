<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pessoa".
 *
 * @property integer $COD_PESSOA
 * @property string $NOME
 * @property string $RG
 * @property string $CPF
 * @property integer $COD_ENDERECO
 *
 * @property Endereco $cODENDERECO
 * @property Usuario[] $usuarios
 */
class Pessoa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pessoa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['COD_ENDERECO'], 'required'],
            [['COD_ENDERECO'], 'integer'],
            [['NOME'], 'string', 'max' => 60],
            [['RG'], 'string', 'max' => 10],
            [['CPF'], 'string', 'max' => 14],
            [['COD_ENDERECO'], 'exist', 'skipOnError' => true, 'targetClass' => Endereco::className(), 'targetAttribute' => ['COD_ENDERECO' => 'COD_ENDERECO']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_PESSOA' => 'Cod  Pessoa',
            'NOME' => 'Nome',
            'RG' => 'Rg',
            'CPF' => 'Cpf',
            'COD_ENDERECO' => 'Cod  Endereco',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODENDERECO()
    {
        return $this->hasOne(Endereco::className(), ['COD_ENDERECO' => 'COD_ENDERECO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['COD_PESSOA' => 'COD_PESSOA']);
    }

    /**
     * @inheritdoc
     * @return PessoaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PessoaQuery(get_called_class());
    }
}
