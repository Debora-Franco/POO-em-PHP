<?php

require_once 'Aluno.php';

class Tecnico extends Aluno {
    private $registroProfissional;
    
    public function praticar($pra){
        $this->praticar =$pra;
    }
    public function getRegistroProfissional() {
        return $this->registroProfissional;
    }

    public function setRegistroProfissional($registroProfissional): void {
        $this->registroProfissional = $registroProfissional;
    }


}
