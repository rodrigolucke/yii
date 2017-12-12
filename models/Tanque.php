<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tanque".
 *
 * @property integer $COD_TANQUE
 * @property string $CAPACIDADE
 * @property integer $COD_STATUS
 *
 * @property Estoque[] $estoques
 * @property Status $cODSTATUS
 * @property TanqueEstoque[] $tanqueEstoques
 */
class Tanque extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tanque';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CAPACIDADE'], 'number'],
            [['COD_STATUS'], 'integer'],
            [['COD_STATUS'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['COD_STATUS' => 'COD_STATUS']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_TANQUE' => 'Cod  Tanque',
            'CAPACIDADE' => 'Capacidade',
            'COD_STATUS' => 'Cod  Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstoques()
    {
        return $this->hasMany(Estoque::className(), ['COD_TANQUE' => 'COD_TANQUE']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODSTATUS()
    {
        return $this->hasOne(Status::className(), ['COD_STATUS' => 'COD_STATUS']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTanqueEstoques()
    {
        return $this->hasMany(TanqueEstoque::className(), ['COD_TANQUE' => 'COD_TANQUE']);
    }
}
