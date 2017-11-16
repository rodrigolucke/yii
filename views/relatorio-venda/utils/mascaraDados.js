// JavaScripts de formatação

// Função que permite apenas teclas numéricas
//  desta forma
// 
function soNums(e)	
{
	/* Uso: onKeyPress="return (soNums(event))" */
	if (document.all)
	{
		var evt=event.keyCode;
	}
	else
	{
		var evt = e.charCode;
	}
	if (evt <20 || (evt >47 && evt<58))
	{
		return true;
	}
	/* ver ainda quais sao os CHR do ponto e da vírgula */
	return false;
} 

// Funcao que formata o cpf na digitação.
function mascara_cpf(campo, cpf) { 
	/* uso: OnKeyUp="mascara_cpf(this, this.value)" */
	/* retorna: 999.999.999-99 */
	  if (cpf.length > 14){
		  // CPFporCNPJ(camp, cpf);
	  }
	  var mycpf = '';
	  var camp = campo.name;	  
	  mycpf = mycpf + cpf;
	  if (mycpf.length == 3){
		  mycpf = mycpf + '.';
	  eval("document.forms[0]."+camp+".value = mycpf");
	  }
	  if (mycpf.length == 7){
		  mycpf = mycpf + '.';
	  eval("document.forms[0]."+camp+".value = mycpf");
	  }
	  if (mycpf.length == 11){
		  mycpf = mycpf + '-';
	  eval("document.forms[0]."+camp+".value = mycpf");
	  }
	  if (mycpf.length > 14){
		  //CPFporCNPJ(camp, mycpf);
	  }
}
		  
// Funcao que formata o RG na digitação.		  
function mascara_rg(campo, rg) { 
	/* uso: OnKeyUp="mascara_rg(this, this.value)" */
	/* retorna: 999.999.999-9 */ 
	var myrg = '';
	var camp = campo.name;	  
	myrg = myrg + rg;
	if (myrg.length == 3){
		  myrg = myrg + '.';
	  eval("document.forms[0]."+camp+".value = myrg");
	}
	if (myrg.length == 7){
		  myrg = myrg + '.';
	  eval("document.forms[0]."+camp+".value = myrg");
	}
	if (myrg.length == 11){
		  myrg = myrg + '-';
	  eval("document.forms[0]."+camp+".value = myrg");
	}
	if (myrg.length == 13){
	}
}		  

// Funcao que formata o CEP.
function mascara_cep(campo, cep) { 
	/* uso: OnKeyUp="mascara_cep(this, this.value)" */
	/* retorna: 99.999-999 */
	var mycep = '';
	var camp = campo.name;	  
	mycep = mycep + cep;
	if (mycep.length == 2){
		  mycep = mycep + '.';
	  eval("document.forms[0]."+camp+".value = mycep");
	}
	if (mycep.length == 6){
		  mycep = mycep + '-';
	  eval("document.forms[0]."+camp+".value = mycep");
	}
	if (mycep.length == 10){
	}
}		  

// Funcao que formata o CEP.
function mascara_fone(campo, fone){ 
	/* uso: OnKeyUp="mascara_fone(this, this.value)" */
	/*	retorna: (99)9999-9999*/
	var myfone = '';
	var camp = campo.name;	
	myfone = myfone + fone;
	if (myfone.length == 1){
	  myfone = '(' + myfone ;
	  eval("document.forms[0]."+camp+".value = myfone");
	}
	if (myfone.length == 3){
	  myfone = myfone + ')';
	  eval("document.forms[0]."+camp+".value = myfone");
	}
	if (myfone.length == 8){
	  myfone = myfone + '-';
	  eval("document.forms[0]."+camp+".value = myfone");
	}
	if (myfone.length == 10){
	}
}		  

// Funçao que formata o cnpj.
function mascara_cnpj(campo, cnpj){ 
	/* uso: OnKeyUp="mascara_cnpj(this, this.value)" */  	
	/* retorna: 99.999.999/9999-99 */
	var mycnpj = '';
	var camp = campo.name;	
	mycnpj = mycnpj + cnpj;
	if (mycnpj.length == 2){
	  mycnpj = mycnpj + '.';
	  eval("document.forms[0]."+camp+".value = mycnpj");
	}
	if (mycnpj.length == 6){
	  mycnpj = mycnpj + '.';
	  eval("document.forms[0]."+camp+".value = mycnpj");
	}
	if (mycnpj.length == 10){
	  mycnpj = mycnpj + '/';
	  eval("document.forms[0]."+camp+".value = mycnpj");
	}
	if (mycnpj.length == 15){
	  mycnpj = mycnpj + '-';
	  eval("document.forms[0]."+camp+".value = mycnpj");
	}
	if (mycnpj.length == 18){
	}
}

