<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lote_animal".
 *
 * @property integer $COD_LOTE_ANIMAL
 * @property string $DESCR
 * @property integer $COD_ANIMAL
 *
 * @property HistoricoColeta[] $historicoColetas
 * @property Animal $cODANIMAL
 */
class LoteAnimal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lote_animal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['COD_ANIMAL'], 'integer'],
            [['DESCR'], 'string', 'max' => 60],
            [['COD_ANIMAL'], 'exist', 'skipOnError' => true, 'targetClass' => Animal::className(), 'targetAttribute' => ['COD_ANIMAL' => 'COD_ANIMAL']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_LOTE_ANIMAL' => 'Cod  Lote  Animal',
            'DESCR' => 'Descr',
            'COD_ANIMAL' => 'Cod  Animal',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistoricoColetas()
    {
        return $this->hasMany(HistoricoColeta::className(), ['COD_LOTE_ANIMAL' => 'COD_LOTE_ANIMAL']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODANIMAL()
    {
        return $this->hasOne(Animal::className(), ['COD_ANIMAL' => 'COD_ANIMAL']);
    }
}
