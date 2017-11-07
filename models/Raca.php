<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "raca".
 *
 * @property integer $COD_RACA
 * @property string $DESCRICAO
 *
 * @property Animal[] $animals
 */
class Raca extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'raca';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DESCRICAO'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_RACA' => 'Código',
            'DESCRICAO' => 'Descrição',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnimals()
    {
        return $this->hasMany(Animal::className(), ['COD_RACA' => 'COD_RACA']);
    }

    /**
     * @inheritdoc
     * @return RacaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RacaQuery(get_called_class());
    }
}
