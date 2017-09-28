<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "perfil".
 *
 * @property integer $COD_PERFIL
 * @property string $DESCR
 *
 * @property Menu[] $menus
 */
class Perfil extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'perfil';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DESCR'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_PERFIL' => 'Cod  Perfil',
            'DESCR' => 'Descr',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenus()
    {
        return $this->hasMany(Menu::className(), ['COD_PERFIL' => 'COD_PERFIL']);
    }
}
