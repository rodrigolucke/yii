<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "raca".
 *
 * @property integer $COD_RACA
 * @property string $DESCR
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
            [['DESCR'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_RACA' => 'Cod  Raca',
            'DESCR' => 'Descr',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnimals()
    {
        return $this->hasMany(Animal::className(), ['COD_RACA' => 'COD_RACA']);
    }
}
