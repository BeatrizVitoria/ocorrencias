<?php
	require '../Model/Ocorrencia.php';
	require '../Model/OcorrenciaDAO.php';
			
	class OcorrenciaController{
		var $ocorrencia;
		var $ocorrenciaDAO;
		
	public function inserirOcorrencia($tipo, $descricao, $data, $hora, $logradouro, $bairro, $imagem, $video){
		
	$this->ocorrencia = new Ocorrencia($tipo, $descricao, $data, $hora, $logradouro, $bairro, $imagem,$video);
			$this->ocorrenciaDAO = new OcorrenciaDAO();
			return $this->ocorrenciaDAO->inserir($this->ocorrencia);	
		}
		
		public function listarOcorrencias(){
		$ocorrencias = array();
		$this->OcorrenciaDAO = new OcorrenciaDAO();
		return $this->ocorrenciaDAO->getAlcorrencias();
		}	
	}

	$controller = new OcorrenciaController();
	if(isset($_POST['tipo']) && isset($_POST['descricao']) && isset($_POST['data']) && isset($_POST['hora']) && isset($_POST['logradouro']) && isset($_POST['bairro']) && isset($_POST['imagem']) && isset($_POST['video']))
	{
		$controller->inserirOcorrencia($_POST['tipo'],$_POST['descricao'], $_POST['data'], $_POST['hora'], $_POST['logradouro'], $_POST['bairro'], $_POST['imagem'], $_POST['video']);
		header ('location: ../View/CadastroOcorrencia.php');
	}
?>	