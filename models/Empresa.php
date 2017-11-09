<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empresa".
 *
 * @property integer $COD_EMPRESA
 * @property string $NOME_EMPRESA
 * @property string $CNPJ
 * @property integer $COD_ENDERECO
 *
 * @property Endereco $cODENDERECO
 * @property Venda[] $vendas
 */
class Empresa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empresa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['COD_ENDERECO'], 'required'],
            [['COD_ENDERECO'], 'integer'],
            [['NOME_EMPRESA'], 'string', 'max' => 60],
            [['CNPJ'], 'string', 'max' => 14],
            [['COD_ENDERECO'], 'exist', 'skipOnError' => true, 'targetClass' => Endereco::className(), 'targetAttribute' => ['COD_ENDERECO' => 'COD_ENDERECO']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_EMPRESA' => 'Cod  Empresa',
            'NOME_EMPRESA' => 'Nome  Empresa',
            'CNPJ' => 'Cnpj',
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
    public function getVendas()
    {
        return $this->hasMany(Venda::className(), ['COD_EMPRESA' => 'COD_EMPRESA']);
    }
}
