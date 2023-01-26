<?php
require_once 'Video.php';
require_once 'Gafanhoto.php';
class Visualizacao {
   private $espec;
   private $filme;
   
   public function __construct($espec, $filme) {
       $this->espec = $espec;
       $this->filme = $filme;
       $this->filme->setViews($this->filme->getViews()+1);
       $this->espec->setTotAssistido($this->espec->getTotAssistido() + 1);
       }
   public function getEspec() {
       return $this->espec;
   }

   public function getFilme() {
       return $this->filme;
   }

   public function setEspec($espec): void {
       $this->espec = $espec;
   }

   public function setFilme($filme): void {
       $this->filme = $filme;
   }

   public function avaliar(){
       $this->filme->setAvaliacao(3);
   }
   
   public function avaliarNota($nota){
     $this->filme->setAvaliacao($nota);
   }
   public function avaliarPorc($porc){
       $nova = 0;
       if ($porc <= 20){
           $nova = 1;
       } elseif ($porc <= 50) {
           $nova = 3;
       } elseif ($porc <= 80) {
           $nova = 4;
       } else {
           $nova = 5;
       }
       $this->filme->setAvaliacao($nova);
   }

}
