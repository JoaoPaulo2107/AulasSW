<?php

class Livro {
    private $titulo;
    private $autor;
    private $disponivel;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->disponivel = true;
    }

    public function emprestar() {
        $this->disponivel = false;
    }

    public function devolver() {
        $this->disponivel = true;
    }
    

    public function exibirStatus() {
    $status = $this->disponivel ? "Disponível" : "Emprestado";
    return "Título: {$this->titulo} | Autor: {$this->autor} | Status: {$status}";
}

}


?>
