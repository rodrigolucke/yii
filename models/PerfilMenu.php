<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "perfil_menu".
 *
 * @property integer $SEQ_PERFIL_MENU
 * @property integer $COD_PERFIL
 * @property integer $COD_MENU
 *
 * @property Menu $cODMENU
 * @property Perfil $cODPERFIL
 */
class PerfilMenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'perfil_menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['COD_PERFIL', 'COD_MENU'], 'integer'],
            [['COD_MENU'], 'exist', 'skipOnError' => true, 'targetClass' => Menu::className(), 'targetAttribute' => ['COD_MENU' => 'COD_MENU']],
            [['COD_PERFIL'], 'exist', 'skipOnError' => true, 'targetClass' => Perfil::className(), 'targetAttribute' => ['COD_PERFIL' => 'COD_PERFIL']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'SEQ_PERFIL_MENU' => 'Seq  Perfil  Menu',
            'COD_PERFIL' => 'Cod  Perfil',
            'COD_MENU' => 'Cod  Menu',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODMENU()
    {
        return $this->hasOne(Menu::className(), ['COD_MENU' => 'COD_MENU']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODPERFIL()
    {
        return $this->hasOne(Perfil::className(), ['COD_PERFIL' => 'COD_PERFIL']);
    }
}
