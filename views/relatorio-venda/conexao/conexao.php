<?php



	class Conexao {

		private $link;
		
		// CONSTRUTOR QUE CONECTA AO BANCO DE DADOS. @param = NOME DA BASE DE DADOS DESEJADA	
		function conexao($data_base = "leiteira"){
			
			// PARAMETRO DE CONFIGURACAO
			$servidor 	= '192.168.56.1';
			$user		= 'root';
			$password	= 'root';

			// CONECTANDO
			$link = mysqli_connect ($servidor, $user, $password) or mysqli_connect_error();
			
			// SE NAO CONECTOU, INTERROME SCRIPT
			if(!$link){
				echo "<br> PROBLEMA COM A CONEXAO. INTERROMPENDO SCRIPT!";
				exit;
			}
			
			// SELECIONANDO A BASE DE DADOS
			mysqli_select_db($link, $data_base);			
			$this->link = $link;			
		}

		// EXECUTA QUERY NO BANCO
		public function executaQuery($sql){
			$tmp =  mysqli_query($this->link, $sql) or die('Erro: ' . mysqli_error($this->link));
			return ($tmp);
		}

		// RETORNA O NUMERO DE LINHAS DO RESULT SET
		public function contaLinhas($tmp){
			$total_linhas = mysqli_num_rows($tmp);
			return ($total_linhas);
		}

		// RETORNA A PROXIMA LINHA DO RESULT SET
		public function proximaLinha ($tmp){
			$linha = mysqli_fetch_assoc($tmp);
			return ($linha);
		}

		// FECHA A CONEXAO COM O BANCO DE DADOS
		public function encerraConexao (){
			mysqli_close($this->link);
		}		
	}


?>