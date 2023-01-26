<?php

class ContaBancaria {
//    Atributos
   public      $numero;
   protected   $type;
   private     $dono;
   private     $saldo;
   private     $status;
   
//   private $v;
   
//   Construtor
    public function __construct($numero, $dono) {
        $this->numero = $numero;
        $this->dono = $dono;
        $this->setSaldo(0);
        $this->setStatus(false);
    }

//   Getters and Setters
    public function getNumero() {
        return $this->numero;
    }

    public function getType() {
        return $this->type;
    }

    public function getDono() {
        return $this->dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setNumero($numero): void {
        $this->numero = $numero;
    }

    public function setType($type): void {
        $this->type = $type;
    }

    public function setDono($dono): void {
        $this->dono = $dono;
    }

    public function setSaldo($saldo): void {
        $this->saldo = $saldo;
    }

    public function setStatus($status): void {
        $this->status = $status;
    }


    
    
//   Métodos
    public function abrirConta($type) {
        $this->setType($type);
        $this->setStatus(true);
        if ($type == "CC"){
            $this->setSaldo(50.00);
        }
        else if ($type == "CP"){
            $this->setSaldo(0.00);
        }
   }
   
    public function fecharConta(){
        if($this->getSaldo() > 0){
            echo "<p>Conta tem saldo!</p>";
        }
        else if ($this->getSaldo() < 0){
            echo "<p>Conta em débito.</p>";
        }
        else{
            $this->setStatus(false);
            echo "<p>Conta desativada com sucesso.</p>";
        }        
    }
   
   public function depositar($valor) {
       if($this->getStatus() == false){
           echo "<p>Não é possível depositar.</p>"; 
       } 
       else{
           $this->setSaldo($this->getSaldo() + $valor);
       }
   }

   public function sacar($valor) {
        if($this->getStatus()){
            if ($this->getSaldo() >= $valor){
                $this->setSaldo($this->getSaldo() - $valor);
//                echo "Saque de {$valor} autorizado na conta de {$this->getDono()}";
                echo "<p>Saque de $valor autorizado na conta de " . $this->getDono() . "</p>";

            }
            else {
                echo "<p>Deseja tirar um empréstimo? Saldo insuficiente.</p>";
            }
        }
        else{
            echo "Conta desativada.";
        }
   }
   
   public function pagarMensal() {
   
       if($this->getType() == "CC"){
           $v = 10;
       }
       else if($this->getType() == "CP"){
           $v = 8;
       }
       if ($this->getStatus()){
           if ($this->getSaldo() > $v){
               $this->setSaldo($this->getSaldo() - $v);
           }
           else{
               echo "<p>Saldo insuficiente para pagar a taxa.</p>";
           }
       }
        else {
            echo "<p>Taxa não é cobrada. Boa noite.</p>";
        }
           
       
   }
   
}
