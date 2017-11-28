<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lote_equipamentos".
 *
 * @property integer $COD_LOTE
 * @property integer $COD_EQUIPAMENTO
 *
 * @property HistoricoColeta[] $historicoColetas
 * @property Equipamento $cODEQUIPAMENTO
 */
class LoteEquipamentos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lote_equipamentos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['COD_EQUIPAMENTO'], 'required'],
            [['COD_EQUIPAMENTO'], 'integer'],
            [['COD_EQUIPAMENTO'], 'exist', 'skipOnError' => true, 'targetClass' => Equipamento::className(), 'targetAttribute' => ['COD_EQUIPAMENTO' => 'COD_EQUIPAMENTO']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_LOTE' => 'Cod  Lote',
            'COD_EQUIPAMENTO' => 'Cod  Equipamento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistoricoColetas()
    {
        return $this->hasMany(HistoricoColeta::className(), ['COD_LOTE' => 'COD_LOTE']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODEQUIPAMENTO()
    {
        return $this->hasOne(Equipamento::className(), ['COD_EQUIPAMENTO' => 'COD_EQUIPAMENTO']);
    }
}
