<?php

	include ("utils/formataDados.php");
	include ("conexao/Conexao.php");
	include ("utils/Feedback.php");
	
	
	$conexao 	= new Conexao();
	$feedback	= new Feedback();
	
	
	$sql = "
		SELECT
			A.COD_VENDA 	AS COD_VENDA,
			B.NOME_EMPRESA 	AS CLIENTE,    
			A.PRECO_LITRO 	AS PRECO_LITRO,
			A.QUANTIDADE 	AS QUANTIDADE,
			A.DATA 			AS DATA  
		FROM
			venda 				A,
			empresa 			B,
			movimento_estoque 	C
		WHERE
			A.COD_EMPRESA = B.COD_EMPRESA
			AND C.COD_MOVIMENTO_ESTOQUE = A.COD_MOVIMENTO_ESTOQUE
			AND C.TIPO_MOVIMENTO = 'S' -- SOMENTE VENDA (MOVIMENTO = SAIDA)
		ORDER BY
			DATA";	
	$rs 		= $conexao->executaQuery($sql);
	$totalRows  = $conexao->contaLinhas($rs);
	
	if($totalRows == 0){
		echo $feedback->rsVazio();
		exit;
	}
	
	


	$arrDados = array();
	for($i = 0; $i < $totalRows; $i++){
 	 	array_push($arrDados, $conexao->proximaLinha($rs));
	}
?>

<html>
	<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Relat&oacute;rio de Vendas</title>
    <link rel="stylesheet" type="text/css" href="../estilo/estilo.css" />
    </head>
    <body>

<?php
	
	// SETUP
	$cab				= true;
	$quantidadeTotal 	= 0;
	$valorTotal			= 0;
	
	for($i = 0; $i < count($arrDados); $i++){		
		if($cab){
?>
	<table style="border-collapse:collapse;">
    	<tr>
        	<th colspan="6"><strong>Relat&oacute;rio de Venda</strong></th>
        </tr>
        <tr>
        	<th width="10%">C&oacute;digo</th>
        	<th width="15%">Data</th>
        	<th width="35%">Cliente</th>
        	<th width="10%">Pre&ccedil;o (R$/L)</th>
        	<th width="10%">Quantidade (L)</th>
        	<th width="20%">Valor Total da Venda (R$)</th>
        </tr>

        <tr>
        </tr>
<?php
			$cab = false;
		}
?>		
    	<tr>
        	<td class="celula" style="text-align:center;"><?= $arrDados[$i]['COD_VENDA'] ?></td>
        	<td class="celula" style="text-align:center;"><?= datap($arrDados[$i]['DATA']); ?></td>
        	<td class="celula"><?= $arrDados[$i]['CLIENTE'] ?></td>
        	<td class="celula" style="text-align:right;"><?= valorp($arrDados[$i]['PRECO_LITRO']) ?>&nbsp;</td>
        	<td class="celula" style="text-align:right;"><?= valorint($arrDados[$i]['QUANTIDADE']) ?>&nbsp;</td>
        	<td class="celula" style="text-align:right;"><?= valorp($arrDados[$i]['QUANTIDADE']*$arrDados[$i]['PRECO_LITRO']) ?>&nbsp;</td>
        </tr>		
<?php
		// TOTAIS
		$quantidadeTotal 	+= $arrDados[$i]['QUANTIDADE'];
		$valorTotal			+= $arrDados[$i]['QUANTIDADE']*$arrDados[$i]['PRECO_LITRO'];
	}
?>    
		<tr>
        	<td colspan="4" style="border:none; text-align:right;"><strong>Total:</strong></td>
        	<td style="text-align:right;"><strong><?= valorint($quantidadeTotal); ?><strong></td>
        	<td style="text-align:right;"><strong><?= valorp($valorTotal); ?></strong></td>
        </tr>
    </table>    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </body>    
</html>

