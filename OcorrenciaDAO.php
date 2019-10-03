<?php
require_once 'Ocorrencia.php';

class OcorrenciaDAO{
	var $conexao;
	
	function __construct(){
		$this->conexao = mysqli_connect("localhost", "root", "", "projeto3");
	}
	
	function inserir($ocorrencia){
		$sql = "INSERT INTO ocorrencia(descricao, tipo, data, hora, logradouro, bairro, imagem, video)"
			."VALUES ('$ocorrencia->descricao','$ocorrencia->tipo', '$ocorrencia->data','$ocorrencia->hora','$ocorrencia->logradouro','$ocorrencia->bairro','$ocorrencia->imagem','$ocorrencia->video')";	
		return mysqli_query($this->conexao, $sql);
	}
	
	function SelectAllOcorrencias(){
		$arrayDeOcorrencias = array();
		$sql = 	"SELECT * FROM ocorrencia order by data desc";	
		$result = mysqli_query($this->conexao, $sql);
		while ($p = mysqli_fetch_assoc($result)){
			$ocorrencia = new ocorrencia($p['descricao'], $p['tipo'], $p['data'], $p['hora'], $p['logradouro'], $p['bairro'], $p['imagem'], $p['video']);
				array_push($arrayDeOcorrencias, $ocorrencia);
		}
		return $arrayDeOcorrencias;
	}
}