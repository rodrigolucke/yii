<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "historico_coleta".
 *
 * @property integer $COD_HISTORICO_COLETA
 * @property string $DATA_COLETA
 * @property string $QUANTIDADE_COLETA
 * @property integer $STATUS
 * @property integer $COD_USUARIO
 * @property integer $COD_LOTE_ANIMAL
 * @property integer $COD_LOTE_EQUIPAMENTO
 * @property integer $COD_MOVIMENTO_ESTOQUE
 *
 * @property Usuario $cODUSUARIO
 * @property LoteAnimal $cODLOTEANIMAL
 * @property LoteEquipamento $cODLOTEEQUIPAMENTO
 * @property MovimentoEstoque $cODMOVIMENTOESTOQUE
 */
class HistoricoColeta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'historico_coleta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DATA_COLETA'], 'safe'],
            [['QUANTIDADE_COLETA'], 'number'],
            [['STATUS', 'COD_USUARIO', 'COD_LOTE_ANIMAL', 'COD_LOTE_EQUIPAMENTO', 'COD_MOVIMENTO_ESTOQUE'], 'integer'],
            [['COD_USUARIO', 'COD_LOTE_ANIMAL', 'COD_MOVIMENTO_ESTOQUE'], 'required'],
            [['COD_USUARIO'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['COD_USUARIO' => 'COD_USUARIO']],
            [['COD_LOTE_ANIMAL'], 'exist', 'skipOnError' => true, 'targetClass' => LoteAnimal::className(), 'targetAttribute' => ['COD_LOTE_ANIMAL' => 'COD_LOTE_ANIMAL']],
            [['COD_LOTE_EQUIPAMENTO'], 'exist', 'skipOnError' => true, 'targetClass' => LoteEquipamento::className(), 'targetAttribute' => ['COD_LOTE_EQUIPAMENTO' => 'COD_LOTE_EQUIPAMENTO']],
            [['COD_MOVIMENTO_ESTOQUE'], 'exist', 'skipOnError' => true, 'targetClass' => MovimentoEstoque::className(), 'targetAttribute' => ['COD_MOVIMENTO_ESTOQUE' => 'COD_MOVIMENTO_ESTOQUE']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_HISTORICO_COLETA' => 'Cod  Historico  Coleta',
            'DATA_COLETA' => 'Data  Coleta',
            'QUANTIDADE_COLETA' => 'Quantidade  Coleta',
            'STATUS' => 'Status',
            'COD_USUARIO' => 'Cod  Usuario',
            'COD_LOTE_ANIMAL' => 'Cod  Lote  Animal',
            'COD_LOTE_EQUIPAMENTO' => 'Cod  Lote  Equipamento',
            'COD_MOVIMENTO_ESTOQUE' => 'Cod  Movimento  Estoque',
        ];
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
    public function getCODLOTEANIMAL()
    {
        return $this->hasOne(LoteAnimal::className(), ['COD_LOTE_ANIMAL' => 'COD_LOTE_ANIMAL']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODLOTEEQUIPAMENTO()
    {
        return $this->hasOne(LoteEquipamento::className(), ['COD_LOTE_EQUIPAMENTO' => 'COD_LOTE_EQUIPAMENTO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODMOVIMENTOESTOQUE()
    {
        return $this->hasOne(MovimentoEstoque::className(), ['COD_MOVIMENTO_ESTOQUE' => 'COD_MOVIMENTO_ESTOQUE']);
    }
}
