<?php

class Pessoa{

    private $nome;
    private $sobrenome;
    private $idade;

    public function __toString()
    {
        $pessoa = $this->nome. ' '. $this->sobrenome. ', '. $this->idade. " anos \n";
        return $pessoa;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }
}

$pessoas = array();

do {
    print "\n\n
        **************************
        *         Pessoa         *
        **************************
        * 1- Cadastrar pessoa    *
        * 2- Listar pessoas      *
        **************************
        * 0- Sair                *
        **************************\n";
    $opcao = readline();
    print "\n\n";

    switch ($opcao) {
        case 1:
            $pessoa = new Pessoa();
            $pessoa->setNome(readline('Diga o nome da pessoa: '));
            $pessoa->setSobrenome(readline('Diga o sobrenome da pessoa: '));
            $pessoa->setIdade(readline('Diga a idade da pessoa: '));
            array_push($pessoas, $pessoa);
            break;

        case 2:
            foreach ($pessoas as $p) {
                print $p;
            }
            print "\n";
            break;

        case 0:
            print "Saindo... \n";
            break;
        
        default:
            print "Opção inválida \n";
            break;
    }

} while ($opcao != 0);