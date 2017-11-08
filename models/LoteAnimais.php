<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lote_animais".
 *
 * @property integer $COD_LOTE_ANIMAIS
 * @property integer $COD_ANIMAL
 *
 * @property HistoricoColeta[] $historicoColetas
 * @property Animal $cODANIMAL
 */
class LoteAnimais extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lote_animais';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['COD_ANIMAL'], 'integer'],
            [['COD_ANIMAL'], 'exist', 'skipOnError' => true, 'targetClass' => Animal::className(), 'targetAttribute' => ['COD_ANIMAL' => 'COD_ANIMAL']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_LOTE_ANIMAIS' => 'Cod  Lote  Animais',
            'COD_ANIMAL' => 'Cod  Animal',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistoricoColetas()
    {
        return $this->hasMany(HistoricoColeta::className(), ['COD_LOTE_ANIMAIS' => 'COD_LOTE_ANIMAIS']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODANIMAL()
    {
        return $this->hasOne(Animal::className(), ['COD_ANIMAL' => 'COD_ANIMAL']);
    }
}
