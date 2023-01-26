<?php
require_once 'AcoesVideo.php';
class Video implements AcoesVideo {
    private $titulo;
    private $avaliacao;
    private $views;
    private $likes;
    private $reproduzindo;
    
    public function __construct($titulo) {
        $this->titulo = $titulo;
        $this->avaliacao = 0;
        $this->views = 0;
        $this->likes = 0;
        $this->reproduzindo = false;
    }

    
    public function getTitulo() {
        return $this->titulo;
    }

    public function getAvaliacao() {
        return $this->avaliacao;
    }

    public function getViews() {
        return $this->views;
    }

    public function getLikes() {
        return $this->likes;
    }

    public function getReproduzindo() {
        return $this->reproduzindo;
    }

    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    public function setAvaliacao($avaliacao): void {
//        $media = 0;
        $media = ($this->avaliacao + $avaliacao)/$this->views;
        $this->avaliacao = $media;
    }

    public function setViews($views): void {
        $this->views = $views;
    }

    public function setLikes($likes): void {
        $this->likes = $likes;
    }

    public function setReproduzindo($reproduzindo): void {
        $this->reproduzindo = $reproduzindo;
    }

    public function like() {
        $this->setLikes($this->getLikes()+1);
    }

    public function pause() {
        $this->setReproduzindo(false); 
    }

    public function play() {
        $this->setReproduzindo(true); 
    }

}
