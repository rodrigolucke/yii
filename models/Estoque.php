<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estoque".
 *
 * @property integer $COD_ESTOQUE
 * @property string $DESCR
 * @property string $RESERVADO
 * @property string $LOCALIZACAO
 * @property string $QUANTIDADE
 *
 * @property MovimentoEstoque[] $movimentoEstoques
 * @property TanqueEstoque[] $tanqueEstoques
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
            [['RESERVADO', 'QUANTIDADE'], 'number'],
            [['DESCR'], 'string', 'max' => 50],
            [['LOCALIZACAO'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_ESTOQUE' => 'Cod  Estoque',
            'DESCR' => 'Descr',
            'RESERVADO' => 'Reservado',
            'LOCALIZACAO' => 'Localizacao',
            'QUANTIDADE' => 'Quantidade',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovimentoEstoques()
    {
        return $this->hasMany(MovimentoEstoque::className(), ['COD_ESTOQUE' => 'COD_ESTOQUE']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTanqueEstoques()
    {
        return $this->hasMany(TanqueEstoque::className(), ['COD_ESTOQUE' => 'COD_ESTOQUE']);
    }
}
