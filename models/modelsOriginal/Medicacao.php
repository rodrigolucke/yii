<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "medicacao".
 *
 * @property integer $COD_MEDICACAO
 * @property string $DESCR
 *
 * @property MedicacaoAnimal[] $medicacaoAnimals
 */
class Medicacao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'medicacao';
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
            'COD_MEDICACAO' => 'Cod  Medicacao',
            'DESCR' => 'Descr',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMedicacaoAnimals()
    {
        return $this->hasMany(MedicacaoAnimal::className(), ['COD_MEDICACAO' => 'COD_MEDICACAO']);
    }
}
