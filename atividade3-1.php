<?php

class Posto{

    private $estoque;
    private $listaAbastecimento;

    public function abastecer($qtd){
        if ($this->estoque >= $qtd) {
            $this->estoque -= $qtd;
            array_push($this->listaAbastecimento, $qtd);
            return true;
        } else {
            return false;
        }
    }

    public function reporEstoque($qtd){
        $this->estoque += $qtd;
        
    }

    public function listarAbastecimentos(){
        $n = 1;
        foreach ($this->listaAbastecimento as $l) {
            print "-Abastecimento $n: $l L\n";

            $n++;
        }

        sleep(5);
    }

    public function getEstoque()
    {
        return $this->estoque;
    }

    public function setEstoque($estoque)
    {
        $this->estoque = $estoque;

        return $this;
    }

    public function getListaAbastecimento()
    {
        return $this->listaAbastecimento;
    }

    public function setListaAbastecimento($listaAbastecimento)
    {
        $this->listaAbastecimento = $listaAbastecimento;

        return $this;
    }

}

$posto = new Posto();
$posto->setEstoque(0);
$posto->setListaAbastecimento(array());

do {
    print "\n\n
        *****************************
        *           Posto           *
        *****************************
        * 1- Abastecer              *
        * 2- Repor estoque          *
        * 3- Listar abastecimentos  *
        *****************************
        * 0- Sair                   *
        *****************************\n";
    $opcao = readline();
    print "\n\n";

    switch ($opcao) {
        case 1:
            $resultado = $posto->abastecer(readline('Quantos litros? (quantidade disponivel: '. $posto->getEstoque() .'L)'));

            if ($resultado) {
                print "Abastecido com sucesso!\n";
            } else {
                print "Falha ao abastecer, tente novamente com outro valor\n";
            }
            break;

        case 2:
            $posto->reporEstoque(readline('Quantos litros estão sendo reabastecidos?'));
            break;

        case 3:
            $posto->listarAbastecimentos();
            break;

        case 0:
            print 'Saindo...';
            break;
        
        default:
            print "Valor inválido, tente novamente!\n";
            break;
    }
    
} while ($opcao != 0);