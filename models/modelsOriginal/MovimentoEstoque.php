<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movimento_estoque".
 *
 * @property integer $COD_MOVIMENTO_ESTOQUE
 * @property integer $COD_TIPO_MOVIMENTO_ESTOQUE
 * @property string $DATA_HISTORICO
 * @property integer $COD_ESTOQUE
 * @property integer $COD_USUARIO
 *
 * @property HistoricoColeta[] $historicoColetas
 * @property Estoque $cODESTOQUE
 * @property TipoMovimentoEstoque $cODTIPOMOVIMENTOESTOQUE
 * @property Usuario $cODUSUARIO
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
            [['COD_TIPO_MOVIMENTO_ESTOQUE', 'COD_ESTOQUE', 'COD_USUARIO'], 'required'],
            [['COD_TIPO_MOVIMENTO_ESTOQUE', 'COD_ESTOQUE', 'COD_USUARIO'], 'integer'],
            [['DATA_HISTORICO'], 'safe'],
            [['COD_ESTOQUE'], 'exist', 'skipOnError' => true, 'targetClass' => Estoque::className(), 'targetAttribute' => ['COD_ESTOQUE' => 'COD_ESTOQUE']],
            [['COD_TIPO_MOVIMENTO_ESTOQUE'], 'exist', 'skipOnError' => true, 'targetClass' => TipoMovimentoEstoque::className(), 'targetAttribute' => ['COD_TIPO_MOVIMENTO_ESTOQUE' => 'COD_TIPO_MOVIMENTO_ESTOQUE']],
            [['COD_USUARIO'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['COD_USUARIO' => 'COD_USUARIO']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_MOVIMENTO_ESTOQUE' => 'Cod  Movimento  Estoque',
            'COD_TIPO_MOVIMENTO_ESTOQUE' => 'Cod  Tipo  Movimento  Estoque',
            'DATA_HISTORICO' => 'Data  Historico',
            'COD_ESTOQUE' => 'Cod  Estoque',
            'COD_USUARIO' => 'Cod  Usuario',
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
    public function getCODTIPOMOVIMENTOESTOQUE()
    {
        return $this->hasOne(TipoMovimentoEstoque::className(), ['COD_TIPO_MOVIMENTO_ESTOQUE' => 'COD_TIPO_MOVIMENTO_ESTOQUE']);
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
    public function getVendas()
    {
        return $this->hasMany(Venda::className(), ['COD_MOVIMENTO_ESTOQUE' => 'COD_MOVIMENTO_ESTOQUE']);
    }
}
