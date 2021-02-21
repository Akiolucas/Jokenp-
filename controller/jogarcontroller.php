<?php

class jogarcontroller {

    public function resultado(){
        try 
        {
            include "model/jogar.php";

            // instância a classe da model
            $jogar = new jogar();
            
            //pegando a opção do mestre
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
                throw new Exception('Não foi selecionado as opções do jogador.');
            }
        

            // método da model
            $ganhador = $jogar->resultado();
            include "view/resultado.php";

        }
         catch (Exception $e)
        {
            echo 'Erro : '.  $e->getMessage();
            echo '<a href="index.php"><button>Retornar</button></a>';
        }
        
    }

}

?>