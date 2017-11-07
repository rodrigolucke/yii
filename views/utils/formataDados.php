<?php

 
##############################################################################################
# TROCA DE DATA FORMATO INGLES -> PORTUGUES (AAAA-MM-DD -> DD/MM/AAAA)
##############################################################################################
 
function datap($data) {

// $tamanho = strlen($data);

// echo($tamanho);
if ($data) {
	$ano = (int) substr($data,0,4);
	$mes = (int) substr($data,5,2);
	$dia = (int) substr($data,8,2);
	if (checkdate($mes, $dia, $ano)) {
		if ($mes <= 9) $mes = "0" . $mes;
		if ($dia <= 9) $dia = "0" . $dia;
		$data = $dia . "/" . $mes . "/" . $ano;
	} else {
		$data = "";
	}
}

return ($data);

}

/*
##############################################################################################
# CONVERTE VALORES VALORES PARA PORTUGUÊS (1.234,56)
##############################################################################################
*/

function valorp($valor) {

$valor = number_format($valor, 2, ",", ".");

return($valor); 
}

/*
##############################################################################################
# CONVERTE VALORES VALORES PARA PORTUGUÊS INTEIRO (1.234)
##############################################################################################
*/

function valorint($valor) {

$valor = number_format($valor, 0, ",", ".");

return($valor); 
}
  
 
/*
##############################################################################################
# MASCARA PARA CEP = 999.999.999-99      ENTRADA = TEXTO
##############################################################################################
*/
function mascara_CPF($valor) {
	$x = $valor;
		
	//VERIFICA SE O CPF TEM O TAMANHO PADRAO PARA A FUNCAO (11 CARACTERES)
	for ($i = strlen($x); $i < 11; $i++) {
		$x = "0" . $x;
	}

	// COLOCA MASCARA NO CPF
	for ($i=0; $i<=strlen($x); $i++) {

		$cpf .= substr($x, $i, 1);
		if ($i == 2) {
			$cpf .= ".";
		} elseif ($i == 5) {
			$cpf .= ".";
		} elseif ($i == 8) {
			$cpf .= "-";		
		} 
	}
	return($cpf);
}
 

?>