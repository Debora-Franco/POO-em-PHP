<?php

class ContaBanco {
//Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    //Métodos 
    public function abrirConta($t){
       $this->setTipo($t);
       $this->setStatus(true);
       if($t=="CC"){
         $this->setSaldo(50);  
       }elseif($t=="CP"){
           $this->setSaldo(150);
       }
    }
    public function fecharConta(){
        if($this->getSaldo()>0){
            echo"<p> Conta ainda tem dinheiro,não posso fechá-la. </p>";
        }elseif($this->getSaldo()<0){
            echo"<p>Conta está em débito.Impossivel encerrar! </p>";
        }else{
            $this->setStatus(false);
            echo"<p> Conta de ".$this->getDono()."fecahda com sucesso!</p>";
        }
    }   
    public function depositar($v){
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo()+$v);
            //$this->saldo= $this->saldo+$v; 
            echo"<p>Deposito de R$ $v na conta de".$this->getDono()." </p>";
        }else{
            echo"<p>Conta fechada. Não consigo depositar. </p>";
        }
    }
    public function sacar($v){
        if($this->getStatus()){
        if($this->getSaldo()>=$v){
            $this->setSaldo($this->getSaldo()-$v);
            //$this->saldo= $this->saldo-$v;
            echo"<p>Saque de R$ $v autorizado na conta da ".$this->getDono()."</p>";
        }else{
            "<p>Saldo insuficiente para saque.</p>";
        }
      }else{
          echo"<p>Não posso sacar de uma conta fechada</p>";
      }
    }
    public function pagarMensal(){
        if($this->getTipo()=="CC"){
            $v=12;
        }else if($this->getTipo()=="CP"){
            $v=20;
        }
         if($this->getStatus()){
             $this->setSaldo($this->getSaldo()-$v);
          echo" <p> Mensalidade de R$ $v debitada na conta de ".$this->getDono()."</p>";
         } else{
             echo"<p>Problemas com a conta.Não posso cobrar.</p>";
         }  
    }
    //Método Especiais
    public function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso!</p>";
    }
    public function getNumConta() {
        return $this->numConta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setNumConta($n): void {
        $this->numConta = $n;
    }

    public function setTipo($t): void {
        $this->tipo = $t;
    }

    public function setDono($dono): void {
        $this->dono = $dono;
    }

    public function setSaldo($saldo): void {
        $this->saldo = $saldo;
    }

    public function setStatus($status): void {
        $this->status = $status;
    }


            
    
}
