<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "medicacao_animal".
 *
 * @property integer $COD_MEDICACAO_ANIMAL
 * @property integer $COD_MEDICACAO
 * @property integer $COD_ANIMAL
 *
 * @property Medicacao $cODMEDICACAO
 * @property Animal $cODANIMAL
 */
class MedicacaoAnimal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'medicacao_animal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['COD_MEDICACAO', 'COD_ANIMAL'], 'required'],
            [['COD_MEDICACAO', 'COD_ANIMAL'], 'integer'],
            [['COD_MEDICACAO'], 'exist', 'skipOnError' => true, 'targetClass' => Medicacao::className(), 'targetAttribute' => ['COD_MEDICACAO' => 'COD_MEDICACAO']],
            [['COD_ANIMAL'], 'exist', 'skipOnError' => true, 'targetClass' => Animal::className(), 'targetAttribute' => ['COD_ANIMAL' => 'COD_ANIMAL']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_MEDICACAO_ANIMAL' => 'Cod  Medicacao  Animal',
            'COD_MEDICACAO' => 'Cod  Medicacao',
            'COD_ANIMAL' => 'Cod  Animal',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODMEDICACAO()
    {
        return $this->hasOne(Medicacao::className(), ['COD_MEDICACAO' => 'COD_MEDICACAO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODANIMAL()
    {
        return $this->hasOne(Animal::className(), ['COD_ANIMAL' => 'COD_ANIMAL']);
    }
}
