<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
?>
<h1>relatorio-venda</h1>

<html>
	<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Relat&oacute;rio de Vendas</title>
    <link rel="stylesheet" type="text/css" href="../estilo/bootstrap/css/bootstrap.css" />
        <script src="estilo/bootstrap/js/jquery.js"></script>
        <script src="estilo/bootstrap/js/bootstrap.js"></script>
        <script src="utils/mascaraDados.js"></script>
    </head>
    <body>

	<form name="formulario" target="_self" action="index.php?r=relatorio-venda%2Frelatorio-venda" method ="POST">
        <table width="730px">
            <tr>
                <td colspan="2"  class="text-info" style="border-bottom:solid 1px #0CF; font-size:20px;">Relat&oacute;rio de Vendas</td>
            </tr>    
            <tr>
                <td colspan="2">
					<fieldset style="width:100%" >
                    	<legend>Per&iacute;odo:</legend>
                        	<table>
                                <tr>
                                    <td style="text-align:center;">
                                        De<input type="text" name="dataIni" onKeyPress="return (soNums(event))" onkeyup="mascara_data(this, this.value)" maxlength="10" size="10" placeholder="DD/MM/AAAA">
                                        at&eacute; <input type="text" name="dataFim" onKeyPress="return (soNums(event))" onkeyup="mascara_data(this, this.value)" maxlength="10" size="10" placeholder="DD/MM/AAAA">
                                    </td>
                                </tr>
                            </table>
                    </fieldset>
                
                </td>
            </tr>

            <tr>
                <td style="text-align:center; padding-top:50px;">
                    
                      <input type="submit" value="gera" class="btn btn-success"> </input>
                      <button class="btn btn-success">Limpar</button>
                </td>
            </tr>
        </table>
	</form>    
     
    
    </body>    
</html>



