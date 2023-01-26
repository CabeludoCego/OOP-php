<?php

class Caneta {
    // var é palavra genérica para visibilidade/variavel.
    // Equivale a public
    
   var $modelo;
   public $cor;
   var $tampada;
   var $carga;
   
   // simbolo +: public
   // simbolo -: private
   // simbolo #: protected
   
   function rabiscar() {
       if ($this->tampada == false) {
           echo "<p> </br>Saiu tinta</br> </p>";   
       } else {
           echo "<p> </br>Tampada!</br> </p>";     
       }
      }
   function tampar() {
       $this->tampada = true;
   }
   function destampar() {
       $this->tampada = false;
   }
   
}
