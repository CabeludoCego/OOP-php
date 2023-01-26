<?php
require_once 'Livro.php';

interface Ler {
    public function abrir();
    public function fechar();
    public function folhear($alvo);
    public function avancarPag();
    public function voltarPag();
}
