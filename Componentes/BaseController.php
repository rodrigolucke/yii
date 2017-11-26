<?php

namespace yii\componentes;
//namespace moduloCatalogoServicos\components;

use Yii;
use yii\filters\AccessControl;
use yii\componentes;
use app\componentes;
use \app\models;


class BaseController extends BaseController{
	
	
	/**
	 * @inheritdoc
	 */
	public function behaviors() 
	{
		return [
			'access' => [
				'class' => AccessControl::className(),
				'rules' => [
					[
					'allow' => true,
					'matchCallback' => function ($rule) {											
						$controller = $this->id;
						//$actionRequerida = $action->id;
									
						return \app\models\Usuario::buscarAcessosPerfil($controller);
					},
					]
				]
			]
		];
	}
	
	public function beforeAction($action)
	{	
		if (!parent::beforeAction($action)) {
			return false;
		}
		// Check only when the user is logged in
		if ( !Yii::$app->user->isGuest)  {
			if (Yii::$app->session->get('user.sessionTimeout') < time()) {
				Yii::$app->user->logout();
				return $this->goBack();
			} else {
				if( isset( $_POST['codigoAreaServicoSelecionado'] ) ) {
					Yii::$app->session->set('user.areaServico', $_POST['codigoAreaServicoSelecionado']);				
				}
				
				Yii::$app->session->set('user.sessionTimeout', time() + Yii::$app->params['sessionTimeoutSeconds'] );
				return true;
			}
		} else {		
			return true;
		}
	}
}