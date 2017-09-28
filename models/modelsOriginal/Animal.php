<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "animal".
 *
 * @property integer $COD_ANIMAL
 * @property integer $COD_RACA
 * @property string $DT_NASCIMENTO
 * @property string $DT_FALECIMENTO
 *
 * @property Raca $cODRACA
 * @property LoteAnimal[] $loteAnimals
 * @property MedicacaoAnimal[] $medicacaoAnimals
 */
class Animal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'animal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['COD_RACA'], 'required'],
            [['COD_RACA'], 'integer'],
            [['DT_NASCIMENTO', 'DT_FALECIMENTO'], 'safe'],
            [['COD_RACA'], 'exist', 'skipOnError' => true, 'targetClass' => Raca::className(), 'targetAttribute' => ['COD_RACA' => 'COD_RACA']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_ANIMAL' => 'Cod  Animal',
            'COD_RACA' => 'Cod  Raca',
            'DT_NASCIMENTO' => 'Dt  Nascimento',
            'DT_FALECIMENTO' => 'Dt  Falecimento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODRACA()
    {
        return $this->hasOne(Raca::className(), ['COD_RACA' => 'COD_RACA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLoteAnimals()
    {
        return $this->hasMany(LoteAnimal::className(), ['COD_ANIMAL' => 'COD_ANIMAL']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMedicacaoAnimals()
    {
        return $this->hasMany(MedicacaoAnimal::className(), ['COD_ANIMAL' => 'COD_ANIMAL']);
    }
}
