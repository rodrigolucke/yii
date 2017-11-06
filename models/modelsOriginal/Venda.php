<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "venda".
 *
 * @property integer $COD_VENDA
 * @property integer $COD_EMPRESA
 * @property string $PRECO_LITRO
 * @property string $QUANTIDADE
 * @property string $DATA_VENDA
 * @property string $DATA_ENTREGA
 * @property integer $COD_MOVIMENTO_ESTOQUE
 *
 * @property Empresa $cODEMPRESA
 * @property MovimentoEstoque $cODMOVIMENTOESTOQUE
 */
class Venda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'venda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['COD_EMPRESA'], 'required'],
            [['COD_EMPRESA', 'COD_MOVIMENTO_ESTOQUE'], 'integer'],
            [['PRECO_LITRO', 'QUANTIDADE'], 'number'],
            [['DATA_VENDA', 'DATA_ENTREGA'], 'safe'],
            [['COD_EMPRESA'], 'exist', 'skipOnError' => true, 'targetClass' => Empresa::className(), 'targetAttribute' => ['COD_EMPRESA' => 'COD_EMPRESA']],
            [['COD_MOVIMENTO_ESTOQUE'], 'exist', 'skipOnError' => true, 'targetClass' => MovimentoEstoque::className(), 'targetAttribute' => ['COD_MOVIMENTO_ESTOQUE' => 'COD_MOVIMENTO_ESTOQUE']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_VENDA' => 'Cod  Venda',
            'COD_EMPRESA' => 'Cod  Empresa',
            'PRECO_LITRO' => 'Preco  Litro',
            'QUANTIDADE' => 'Quantidade',
            'DATA_VENDA' => 'Data  Venda',
            'DATA_ENTREGA' => 'Data  Entrega',
            'COD_MOVIMENTO_ESTOQUE' => 'Cod  Movimento  Estoque',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODEMPRESA()
    {
        return $this->hasOne(Empresa::className(), ['COD_EMPRESA' => 'COD_EMPRESA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODMOVIMENTOESTOQUE()
    {
        return $this->hasOne(MovimentoEstoque::className(), ['COD_MOVIMENTO_ESTOQUE' => 'COD_MOVIMENTO_ESTOQUE']);
    }
}
