<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estoque".
 *
 * @property integer $COD_ESTOQUE
 * @property string $CAPACIDADE
 * @property string $DESCR
 *
 * @property MovimentoEstoque[] $movimentoEstoques
 */
class Estoque extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estoque';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CAPACIDADE'], 'number'],
            [['DESCR'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_ESTOQUE' => 'Cod  Estoque',
            'CAPACIDADE' => 'Capacidade',
            'DESCR' => 'Descr',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovimentoEstoques()
    {
        return $this->hasMany(MovimentoEstoque::className(), ['COD_ESTOQUE' => 'COD_ESTOQUE']);
    }
}
