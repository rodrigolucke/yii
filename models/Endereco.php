<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "endereco".
 *
 * @property integer $COD_ENDERECO
 * @property string $RUA
 * @property integer $NUMERO
 * @property string $BAIRRO
 * @property string $CIDADE
 * @property string $CEP
 *
 * @property Pessoa[] $pessoas
 */
class Endereco extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'endereco';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NUMERO'], 'integer'],
            [['RUA', 'CIDADE'], 'string', 'max' => 60],
            [['BAIRRO'], 'string', 'max' => 20],
            [['CEP'], 'string', 'max' => 8],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_ENDERECO' => 'Cod  Endereco',
            'RUA' => 'Rua',
            'NUMERO' => 'Numero',
            'BAIRRO' => 'Bairro',
            'CIDADE' => 'Cidade',
            'CEP' => 'Cep',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPessoas()
    {
        return $this->hasMany(Pessoa::className(), ['COD_ENDERECO' => 'COD_ENDERECO']);
    }
}
