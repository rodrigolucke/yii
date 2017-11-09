<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movimento_estoque".
 *
 * @property integer $COD_MOVIMENTO_ESTOQUE
 * @property integer $TIPO_MOVIMENTO
 * @property string $DATA_HISTORICO
 * @property integer $COD_ESTOQUE
 *
 * @property HistoricoColeta[] $historicoColetas
 * @property Estoque $cODESTOQUE
 * @property TipoMovimentoEstoque $tIPOMOVIMENTO
 * @property Venda[] $vendas
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
            [['TIPO_MOVIMENTO', 'COD_ESTOQUE'], 'integer'],
            [['DATA_HISTORICO'], 'safe'],
            [['COD_ESTOQUE'], 'required'],
            [['COD_ESTOQUE'], 'exist', 'skipOnError' => true, 'targetClass' => Estoque::className(), 'targetAttribute' => ['COD_ESTOQUE' => 'COD_ESTOQUE']],
            [['TIPO_MOVIMENTO'], 'exist', 'skipOnError' => true, 'targetClass' => TipoMovimentoEstoque::className(), 'targetAttribute' => ['TIPO_MOVIMENTO' => 'COD_TIPO_MOVIMENTO_ESTOQUE']],
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
            'DATA_HISTORICO' => 'Data  Historico',
            'COD_ESTOQUE' => 'Cod  Estoque',
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
    public function getCODESTOQUE()
    {
        return $this->hasOne(Estoque::className(), ['COD_ESTOQUE' => 'COD_ESTOQUE']);
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
    public function getVendas()
    {
        return $this->hasMany(Venda::className(), ['COD_MOVIMENTO_ESTOQUE' => 'COD_MOVIMENTO_ESTOQUE']);
    }
}
