<?php

abstract class Pessoa{
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $exp;
    
    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->exp = 0;
    }

    
    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }

    public function setSexo($sexo): void {
        $this->sexo = $sexo;
    }
    public function getExp() {
        return $this->exp;
    }

    public function setExp($exp): void {
        $this->exp = $exp;
    }

    public function ganharExp($v) {
        $this->setExp($this->getExp() + $v);
    }
}
