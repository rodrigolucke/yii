<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empresa".
 *
 * @property integer $COD_EMPRESA
 * @property string $NOME_EMPRESA
 * @property string $CNPJ
 *
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
            [['CNPJ'], 'required'],
            [['NOME_EMPRESA'], 'string', 'max' => 60],
            [['CNPJ'], 'string', 'max' => 14],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendas()
    {
        return $this->hasMany(Venda::className(), ['COD_EMPRESA' => 'COD_EMPRESA']);
    }
}
