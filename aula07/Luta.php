<?php
require_once 'Lutador.php';
class Luta {
    // Atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
    
    public function getDesafiado() {
        return $this->desafiado;
    }

    public function getDesafiante() {
        return $this->desafiante;
    }

    public function getRounds() {
        return $this->rounds;
    }

    public function getAprovada() {
        return $this->aprovada;
    }

    public function setDesafiado($desafiado): void {
        $this->desafiado = $desafiado;
    }

    public function setDesafiante($desafiante): void {
        $this->desafiante = $desafiante;
    }

    public function setRounds($rounds): void {
        $this->rounds = $rounds;
    }

    public function setAprovada($aprovada): void {
        $this->aprovada = $aprovada;
    }

                
    // Métodos
    public function marcarLuta($l1, $l2) {
        if ($l1->getCategoria() === $l2->getCategoria() 
                && $l1 != $l2){
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        }
        else{
            $this->aprovada = false;
            $this->desafiado = null; 
            $this->desafiante = null;
            
        }
    }
    
    public function lutar(){
        if($this->aprovada){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch($vencedor){
                case 0:
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    echo "<p>Empate.</p>";
                    break;
                case 1:
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    echo "<p>Vitória do desafiado! " .$this->desafiado->getNome(). " </p>";
                    break;
                case 2:
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    echo "<p>Vitória do desafiado! " .$this->desafiante->getNome(). " </p>";
                  break;
            }
        }
        else{
            echo "Luta não aprovada.";
        }
            
    }
}
