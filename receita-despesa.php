<?php

class Receita{
    private $descricao;
    private $valor;
    private $data;

    public function __toString()
    {
        $dados = "\nValor: R$" .$this->valor ."\nDescrição: ". $this->descricao ."\nData: " .$this->data ."\n";

        return $dados;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }
}

class Despesa{
    private $descricao;
    private $valor;
    private $data;

    public function __toString()
    {
        $dados = "\nValor: R$" .$this->valor ."\nDescrição: ". $this->descricao ."\nData: " .$this->data ."\n";

        return $dados;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }
}

$despesas = array();
$receitas = array();

do {
    print "\n\n
        ****************************
        *         Finanças         *
        ****************************
        * 1- Adicionar receita     *
        * 2- Adicionar despesa     *
        * 3- Listar receitas       *
        * 4- Listar despesas       *
        * 5- Sumarizar             *
        ****************************
        * 0- Sair                  *
        ****************************\n";
    $opcao = readline();
    print "\n\n";

    switch ($opcao) {
        case 1:
            $receita = new Receita();
            $receita->setValor(readline('Quanto você recebeu? '));
            $receita->setDescricao(readline('Do que você recebeu o dinheiro? '));
            $receita->setData(date('d/m/Y H:i:s'));
            array_push($receitas, $receita);
            break;

        case 2:
            $despesa = new Despesa();
            $despesa->setValor(readline('Quanto você gastou? '));
            $despesa->setDescricao(readline('Com o que você gastou o dinheiro? '));
            $despesa->setData(date('d/m/Y H:i:s'));
            array_push($despesas, $despesa);
            break;

        case 3:
            foreach ($receitas as $r) {
                print $r;
            }
            sleep(5);
            break;

        case 4:
            foreach ($despesas as $d) {
                print $d;
            }
            sleep(5);
            break;

        case 5:
            $receitaTotal = 0;
            $despesaTotal = 0;

            foreach ($receitas as $r) {
                $receitaTotal += $r->getValor();
            }
            foreach ($despesas as $d) {
                $despesaTotal += $d->getValor();
            }

            $saldo = $receitaTotal - $despesaTotal;
            print "Receita total: R$$receitaTotal \nDespesaTotal: R$$despesaTotal \nSaldo: R$$saldo \n";

            sleep(5);
            break;
        
        case 0:
            print "Saindo... \n";
            break;
        
        default:
            print "Opção inválida \n";
            break;
    }


} while ($opcao != 0);