// Funcao que troca o CPF pelo CNPJ quando exceder a quantidade de caracteres.
function CPFporCNPJ(campo, cpf) {
	// uso dentro da função mascara_cpf, quando exceder a quantidade de caracteres.
	// limpa o cpf
	for (i=0; i<= cpf.length; i++) {	
		cpf = cpf.replace(".", "");
	}
	mycpf = cpf.replace("-", "");
	for (i=0; i<= mycpf.length; i++) {
		//alert(mycpf.substr(i,1));
		mycnpj = mascara_cnpj(campo, mycpf.substr(i,1));
		
	}
	eval("document.forms[0]."+campo+".value = mycnpj");

}

// Funcao que formata a data.
function mascara_data(campo, data){ 
	/* uso: OnKeyUp="mascara_data(this, this.value)" */  	
	/*	retorna: dd/mm/aaaa */
	var mydata = '';
	var camp = campo.name;
	mydata = mydata + data;
	if (mydata.length == 2){
		mydata = mydata + '/';
	  eval("document.forms[0]."+camp+".value = mydata");
	}
	if (mydata.length == 5){
		mydata = mydata + '/';
	  eval("document.forms[0]."+camp+".value = mydata");
	}
	if (mydata.length == 10){
	}
}

// Funcao que completa a data com o ano em 4 digitos.
function completa_data(campo, data) {
	/* uso: onBlur="completa_data(this, this.value)" */
	/*	retorna: dd/mm/aaaa */
	var mydata = '';
	var camp = campo.name;
//	mydata = mydata + data;
	if (data.length == 8){
		
		var diames = data.substring(0, 6);
		var ano = "20"+data.substring(6,8);
		mydata = diames+ano;
		eval("document.forms[0]."+camp+".value = mydata");
	}
	
}

// Funcao que formata a hora.
function mascara_hora(campo, hora){ 
	/* uso: OnKeyUp="mascara_hora(this, this.value)" */  	
	/*	retorna: hh:mm:ss */
	var myhora = '';
	var camp = campo.name;
	var tamanho = campo.size;
	myhora = myhora + hora;
	if (myhora.length == 2){
		myhora = myhora + ':';
	  eval("document.forms[0]."+camp+".value = myhora");
	}
	if (myhora.length == 5 && myhora.length <= tamanho){
		myhora = myhora + ':';
	  eval("document.forms[0]."+camp+".value = myhora");
	}
}

// Funcao que transforma em maiúsculas.
function maiuscula(campo, texto){ 
	/* uso: OnKeyUp="maiuscula(this, this.value)" */
	/* OBS: não importa o nome do campo. */
	/* retorna: ABCDEFG... */
	  var mytexto = '';
	  var camp = campo.name;
	  mytexto = mytexto + texto;
	  eval("document.forms[0]."+camp+".value = mytexto.toUpperCase()");
}	

// Funcao que transforma em maiúsculas.
function minuscula(campo, texto){ 
	/* uso: OnKeyUp="minuscula(this, this.value)" */
	/* OBS: não importa o nome do campo. */
	/* retorna: abcdefg... */
	  var mytexto = '';
	  var camp = campo.name;
	  mytexto = mytexto + texto;
	  eval("document.forms[0]."+camp+".value = mytexto.toLowerCase()");
}	

// Funcao que formata placas de veículos.
function mascara_placaVeiculo(campo, placa){ 
	/* uso: OnKeyUp="mascara_placaVeiculo(this, this.value)" */  	
	/*	retorna: AAA-9999 */
	var myplaca = '';
	var camp = campo.name;
	myplaca = myplaca + placa;
	if (myplaca.length == 3){
		myplaca = myplaca + '-';
	  eval("document.forms[0]."+camp+".value = myplaca.toUpperCase()");
	}
}


// completa o ano sendo o campo mes/ano tambem verifica se o mes é valido
// deve-se passar o campo (this) o valor this.value e 1 para completar o ano 0 para verificar mes e inserir /
function mascara_mes_data(obj, valor, completa_ano){		
	if(completa_ano == 1)	{
		if (valor.length == 5)		{		
			var mes = valor.substring(0, 3);
			var ano = "20" + valor.substring(3,5);
			obj.value = mes + ano;			
		}
		else if (valor.length == 6)	{		
			var mes = valor.substring(0, 3);
			var ano = "2" + valor.substring(3,6);
			obj.value = mes + ano;			
		}

	}
	else if(completa_ano == 0)	{
		var mes = valor.substring(0, 2);
		if (mes > 12)		{
			alert('Por favor insira um mes valido!!');
			obj.value = '';
		}
		else{
			if(valor.length == 2){			
				obj.value = obj.value + '/';
			}
		}
	}
}
 

// completa ano
function mascara_ano(obj){		
		if (obj.value.length == 2)		{		
			var ano = "20" + obj.value;
			obj.value = ano;			
	} else if (obj.value.length == 3)		{		
			var ano = "2" + obj.value;
			obj.value = ano;			
	}
}



