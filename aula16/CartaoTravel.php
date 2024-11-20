<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CartaoTravel
 *
 * @author Aluno
 */
class CartaoTravel
{
    private $numero;
    private $tipo;
    private $usuario;
    private $saldo;
    private $situacao;

    public function __construct() {
        $this->setSaldo(0);
        $this->setSituacao(false);
        $this->setNumero(null);
        $this->setTipo(null);
        $this->setUsuario(null);
        echo "<p>Conta do cartão travel criada com sucesso!</p>";
    }

    public function cadastrarCartao($t) {
        $this->setTipo($t);
        if ($t == "Compacto") {
            $this->setSituacao(true);
            $this->setSaldo(10);
        } elseif ($t == "Master") {
            $this->setSituacao(true);
            $this->setSaldo(50);
        } elseif ($t == "Black") {
            $this->setSituacao(true);
            $this->setSaldo(100);
        } else {
            echo "<p>Cartão travel inválido</p>";
        }
    }

    public function encerrarCartao() {
        if ($this->getSaldo() > 0) {
            echo "<p>O cartão travel ainda tem dinheiro, não pode encerrar.</p>";
        } else {
            $this->setSituacao(false);
            echo "<p>O cartão travel de " . $this->getUsuario() . " foi encerrado com sucesso!</p>";
        }
    }

    public function carregarCartao($valor) {
        if ($this->getSituacao() == true) {
            $this->setSaldo($this->getSaldo() + $valor);
            echo "<p>Depósito de R$ $valor realizado no cartão travel de " . $this->getUsuario() . ".</p>";
        } else {
            echo "<p>Cartão travel encerrado. Não pode carregar.</p>";
        }
    }

    public function usarCartao($valor) {
        if ($this->getSituacao() == true) {
            if ($this->getSaldo() >= $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>O pagamento de R$ $valor autorizado no cartão travel de " . $this->getUsuario() . ".</p>";
            } else {
                echo "<p>Saldo insuficiente para pagamento.</p>";
            }
        } else {
            echo "<p>Não pode pagar com o cartão travel encerrado</p>";
        }
    }

    public function tarifacartao() {
        if ($this->getTipo() == "Compacto") {
            $valor = 5;
        } elseif ($this->getTipo() == "Master") {
            $valor = 25;
        } elseif ($this->getTipo() == "Black") {
            $valor = 50;
        }

        if ($this->getSaldo() >= $valor) {
            $this->setSaldo($this->getSaldo() - $valor);
            echo "<p>Tarifa de R$ $valor debitada do cartão travel de " . $this->getUsuario() . ".</p>";
        } else {
            echo "<p>Saldo insuficiente para debitar a tarifa. Carregue o cartão travel.</p>";
        }
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function getSituacao()
    {
        return $this->situacao;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function setTipo($tipo){
        $this -> tipo = $tipo;
    }

    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }

    public function setSituacao($situacao){
        $this->situacao = $situacao;
    }
}
