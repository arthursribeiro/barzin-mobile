<?php
include_once 'bean.php';

class Mesa extends Bean {
    
	protected $id, $bar_id, $nome, $codigo;
	
	public function Mesa($nome = "", $pessoas = array(), $bar_id = 0, $id = 0, $codigo = "") {
		$this->nome = $nome;
		$this->pessoas = $pessoas;
		$this->bar_id = $bar_id;
		$this->id = $id;
		$this->codigo = $codigo;
	}
	
	public function adicionar_pessoa($nova_pessoa) {
		$this->pessoas[] = $nova_pessoa;
	}
	
	public function get_id() {
		return $this->id;
	}
	
	public function get_bar_id() {
		return $this->bar_id;
	}
	
	public function set_bar_id($bar_id) {
		$this->bar_id = $bar_id;
	}
	
	public function get_nome() {
		return $this->nome;
	}
	
	public function get_pessoas() {
		return $this->pessoas;
	}
	
	public function set_nome($nome) {
		$this->nome = $nome;
	}
	
	public function set_codigo($codigo) {
		$this->codigo = $codigo;
	}
	
	public function get_codigo() {
		return $this->codigo;
	}
}
	
?>