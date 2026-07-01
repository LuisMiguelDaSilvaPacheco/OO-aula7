<?php

class Livro{
    private $titulo;
    private $autor;
    private $genero;
    private $qtdPaginas;
    private $valorPago;

    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;

        return $this;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function setAutor($autor){
        $this->autor = $autor;

        return $this;
    }

    public function getGenero(){
        return $this->genero;
    }

    public function setGenero($genero){
        $this->genero = $genero;

        return $this;
    }

    public function getQtdPaginas(){
        return $this->qtdPaginas;
    }

    public function setQtdPaginas($qtdPaginas){
        $this->qtdPaginas = $qtdPaginas;

        return $this;
    }

    public function getValorPago(){
        return $this->valorPago;
    }

    public function setValorPago($valorPago){
        $this->valorPago = $valorPago;

        return $this;
    }

    public function inserirLivro(){
        
    }
}
$livros = array();

do {
    print "\n\n
        *****************************
        *           livro           *
        *****************************
        * 1- Inserir livro          *
        * 2- Listar livros          *
        * 3- Buscar livro           *
        * 4- Total gasto            *
        *****************************
        * 0- Sair                   *
        *****************************\n";
    $opcao = readline();
    print "\n\n";

    switch ($opcao) {
        case 1:
            $livro = new Livro();
            $livro->setTitulo(readline('Qual o titulo do livro? '));
            $livro->setAutor(readline('Qual o autor do livro? '));
            $livro->setGenero(readline('Qual o gênero do livro? '));
            $livro->setQtdPaginas(readline('Qual a quantidade de páginas do livro? '));
            $livro->setValorPago(readline('Qual o valor pago no livro? '));
            array_push($livros, $livro);
            break;
        
        case 0:
            print 'Saindo...';
            break;
        
        default:
            print "Valor inválido, tente novamente!\n";
            break;
    }
} while ($opcao != 0);