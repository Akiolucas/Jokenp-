<?php

class jogarcontroller {

    public function resultado(){
        try {
            include "model/jogar.php";

        // instância a classe da model
        $jogar = new jogar();
        
        //pegando o a opção do mestre
        $opcaoMestre = $jogar->opcaomestre();

         // atribui valores
         $jogar->setOpcaoMaquina($opcaoMestre);

        if(isset($_POST['personagemEscolido']) && isset($_POST['opcaoEscolido']))
        {
            // atribui valores
            $jogar->setPersonagemUsuario($_POST['personagemEscolido']);
            $jogar->setOpcaoUsuario($_POST['opcaoEscolido']);
        }
        else
        {
            throw new Exception('não foi selecionado as opções do jogador.', 40);
        }
       

        // método da model
        $ganhador = $jogar->resultado();
        include "view/home.php";

        } catch (Excepction $e) {
            echo 'Exceção capturada: '.  $e->getCode();
        }
        
    }

}

?>