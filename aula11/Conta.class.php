<?php

class conta{

    public $Nome;
    public $CPF;
    private $Saldo;

    public function Sacar($valor){
        if($valor > $this->Saldo){
            return "Saldo insuficiente";
        }else {
             $this->Saldo = $this->Saldo - $valor;
             $resultado = "Seu saldo atual é de R$ " . $this->Saldo;
        }
        $this->Saldo=$this->Saldo - $valor;
        $resultado = "Seu saldo atual é de R$ " . $this->Saldo;
        return $resultado;
    }

    public function Depositar($valor){
        $this->Saldo=$this->Saldo + $valor;
        $resultado = "Seu saldo atual é de R$ " . $this->Saldo;
        return $resultado;
    }
    public function ConsultarSaldo(){
        echo "Nome:" . $this->Nome. "<br>";
        echo "CPF:" . $this->CPF. "<br>";
        echo "Saldo:" . $this->Saldo. "<br>";

    }




















}






?>