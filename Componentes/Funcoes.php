<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace yii\componentes;

/**
 * Description of Funcoes
 *
 * @author teste
 */
class Funcoes {
    //put your code here
    
    
    public static function verificarSeUsuarioTemPermissaoNoComponente($controller, $actionRequerida){
		
		$modulo = Yii::$app->id;
		$listaPermissoes = Yii::$app->session->get('user.listaPermissoesAcesso');
		
		if( self::verificarSeEstaNasUrlsLivres( $controller, $actionRequerida ) ){
			return true;
		}
		
		if( $actionRequerida == 'desconectar-usuario-permissoes-assumidas' ){			
			$nomeUsuarioPermissoesAssumidas = Yii::$app->session->get('user.nomeUsuarioPermissoesAssumidas');
			if( $nomeUsuarioPermissoesAssumidas != null ){
				return true;
			}
		}
		
		if( $listaPermissoes != null && $listaPermissoes->$modulo != null ){
			if( $listaPermissoes->$modulo->$controller != null ){		
				if( in_array( $actionRequerida, $listaPermissoes->$modulo->$controller ) ){				
				
					$posicaoDaActionNaListaDeActionsDisponiveis = array_search( $actionRequerida, $listaPermissoes->$modulo->$controller );
					$valorDaActionSendoAcessada = array_values($listaPermissoes->$modulo->$controller)[$posicaoDaActionNaListaDeActionsDisponiveis];
										
					
					
					return true;
				}
			}		
		}
		
		return false;
	}
}
