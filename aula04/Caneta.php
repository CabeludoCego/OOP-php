<?php

class Caneta {
    // var é palavra genérica para visibilidade/variavel.
    // Equivale a public
    
   public $modelo;
   private $cor;
   
    
//   public function __construct($m, $c){ 
//    // Pode chamar de "Caneta" ou construct
//       $this->cor=$c;
//       $this->modelo=$m;
//       $this->rabiscar();
//   }
    public function __construct($modelo, $cor) {
        $this->modelo = $modelo;
        $this->cor = $cor;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getCor() {
        return $this->cor;
    }

    public function setModelo($modelo): void {
        $this->modelo = $modelo;
    }

    public function setCor($cor): void {
        $this->cor = $cor;
    }

   // simbolo +: public
   // simbolo -: private
   // simbolo #: protected
   
   
}
