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
 * @property string $DT_VENDA
 * @property integer $COD_MOVIMENTO_ESTOQUE
 * @property integer $COD_PRECO_LEITE
 * @property integer $COD_USUARIO
 *
 * @property Empresa $cODEMPRESA
 * @property MovimentoEstoque $cODMOVIMENTOESTOQUE
 * @property PrecoLeite $cODPRECOLEITE
 * @property Usuario $cODUSUARIO
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
            [['COD_EMPRESA', 'COD_PRECO_LEITE', 'COD_USUARIO'], 'required'],
            [['COD_EMPRESA', 'COD_MOVIMENTO_ESTOQUE', 'COD_PRECO_LEITE', 'COD_USUARIO'], 'integer'],
            [['PRECO_LITRO', 'QUANTIDADE'], 'number'],
            [['DT_VENDA'], 'safe'],
            [['COD_EMPRESA'], 'exist', 'skipOnError' => true, 'targetClass' => Empresa::className(), 'targetAttribute' => ['COD_EMPRESA' => 'COD_EMPRESA']],
            [['COD_MOVIMENTO_ESTOQUE'], 'exist', 'skipOnError' => true, 'targetClass' => MovimentoEstoque::className(), 'targetAttribute' => ['COD_MOVIMENTO_ESTOQUE' => 'COD_MOVIMENTO_ESTOQUE']],
            [['COD_PRECO_LEITE'], 'exist', 'skipOnError' => true, 'targetClass' => PrecoLeite::className(), 'targetAttribute' => ['COD_PRECO_LEITE' => 'COD_PRECO_LEITE']],
            [['COD_USUARIO'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['COD_USUARIO' => 'COD_USUARIO']],
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
            'DT_VENDA' => 'Dt  Venda',
            'COD_MOVIMENTO_ESTOQUE' => 'Cod  Movimento  Estoque',
            'COD_PRECO_LEITE' => 'Cod  Preco  Leite',
            'COD_USUARIO' => 'Cod  Usuario',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODPRECOLEITE()
    {
        return $this->hasOne(PrecoLeite::className(), ['COD_PRECO_LEITE' => 'COD_PRECO_LEITE']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODUSUARIO()
    {
        return $this->hasOne(Usuario::className(), ['COD_USUARIO' => 'COD_USUARIO']);
    }
}