// verifica o intervalo de datas mes/ano retornando null caso data inicial seja maior que a final
// deve-se passar o id dos campos como parametro
function compara_data(data_ini, data_fim){	
	var dt_ini = document.getElementById(data_ini).value;
	var dt_fim = document.getElementById(data_fim).value;
	
	if((dt_ini != '') && (dt_fim != '')){
		var ano_ini = dt_ini.substring(4, 7);
		var ano_fim = dt_fim.substring(4, 7);
		var mes_ini = dt_ini.substring(0, 2);
		var mes_fim = dt_fim.substring(0, 2);
		
		if(ano_ini > ano_fim){
			alert('Verifique o intervalo das datas, "inicial deve ser menor que final"!');
			return false;			
		}
		else if(ano_ini == ano_fim){
			if(mes_ini > mes_fim){
				alert('Verifique o intervalo das datas, "inicial deve ser menor que final"!');
				return false;
			}
			else{
				return true;
			}
		}
		else{
			return true;	
		}
	}else
	{
		alert('Por favor preencha os campos necessários!!');
		return false;
	}
}


// Troca cor do background de uma linha da tabela quando clicado com o botao esquerdo do mouse, 
// quando clicado duas vezes volta a cor branca para o background
function troca_cor(obj, chave)
{
   if(chave == 0)
		obj.style.backgroundColor = "#FFFF00";
	else if(chave == 1)
		obj.style.backgroundColor = "#FFFFFF";		
}


// informa se as datas estao no periodo correto (se nao passou de 31 dias ou 12 meses) e completa com (/) 
// deve ser usada em conjunto com a funçao completa_ANO()
function data_DMA(obj)
{		
	
	var dia = obj.value.substring(0, 2);
	if (dia > 31)		
	{
		alert('Por favor insira um dia válido!!');
		obj.value = '';
	}
	else
	{
		if(obj.value.length == 2)
		{			
			obj.value = obj.value + '/';
		}
	}

	
	var mes = obj.value.substring(3, 5);
	if (mes > 12)		
	{
		alert('Por favor insira um mes valido!!');
		obj.value = obj.value.substring(0, 2) + '/';
	}
	else
	{
		if(obj.value.length == 5)
		{			
			obj.value = obj.value + '/';
		}
	}		
}

// Completa somente o ano ( deve ser usada em conjunto com a funçao data_DMA() )
function completa_ANO(obj)
{
	if (obj.value.length == 8)		
	{		
		var data = obj.value.substring(0, 6);
		var ano = "20" + obj.value.substring(6,8);
		obj.value = data + ano;			
	}
	else if (obj.value.length == 9)	
	{		
		var data = obj.value.substring(0, 6);
		var ano = "2" + obj.value.substring(6,9);
		obj.value = data + ano;			
	}		
}

// Cria AJAX para campos dinamicos
function cria_ajax() 
{
	var ajax;
	try
	{
		 ajax = new XMLHttpRequest(); // XMLHttpRequest para browsers decentes, como: Firefox, Safari, dentre outros.
	}
	catch(ee)
	{
		 try
		 {
			  ajax = new ActiveXObject("Msxml2.XMLHTTP"); // Para o IE da MS
		 }
		 catch(e)
		 {
			  try
			  {
					ajax = new ActiveXObject("Microsoft.XMLHTTP"); // Para o IE da MS
			  }
			  catch(E)
			  {
					ajax = false;
			  }
		 }
	}
	return ajax;
}

function retorna_ajax(campo_retorno, loja_busca, div_retorno)
{	
	var input_resultado = document.getElementById(campo_retorno);
	if(input_resultado.value != '')
	{
		var ajax = cria_ajax(); // Inicia o Ajax.
		var caminho = document.domain;
		if(caminho == 'phpdevel')
		{
			caminho = caminho + '/web/devel';
		}
		else
		{
			caminho = document.domain + '/web';
		}
		ajax.open("GET", "http://"+caminho+"/ERP/util/pesquisaDinamica/busca_loja.php?loja_busca=" + loja_busca + '&campo_retorno=' + campo_retorno + '&div_retorno=' + div_retorno, true); 
	
		 // div que exibirá o resultado da busca.
		var div_retorno =  document.getElementById(div_retorno);
		
		ajax.onreadystatechange = function() 
		{
			if(ajax.readyState == 1)  // Quando estiver carregando, exibe: carregando...
			{ 
				div_retorno.innerHTML = 'Buscando...';
			}
			if(ajax.readyState == 4) // Quando estiver tudo pronto.
			{ 
				if(ajax.status == 200) 
				{
					var resultado = ajax.responseText; // Coloca o resultado (da busca) retornado pelo Ajax nessa variável (var resultado).
					resultado = resultado.replace(/\+/g," "); // Resolve o problema dos acentos
					resultado = unescape(resultado); // Resolve o problema dos acentos				
					div_retorno.style.display = 'block';
					div_retorno.innerHTML = resultado;
					//input_resultado.value = resultado;
				}
				else 
				{
					input_resultado.value = "Erro: "+ajax.status;
				}
			}
		}
		ajax.send(null); // submete vazio
	}
}

function inclui_loja(loja, campo_retorno, div_retorno)
{
	var campo_retorno = document.getElementById(campo_retorno);
	var div_retorno = document.getElementById(div_retorno);
	campo_retorno.value = loja;
	div_retorno.style.display = 'none';
}
