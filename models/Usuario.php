<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $COD_USUARIO
 * @property string $USUARIO
 * @property string $SENHA
 * @property string $DATA_CADASTRO
 * @property integer $COD_STATUS
 * @property integer $COD_PESSOA
 *
 * @property HistoricoColeta[] $historicoColetas
 * @property PerfilUsuario[] $perfilUsuarios
 * @property Pessoa $cODPESSOA
 * @property Status $cODSTATUS
 */
class Usuario extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DATA_CADASTRO'], 'safe'],
            [['COD_STATUS', 'COD_PESSOA'], 'required'],
            [['COD_STATUS', 'COD_PESSOA'], 'integer'],
            [['USUARIO', 'SENHA'], 'string', 'max' => 10],
            [['USUARIO'], 'unique'],
            [['COD_PESSOA'], 'exist', 'skipOnError' => true, 'targetClass' => Pessoa::className(), 'targetAttribute' => ['COD_PESSOA' => 'COD_PESSOA']],
            [['COD_STATUS'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['COD_STATUS' => 'COD_STATUS']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_USUARIO' => 'Cod  Usuario',
            'USUARIO' => 'Usuario',
            'SENHA' => 'Senha',
            'DATA_CADASTRO' => 'Data  Cadastro',
            'COD_STATUS' => 'Cod  Status',
            'COD_PESSOA' => 'Cod  Pessoa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistoricoColetas()
    {
        return $this->hasMany(HistoricoColeta::className(), ['COD_USUARIO' => 'COD_USUARIO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerfilUsuarios()
    {
        return $this->hasMany(PerfilUsuario::className(), ['COD_USUARIO' => 'COD_USUARIO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODPESSOA()
    {
        return $this->hasOne(Pessoa::className(), ['COD_PESSOA' => 'COD_PESSOA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODSTATUS()
    {
        return $this->hasOne(Status::className(), ['COD_STATUS' => 'COD_STATUS']);
    }
    
    /**
   * @inheritdoc
   * @return UsuarioQuery the active query used by this AR class.
   */
  public static function find()
  {
      return new UsuarioQuery(get_called_class());
  }
   
   
  public function getId()
  {
      return $this->COD_USUARIO;
  }
   
  public function getAuthKey()
  {
      return $this->COD_PESSOA;
  }
   
  public function validateAuthKey($authKey)
  {
      return true;
  }           
   
  public static function findIdentity($id)
  {
      return self::findOne(['COD_USUARIO'=>$id]);
  }
   
  public static function findIdentityByAccessToken($token, $type = null)
  {
       throw new NotSupportedException(__METHOD__ . ' is not supported.');
  }
   
  public static function findByUsername($username)
  {
      return self::findOne(['USUARIO'=>$username]);
  }
  public function validatePassword($password)
  {
      return $this->SENHA === $password;
  }  
}
