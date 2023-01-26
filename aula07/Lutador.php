<?php

class Lutador {
   private $nome;
   private $nacionalidade;
   private $idade, $altura, $peso;
   private $categoria, $win, $loss, $draw;
   // array(0, 0, 0);
   
   // Metodos especiais
   public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $win, $loss, $draw) {
       $this->nome = $nome;
       $this->nacionalidade = $nacionalidade;
       $this->idade = $idade;
       $this->altura = $altura;
       $this->setPeso($peso);
       $this->win = $win;
       $this->loss = $loss;
       $this->draw = $draw;
   }

      public function getNome() {
       return $this->nome;
   }

   public function getNacionalidade() {
       return $this->nacionalidade;
   }

   public function getIdade() {
       return $this->idade;
   }

   public function getAltura() {
       return $this->altura;
   }

   public function getPeso() {
       return $this->peso;
   }

   public function getCategoria() {
       return $this->categoria;
   }

   public function getWin() {
       return $this->win;
   }

   public function getLoss() {
       return $this->loss;
   }

   public function getDraw() {
       return $this->draw;
   }
   public function setNome($nome): void {
       $this->nome = $nome;
   }

   public function setNacionalidade($nacionalidade): void {
       $this->nacionalidade = $nacionalidade;
   }

   public function setIdade($idade): void {
       $this->idade = $idade;
   }

   public function setAltura($altura): void {
       $this->altura = $altura;
   }

   public function setPeso($peso): void {
       $this->peso = $peso;
       $this->setCategoria();
   }


      public function setCategoria(): void {
       if ($this->peso < 50){
           $this->categoria = "Invalido";
       }
       elseif ($this->peso <= 70){
           $this->categoria = "Leve";
       }
       elseif ($this->peso <= 85 ){
           $this->categoria = "Médio";
       }
       elseif ($this->peso <= 120){
           $this->categoria = "Pesado";
       }
       else {
           $this->categoria = "Invalido";
       }
       
   }
   
   public function setWin($win): void {
       $this->win = $win;
   }

   public function setLoss($loss): void {
       $this->loss = $loss;
   }

   public function setDraw($draw): void {
       $this->draw = $draw;
   }

      // Metodos
   
   public function apresentar(){
       echo "<p>-------------------</p>";
       echo "<p>E entrando agora, ele! {$this->getNome()},";
       echo "De nacionalidade {$this->getNacionalidade()}, ";
       echo "Com seus {$this->getIdade()} anos e pesando {$this->getPeso()} kg, ";
       echo "Com um placar de {$this->getWin()}-{$this->getLoss()}-{$this->getDraw()}, hoje ele vai mudar a história. </p>";
      
   }
   public function status(){
       echo "<p>--------------------</p>";
       echo "{$this->getNome()} é da categoria {$this->getCategoria()} e tem placar ";
       echo "{$this->getWin()}-{$this->getLoss()}-{$this->getDraw()}";

   }   
   public function empatarLuta(){
       $this->setDraw($this->getDraw()+1);
   }
   public function ganharLuta(){
       $this->setWin($this->getWin()+1);
   }   
   public function perderLuta(){
       $this->setLoss($this->getLoss()+1);
   }
   
}
