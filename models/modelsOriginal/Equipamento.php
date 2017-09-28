<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "equipamento".
 *
 * @property integer $COD_EQUIPAMENTO
 * @property string $DESCR
 *
 * @property LoteEquipamento[] $loteEquipamentos
 */
class Equipamento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'equipamento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DESCR'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_EQUIPAMENTO' => 'Cod  Equipamento',
            'DESCR' => 'Descr',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLoteEquipamentos()
    {
        return $this->hasMany(LoteEquipamento::className(), ['COD_EQUIPAMENTO' => 'COD_EQUIPAMENTO']);
    }
}
