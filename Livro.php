<?php

require_once 'Publicacao.php';
require_once 'Pessoa.php';

class Livro implements Publicacao {
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    
    
    public function detalhes() {
        if ($this->pagAtual == 0){
        echo "<p>Livro ".$this->titulo." autor: ".$this->autor.".";
        echo "<br>Total de páginas: ".$this->totPaginas.".";
        echo "<br>Será lido por ".$this->leitor->getNome().".";
        } else {
            echo "<p>Livro ".$this->titulo." autor: ".$this->autor.".";
        echo "<br>Total de páginas: ".$this->totPaginas.".";
        echo "<br>Está sendo lido por ".$this->leitor->getNome().", atualmente na página ".$this->pagAtual.".</p>";
        }
    }
    
    public function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
        $this->aberto = false;
        $this->pagAtual = 0;
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

    public function getPagAtual() {
        return $this->pagAtual;
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

    public function setPagAtual($pagAtual): void {
        $this->pagAtual = $pagAtual;
    }

    public function setAberto($aberto): void {
        $this->aberto = $aberto;
    }

    public function setLeitor($leitor): void {
        $this->leitor = $leitor;
    }

    public function abrir() {
        if ($this->aberto == false) {
            echo "<p>Abrindo livro.</p>";
        } else {
            echo "<p>Livro já está aberto.</p>";
        }
    }

    public function avancarPag() {
        if ($this->pagAtual < $this->totPaginas) {
        $this->pagAtual++;
        }
    }

    public function fechar() {
        $this->aberto = false;
    }

    public function folhear($p) {
        if ($p > $this->totPaginas) {
            echo "<p>Erro! Não foi possível folhear.</p>";
        } else {
            $this->pagAtual = $p; 
        }
    }

    public function voltarPag() {
        $this->pagAtual --;
    }

}
