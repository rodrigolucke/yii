<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movimento_estoque".
 *
 * @property integer $COD_MOVIMENTO_ESTOQUE
 * @property integer $TIPO_MOVIMENTO
 * @property integer $COD_EMPRESA
 * @property integer $COD_ESTOQUE
 * @property string $PRECO_LITRO
 * @property string $QUANTIDADE
 * @property string $DATA_MOVIMENTO
 * @property string $DATA_ENTREGA
 *
 * @property HistoricoColeta[] $historicoColetas
 * @property TipoMovimentoEstoque $tIPOMOVIMENTO
 * @property Empresa $cODEMPRESA
 * @property Estoque $cODESTOQUE
 */
class MovimentoEstoque extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'movimento_estoque';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TIPO_MOVIMENTO', 'COD_EMPRESA', 'COD_ESTOQUE'], 'integer'],
            [['COD_EMPRESA', 'COD_ESTOQUE'], 'required'],
            [['PRECO_LITRO', 'QUANTIDADE'], 'number'],
            [['DATA_MOVIMENTO', 'DATA_ENTREGA'], 'safe'],
            [['TIPO_MOVIMENTO'], 'exist', 'skipOnError' => true, 'targetClass' => TipoMovimentoEstoque::className(), 'targetAttribute' => ['TIPO_MOVIMENTO' => 'COD_TIPO_MOVIMENTO_ESTOQUE']],
            [['COD_EMPRESA'], 'exist', 'skipOnError' => true, 'targetClass' => Empresa::className(), 'targetAttribute' => ['COD_EMPRESA' => 'COD_EMPRESA']],
            [['COD_ESTOQUE'], 'exist', 'skipOnError' => true, 'targetClass' => Estoque::className(), 'targetAttribute' => ['COD_ESTOQUE' => 'COD_ESTOQUE']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_MOVIMENTO_ESTOQUE' => 'Cod  Movimento  Estoque',
            'TIPO_MOVIMENTO' => 'Tipo  Movimento',
            'COD_EMPRESA' => 'Cod  Empresa',
            'COD_ESTOQUE' => 'Cod  Estoque',
            'PRECO_LITRO' => 'Preco  Litro',
            'QUANTIDADE' => 'Quantidade',
            'DATA_MOVIMENTO' => 'Data  Movimento',
            'DATA_ENTREGA' => 'Data  Entrega',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistoricoColetas()
    {
        return $this->hasMany(HistoricoColeta::className(), ['COD_MOVIMENTO_ESTOQUE' => 'COD_MOVIMENTO_ESTOQUE']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTIPOMOVIMENTO()
    {
        return $this->hasOne(TipoMovimentoEstoque::className(), ['COD_TIPO_MOVIMENTO_ESTOQUE' => 'TIPO_MOVIMENTO']);
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
    public function getCODESTOQUE()
    {
        return $this->hasOne(Estoque::className(), ['COD_ESTOQUE' => 'COD_ESTOQUE']);
    }
}
