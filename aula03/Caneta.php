<?php

class Caneta {
    // var é palavra genérica para visibilidade/variavel.
    // Equivale a public
    
   public $modelo;
   public $cor;
   private $ponta;
   protected $tampada;
   protected $carga;
   
   // simbolo +: public
   // simbolo -: private
   // simbolo #: protected
   
   public function rabiscar() {
       if ($this->tampada == false) {
           echo "<p> </br>Saiu tinta</br> </p>";   
       } else {
           echo "<p> </br>Tampada!</br> </p>";     
       }
      }
   public function tampar() {
       $this->tampada = true;
   }
   public function destampar() {
       $this->tampada = false;
   }
   
}
