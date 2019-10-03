<?php

class Ocorrencia{

	var $descricao;
	var $tipo;
	var $data;
	var $hora;
	var $logradouro;
	var $bairro;
    var $imagem;
	var $video;
	
	function __construct($descricao, $tipo, $data, $hora, $logradouro, $bairro, $imagem, $video){
		$this->descricao = $descricao;
		$this->tipo = $tipo;
		$this->data = $data;
		$this->hora = $hora;
		$this->logradouro = $logradouro;
		$this->bairro = $bairro;
		$this->imagem = $imagem;
		$this->video = $video;
	}
	
	function setDescricao($descricao){
		$this->descricao = $Descricao;
	}
	
	function getDescricao(){
		return $this->descricao;
	}
	
	function setTipo($tipo){
		$this->tipo = $tipo;
	}
	
	function getTipo(){
		return $this->tipo;
	}
	
	function setData($data){
		$this->data = $data;
	}
	
	function getData(){
		return $this->data;
	}
	function setHora($hora){
		$this->hora = $hora;
	}
	
	function getHora(){
		return $this->hora;
	}
	
	
	function setLogradouro($logradouro){
		$this->logradouro = $logradouro;
	}
	
	function getLogradouro(){
		return $this->logradouro;
	}
	
	function setBairro($bairro){
		$this->bairro = $bairro;
	}
	
	function getBairro(){
		return $this->bairro;
	}
	function setImagem($imagem){
		$this->imagem = $imagem;
	}
	
	function getImagem(){
		return $this->imagem;
	}
		
	function setVideo($video){
		$this->video = $video;
	}
	
	function getVideo(){
		return $this->video;
	}
}