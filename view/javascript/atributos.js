      function opcaoPersonagem(opcao,indice){
       document.getElementsByName(opcao)[indice].checked = true

        let bloco = document.querySelectorAll('.bloco')
        let inicio= 0;
        let contagem= bloco.length;
     
        for(inicio; inicio < contagem; inicio ++){
            bloco[inicio].classList.remove('escolido')
        }
        
        let personagemAtivo = document.getElementsByClassName('active')

        personagemAtivo[0].classList.add('escolido');

        let tag= document.createElement("h3")
        tag.setAttribute("id","txtSelecionado")
        tag.textContent="Selecionado"
        
        var tagSelecionado = document.getElementById("txtSelecionado");
        
        if( tagSelecionado != null){
            // Removendo a tagSelecionado sem precisar especificar seu pai
            tagSelecionado.parentNode.removeChild(tagSelecionado);
        }
        // adiciona a tag h3 quando o usuario clicar em confirmar
         personagemAtivo[0].appendChild(tag)


    }
    function opcaojokenpo(opcao,indice){
        document.getElementsByName(opcao)[indice].checked = true;
    
        let bloco = document.querySelectorAll('.opcao')
        let inicio= 0;
        let contagem= bloco.length;
     
        for(inicio; inicio < contagem; inicio ++){
            bloco[inicio].classList.remove('escolido2')
        }
        
        let opcaoAtivo = document.getElementsByClassName('opcao active')

        opcaoAtivo[0].classList.add('escolido2');

        let tag= document.createElement("h3")
        tag.setAttribute("id","txtSelecionado2")
        tag.textContent="Selecionado"
        
        var tagSelecionado = document.getElementById("txtSelecionado2");
        
        if( tagSelecionado != null){
            // Removendo a tagSelecionado sem precisar especificar seu pai
            tagSelecionado.parentNode.removeChild(tagSelecionado);
        }
        // adiciona a tag h3 quando o usuario clicar em confirmar
         opcaoAtivo[0].appendChild(tag)
    }
      
    

    //   for(let i = 0; i < checado.length; i ++){
    //       checado[i].checked = true
    //       if (checado[i].checked){
    //           console.log("escolheu: " + checado[i].value)
    //       }
    //   }
        
       
    
