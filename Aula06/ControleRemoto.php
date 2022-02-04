<?php
require_once'Controlador.php';
  class ControleRemoto implements Controlador{
    //Atributos
    private $volume;
    private $ligado;
    private $tocando;
    
    //Métodos especiais
    public function __construct() {
        $this->volume=50;
        $this->ligado=false;
        $this->desligado=false;
        
    }
    private function getVolume() {
        return $this->volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setVolume($volume): void {
        $this->volume = $volume;
    }

    private function setLidado($lidado): void {
        $this->ligado = $lidado;
    }

    private function setTocando($tocando): void {
        $this->tocando = $tocando;
    }

    
    public function ligar() {
        $this->setLidado(true);
    }
    public function desligar() {
        $this->setLidado(false);
    }
    public function abrirMenu() {
        echo"<p>------Menu-----</p>";
        echo "<br>Está ligado? ".($this->getLigado()?"Sim":"Não");
        echo "<br>Está tocando? ".($this->getTocando()?"Sim":"Não");
        echo "<br>Volume: ".$this->getVolume();
        for($i=0; $i <= $this->getVolume(); $i+=10){
            echo "|";
            
        }
        echo"<br>";
    }
    public function fecharMenu() {
        echo"<br> Fechando menu...";
    }
    public function ligarMudo() {
        if($this->getLigado() && $this->getVolume()>0){
            $this->setVolume(0);
        }
    }
    public function desligarMudo() {
        if($this->getLigado()&& $this->getVolume()==0){
            $this->setVolume(50);
        }
    }
    
    public function maisVolume() {
        if($this->getLigado()){
            $this->setVolume($this->getVolume()+5);
        }else{
            echo"<p>Erro! Não posso aumentar o volume</p>";
        }
    }
    public function menosVolume() {
        if($this->getLigado()){
            $this->setVolume($this->getVolume()-5);
        }else{
            "<p>Erro! Não posso diminuir o volume</p>";
        }
    }
    public function pause() {
         if($this->getLigado && $this->getTocando()){
            $this->setTocando(false);
        }
    }
    public function play() {
       if($this->getLigado &&! ($this->getTocando())){
           $this->setTocando(true);
       }
    }

}
