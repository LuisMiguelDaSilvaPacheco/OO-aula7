<?php

class Selecao{

    private $pais;
    private $tecnico;
    private $esquema;

    public function getDados(){
        /*
        $dados = 'País: '. $this->pais;
        $dados .= ' | Técnico: '. $this->tecnico;
        $dados .= ' | Esquema: '. $this->esquema;
        */
        $dados = 'País: '. $this->pais. ' | Técnico: '. $this->tecnico. ' | Esquema: '. $this->esquema. "\n";
        return $dados;
    }

    public function __toString()
    {
        $dados = 'País: '. $this->pais. ' | Técnico: '. $this->tecnico. ' | Esquema: '. $this->esquema. "\n";
        return $dados;
    }

    public function getPais()
    {
        return $this->pais;
    }

    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    public function getTecnico()
    {
        return $this->tecnico;
    }

    public function setTecnico($tecnico)
    {
        $this->tecnico = $tecnico;

        return $this;
    }

    public function getEsquema()
    {
        return $this->esquema;
    }

    public function setEsquema($esquema)
    {
        $this->esquema = $esquema;

        return $this;
    }
}

$brasil = new Selecao();
$brasil->setPais('Brasil');
$brasil->setTecnico('Carlo Ancelotti');
$brasil->setEsquema('4-4-2');
// print $brasil->getDados();

$argentina = new Selecao();
$argentina->setPais('Argentina');
$argentina->setTecnico('Lionel Scaloni');
$argentina->setEsquema('4-3-3');
// print $argentina->getDados();

$selecoes = array($brasil, $argentina);

print 'País da primeira seleção: '. $selecoes[0]->getPais(). "\n";
print 'Dados da segunda seleção: '. $selecoes[1]->getDados();

$portugal = new Selecao();
$portugal->setPais('Portugal');
$portugal->setTecnico('Roberto Martinez');
$portugal->setEsquema('4-3-3');
// print $portugal->getDados();

array_push($selecoes, $portugal);

print "\n\nDados de todas as seleções: \n";

foreach ($selecoes as $selecao) {
    print $selecao;
}