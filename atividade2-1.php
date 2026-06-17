<?php

class Prato{
    private $descricao;
    private $quantidade;
    private $valorUnitario;

    public function getValorTotal(){
        $valorTotal = $this->quantidade * $this->valorUnitario;
        return $valorTotal;
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

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    public function getValorUnitario()
    {
        return $this->valorUnitario;
    }

    public function setValorUnitario($valorUnitario)
    {
        $this->valorUnitario = $valorUnitario;

        return $this;
    }
}

$pratos = array();

for ($i=0; $i < 3; $i++) { 
    $prato = new Prato();
    $prato->setDescricao(readline('Diga a descrição do prato: '));
    $prato->setQuantidade(readline('Diga a quantiadade do prato: '));
    $prato->setValorUnitario(readline('Diga o valor unitário do prato: '));
}