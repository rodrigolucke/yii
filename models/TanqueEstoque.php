<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tanque_estoque".
 *
 * @property integer $SEQ_TANQUE_ESTOQUE
 * @property integer $COD_ESTOQUE
 * @property integer $COD_TANQUE
 *
 * @property Tanque $cODTANQUE
 * @property Estoque $cODESTOQUE
 */
class TanqueEstoque extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tanque_estoque';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['COD_ESTOQUE', 'COD_TANQUE'], 'required'],
            [['COD_ESTOQUE', 'COD_TANQUE'], 'integer'],
            [['COD_TANQUE'], 'exist', 'skipOnError' => true, 'targetClass' => Tanque::className(), 'targetAttribute' => ['COD_TANQUE' => 'COD_TANQUE']],
            [['COD_ESTOQUE'], 'exist', 'skipOnError' => true, 'targetClass' => Estoque::className(), 'targetAttribute' => ['COD_ESTOQUE' => 'COD_ESTOQUE']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'SEQ_TANQUE_ESTOQUE' => 'Seq  Tanque  Estoque',
            'COD_ESTOQUE' => 'Cod  Estoque',
            'COD_TANQUE' => 'Cod  Tanque',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODTANQUE()
    {
        return $this->hasOne(Tanque::className(), ['COD_TANQUE' => 'COD_TANQUE']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODESTOQUE()
    {
        return $this->hasOne(Estoque::className(), ['COD_ESTOQUE' => 'COD_ESTOQUE']);
    }
}
