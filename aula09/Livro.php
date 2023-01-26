<?php
require_once 'Pessoa.php';
require_once 'Ler.php';
class Livro implements Ler{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $paginaAtual;
    private $aberto;
    private $leitor;
    
    public function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->paginaAtual = 0;
        $this->aberto = false;
        $this->leitor = $leitor;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getTotPaginas() {
        return $this->totPaginas;
    }

    public function getPaginaAtual() {
        return $this->paginaAtual;
    }

    public function getAberto() {
        return $this->aberto;
    }

    public function getLeitor() {
        return $this->leitor;
    }

    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    public function setAutor($autor): void {
        $this->autor = $autor;
    }

    public function setTotPaginas($totPaginas): void {
        $this->totPaginas = $totPaginas;
    }

    public function setPaginaAtual($paginaAtual): void {
        $this->paginaAtual = $paginaAtual;
    }

    public function setAberto($aberto): void {
        $this->aberto = $aberto;
    }

    public function setLeitor($leitor): void {
        $this->leitor = $leitor;
    }

        
    public function detalhes(){
        echo "<p>--------{$this->getTitulo()}---------</p>";
        echo "<p>{$this->getAutor()}</p>";
        echo "<p>O livro tem {$this->getTotPaginas()} e está aberto na página {$this->getPaginaAtual()}. </p>";
    }

    public function abrir() {
        $this->setAberto(true);
        echo "Livro " .$this->getTitulo(). " aberto." ;
    }

    public function fechar() {
        $this->setAberto(false);
        echo "Livro " .$this->getTitulo(). " fechado." ;
    }
    
    public function avancarPag() {
        if($this->getPaginaAtual() <= $this->getTotPaginas()){
            $this->setPaginaAtual($this->getPaginaAtual()+1);
            echo "Página avançada.";
        }
        else{
            echo "<p>Você chegou ao fim do livro.</p>";
        }
    }


    public function folhear($alvo) {
        if(!$this->getAberto()){
            $this->setAberto(true);
        }
        
        if ($alvo > $this->getTotPaginas()){
            echo "<p>O livro não tem tantas páginas assim! Fechando o livro.</p>";
            $this->setAberto(false);
        }
        else{
            echo "<p>Livro aberto, avançando até a página {$alvo}</p>";
            $this->setPaginaAtual($alvo);
        }
    }

    public function voltarPag() {
        if($this->getPaginaAtual() <= $this->getTotPaginas() && 
                $this->getPaginaAtual() > 0){
            $this->setPaginaAtual($this->getPaginaAtual()-1);
            echo "Página retornada.";
        }
        else{
            echo "<p>A página desejada não existe.</p>";
        }
    }

}