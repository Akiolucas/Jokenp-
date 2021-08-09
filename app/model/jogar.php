<?php

 class jogar {

    private $personagemUsuario;
    private $opcaoUsuario;
    private $opcaoMaquina;
   
    public function getPersonagemUsuario(){
        return $this->personagemUsuario;
    }
    
    public function setPersonagemUsuario($personagemUsuario){
        $this->personagemUsuario = $personagemUsuario;
    }
    public function getOpcaoUsuario(){
        return $this->opcaoUsuario;
    }

    public function setOpcaoUsuario($opcaoUsuario){
        $this->opcaoUsuario = $opcaoUsuario;
    }

    public function getOpcaoMaquina(){
        return $this->opcaoMaquina;
    }

    public function setOpcaoMaquina($opcaoMaquina){
        $this->opcaoMaquina = $opcaoMaquina;
    }

    public function opcaomestre(){
        return $opcao = rand(1,3);
    }
    
    public function resultado(){
        
        if($this->opcaoMaquina == 1)
        {
            $this->opcaoMaquina = 'pedra';
        }
        else if($this->opcaoMaquina == 2)
        {
            $this->opcaoMaquina = 'papel';
        }
        else
        {
            $this->opcaoMaquina = 'tesoura';
        }
        switch($this->opcaoUsuario){
            case    $this->opcaoUsuario === $this->opcaoMaquina:
                return $ganhador = array("empate","empate",$this->personagemUsuario,$this->opcaoUsuario,$this->opcaoMaquina); break;

            case    $this->opcaoUsuario == 'pedra'   && $this->opcaoMaquina == 'papel' ||
                    $this->opcaoUsuario == 'papel'   && $this->opcaoMaquina == 'tesoura' ||
                    $this->opcaoUsuario == 'tesoura' && $this->opcaoMaquina == 'pedra':
                return $ganhador = array("derrota","mestre",$this->personagemUsuario,$this->opcaoUsuario,$this->opcaoMaquina); break;

            case    $this->opcaoUsuario == 'pedra'   && $this->opcaoMaquina == 'tesoura' ||
                    $this->opcaoUsuario == 'papel'   && $this->opcaoMaquina == 'pedra' ||
                    $this->opcaoUsuario == 'tesoura' && $this->opcaoMaquina == 'papel':
                return $ganhador = array("vitória", $this->personagemUsuario,$this->personagemUsuario,$this->opcaoUsuario,$this->opcaoMaquina); break;
                
            default:
               return $ganhador = array("erro","erro","erro","erro","erro");
            break;
    }
}
}
?>