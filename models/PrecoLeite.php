<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "preco_leite".
 *
 * @property integer $COD_PRECO_LEITE
 * @property string $PRECO_LITRO
 * @property string $DT_ATUALIZACAO
 * @property integer $COD_USUARIO
 *
 * @property Usuario $cODUSUARIO
 * @property Venda[] $vendas
 */
class PrecoLeite extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'preco_leite';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PRECO_LITRO'], 'number'],
            [['DT_ATUALIZACAO'], 'safe'],
            [['COD_USUARIO'], 'integer'],
            [['COD_USUARIO'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['COD_USUARIO' => 'COD_USUARIO']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_PRECO_LEITE' => 'Cod  Preco  Leite',
            'PRECO_LITRO' => 'Preco  Litro',
            'DT_ATUALIZACAO' => 'Dt  Atualizacao',
            'COD_USUARIO' => 'Cod  Usuario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODUSUARIO()
    {
        return $this->hasOne(Usuario::className(), ['COD_USUARIO' => 'COD_USUARIO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendas()
    {
        return $this->hasMany(Venda::className(), ['COD_PRECO_LEITE' => 'COD_PRECO_LEITE']);
    }
}
