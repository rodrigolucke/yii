<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_movimento_estoque".
 *
 * @property integer $COD_TIPO_MOVIMENTO_ESTOQUE
 * @property string $DESCR
 *
 * @property MovimentoEstoque[] $movimentoEstoques
 */
class TipoMovimentoEstoque extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo_movimento_estoque';
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
            'COD_TIPO_MOVIMENTO_ESTOQUE' => 'Cod  Tipo  Movimento  Estoque',
            'DESCR' => 'Descr',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovimentoEstoques()
    {
        return $this->hasMany(MovimentoEstoque::className(), ['COD_TIPO_MOVIMENTO_ESTOQUE' => 'COD_TIPO_MOVIMENTO_ESTOQUE']);
    }
}
