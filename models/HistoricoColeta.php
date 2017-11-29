<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "historico_coleta".
 *
 * @property integer $COD_HISTORICO_COLETA
 * @property string $DATA_COLETA
 * @property string $QUANTIDADE
 * @property integer $COD_USUARIO
 * @property integer $COD_LOTE_ANIMAIS
 * @property integer $COD_LOTE
 * @property integer $COD_MOVIMENTO_ESTOQUE
 *
 * @property Usuario $cODUSUARIO
 * @property LoteAnimais $cODLOTEANIMAIS
 * @property LoteEquipamentos $cODLOTE
 * @property MovimentoEstoque $cODMOVIMENTOESTOQUE
 */
class HistoricoColeta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'historico_coleta';
    }

    
   public function afterFind() {	
		if( $this->DATA_COLETA != null ) {
			$dateTime = \DateTime::createFromFormat("Y-m-d H:i:s", $this->DATA_COLETA);
			$this->DATA_COLETA = Yii::$app->formatter->asDatetime($dateTime, "php:d/m/Y");
		}
						
		return parent::afterFind();
                
    }
       
    
    
    public function beforeSave($insert) {		
		if( $this->DATA_COLETA != null ) {
			if( strlen( $this->DATA_COLETA ) == 10 ){
				$this->DATA_COLETA .= '00:00:00';
			}
			$dateTime = \DateTime::createFromFormat("d/m/Y H:i:s", $this->DATA_COLETA);
			$this->DATA_COLETA = Yii::$app->formatter->asDatetime($dateTime, "php:Y-m-d H:i:s");
		}
		
		return parent::beforeSave($insert);
	}
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DATA_COLETA'], 'safe'],
            [['QUANTIDADE'], 'number'],
            [['COD_USUARIO', 'COD_LOTE_ANIMAIS', 'COD_MOVIMENTO_ESTOQUE'], 'required'],
            [['COD_USUARIO', 'COD_LOTE_ANIMAIS', 'COD_LOTE', 'COD_MOVIMENTO_ESTOQUE'], 'integer'],
            [['COD_USUARIO'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['COD_USUARIO' => 'COD_USUARIO']],
            [['COD_LOTE_ANIMAIS'], 'exist', 'skipOnError' => true, 'targetClass' => LoteAnimais::className(), 'targetAttribute' => ['COD_LOTE_ANIMAIS' => 'COD_LOTE_ANIMAIS']],
            [['COD_LOTE'], 'exist', 'skipOnError' => true, 'targetClass' => LoteEquipamentos::className(), 'targetAttribute' => ['COD_LOTE' => 'COD_LOTE']],
            [['COD_MOVIMENTO_ESTOQUE'], 'exist', 'skipOnError' => true, 'targetClass' => MovimentoEstoque::className(), 'targetAttribute' => ['COD_MOVIMENTO_ESTOQUE' => 'COD_MOVIMENTO_ESTOQUE']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_HISTORICO_COLETA' => 'Cod  Historico  Coleta',
            'DATA_COLETA' => 'Data  Coleta',
            'QUANTIDADE' => 'Quantidade',
            'COD_USUARIO' => 'Cod  Usuario',
            'COD_LOTE_ANIMAIS' => 'Cod  Lote  Animais',
            'COD_LOTE' => 'Cod  Lote',
            'COD_MOVIMENTO_ESTOQUE' => 'Cod  Movimento  Estoque',
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
    public function getCODLOTEANIMAIS()
    {
        return $this->hasOne(LoteAnimais::className(), ['COD_LOTE_ANIMAIS' => 'COD_LOTE_ANIMAIS']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODLOTE()
    {
        return $this->hasOne(LoteEquipamentos::className(), ['COD_LOTE' => 'COD_LOTE']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODMOVIMENTOESTOQUE()
    {
        return $this->hasOne(MovimentoEstoque::className(), ['COD_MOVIMENTO_ESTOQUE' => 'COD_MOVIMENTO_ESTOQUE']);
    }
}
