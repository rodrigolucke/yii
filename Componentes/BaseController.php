<?php

namespace app\componentes;
//namespace moduloCatalogoServicos\components;

use Yii;
use yii\web;
use yii\web\Controller;
use yii\filters\AccessControl;




class BaseController extends Controller{
	
	
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
						//$controller = $this->id;
						//$actionRequerida = $action->id;
									
						return Funcoes::verificarSeUsuarioTemPermissaoNaUrl(Yii::$app->controller->id);
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