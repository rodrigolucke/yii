<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "status".
 *
 * @property integer $COD_STATUS
 * @property string $DESCRICAO_STATUS
 */
class Status extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DESCRICAO_STATUS'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_STATUS' => 'Cod  Status',
            'DESCRICAO_STATUS' => 'Descricao  Status',
        ];
    }
}
