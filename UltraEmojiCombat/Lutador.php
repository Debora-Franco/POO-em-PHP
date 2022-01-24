<?php

class Lutador {
    //Atributos
   private $nome;
   private $nacionalidade;
   private $idade;
   private $altura;
   private $peso;
   private $categoria;
   private $vitorias;
   private $derrotas;
   private $empates;
   
    //Métodos
    function apresentar(){
        echo "<p>------------------------------------------</p>";
        echo "<p> Chegou a hora! O lutador".$this->getNome();
        echo " veio diretamente de " .$this->getNacionalidade();
        echo " tem ".$this->getIdade()." anos e pesa " .$this->getPeso()." KG";
        echo "<br> Ele tem ".$this->getVitorias(). " vitórias";
        echo $this->getDerrotas()." derrotas e ".$this->getEmpates()." empates!";
        
    }
    function status(){
        echo "<p>---------------------------------------------------------</p>";
        echo "<p>".$this->getNome()." é um peso ".$this->getCategoria();
        echo " e já ganhou " .$this->getVitorias()." vezes,";
        echo " perdeu " .$this->getDerrotas()." vezes e ";
        echo " empatou ". $this->getEmpates() ." vezes.";
        
    }
    function ganharLuta(){
        $this->setVitoria($this->getVitorias()+1);
        //$this->vitorias=$this->vitorias+1;
    }
    function perderLuta(){
        $this->setDerrotas($this->getDerrotas()+1);
    } 
    function empatarLuta(){
        $this->setEmpates($this->getEmpates()+1);
    }
    //Métodos especias
    
    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getVitorias() {
        return $this->vitorias;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }

    public function getEmpates() {
        return $this->empates;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setNacionalidade($nacionalidade): void {
        $this->nacionalidade = $nacionalidade;
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }

    public function setAltura($altura): void {
        $this->altura = $altura;
    }

    public function setPeso($peso): void {
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria(): void {
        if($this->peso <52.2){
            $this->categoria= "Inválido";
        }elseif($this->peso <=70.3){
            $this->categoria="Leve";
        }elseif($this->peso <=83.9){
            $this->categoria="Médio";
        }elseif($this->peso<=120.2){
            $this->categoria="Pesado";
        }else{
            $this->categoria="Inválido";
        }
        
    }

    public function setVitorias($vitorias): void {
        $this->vitorias = $vitorias;
    }

    public function setDerrotas($derrotas): void {
        $this->derrotas = $derrotas;
    }

    public function setEmpates($empates): void {
        $this->empates = $empates;
    }



    
    
}
