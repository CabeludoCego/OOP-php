<?php
require_once 'Controller.php';

class ControleRemoto implements Controller {
    private $volume;
    private $ligado;
    private $tocando;
    
    // Métodos base
//    public function __construct($volume, $ligado, $tocando) {
//        $this->volume = $volume;
//        $this->ligado = $ligado;
//        $this->tocando = $tocando;
//    }
    
    public function __construct() {
        $this->volume = 5;
        $this->ligado = false;
        $this->tocando = false;
    }
    
    private function getVolume() {
        return $this->volume;
    }
    private function getLigado() {
        return $this->ligado;
    }
    private function getTocando() {
        return $this->tocando;
    }
    private function setVolume($volume): void {
        $this->volume = $volume;
    }
    private function setLigado($ligado): void {
        $this->ligado = $ligado;
    }
    private function setTocando($tocando): void {
        $this->tocando = $tocando;
    }

    public function abrirMenu() {
        echo "<p>--------MENU---------</p>";
        echo "<br> Está ligado?: " . ($this->getLigado()?"Sim":"Não"); 
        echo "<br> Está tocando?: " . ($this->getTocando()?"Sim":"Não"); 
        echo "<br> Volume: " . ($this->getVolume());
        for($i=0; $i <= $this->getVolume(); $i+=1){
            echo ":";
        }
        echo "<br>";
    }
    public function fecharMenu() {
        echo "<br>Fechando menu.";
    }
    public function ligar() {
        $this->setLigado(true);
    }
    public function desligar() {
        $this->setLigado(false);
    }
    public function  maisVolume() {
        if ($this->getLigado()){
            $this->setVolume($this->getVolume() + 1);
        }
        else{
            echo "Não posso realizar operação.";
        }
    }
    public function menosVolume() {
        if ($this->getLigado()){
            $this->setVolume($this->getVolume() - 1);
        }
        else{
            echo "Não posso realizar operação.";
        }
    }
    public function mutar() {
        if ($this->getLigado() && $this->getVolume()>0){
            $this->setVolume(0);
        }
        else{
            echo "Não posso realizar operação.";
        }
    }
    public function desmutar() {
        if ($this->getLigado() && $this->getVolume()==0){
            $this->setVolume(5);
        }
        else{
            echo "Não posso realizar operação.";
        }
    }
    public function pause() {
        if ($this->getLigado() && ($this->getTocando())){
            $this->setTocando(false);
        }
    }
    public function play() {
        if ($this->getLigado() && !($this->getTocando())){
            $this->setTocando(true);
        }        
    }
}
