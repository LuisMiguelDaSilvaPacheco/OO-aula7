<?php

class Escola{

    private $nome;
    private $endereco;
    private $qtdAlunos;

    public function __toString()
    {
        $dados = 'Nome: '. $this->nome. ' | Endereço: '. $this->endereco. ' | Quantidade de alunos: '. $this->qtdAlunos. "\n";
        return $dados;
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

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    public function getQtdAlunos()
    {
        return $this->qtdAlunos;
    }

    public function setQtdAlunos($qtdAlunos)
    {
        $this->qtdAlunos = $qtdAlunos;

        return $this;
    }
}

$escolas = array();

for ($i=0; $i < 4; $i++) { 
    $escola = new Escola();
    $escola->setNome(readline('Diga qual o nome da escola: '));
    $escola->setEndereco(readline('Diga qual o endereco da escola: '));
    $escola->setQtdAlunos(readline('Diga qual a quantidade de alunos da escola: '));
    print "\n";

    array_push($escolas, $escola);
}

$escolaMaisLotada = $escolas[0];

foreach ($escolas as $escola) {
    print $escola;

    if ($escolaMaisLotada->getQtdAlunos() < $escola->getQtdAlunos()) {
        $escolaMaisLotada = $escola;
    }
}

print 'A escola com a maior quantidade de alunos é a '. $escolaMaisLotada->getNome(). "\n";