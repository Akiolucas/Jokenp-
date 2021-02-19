<?php
    include_once "head.html";
?>
<body>
    
<h1>Resultado</h1>
    <div id="areaResultado" class="container">
        <div class="container-fluid">
            <div class="row mb-4 pt-4">
                <div class="col-md-4 col-sm-12 resultado-blocos gradiente m-auto">  
                    <h4><?=$ganhador[2]?></h4>                 
                    <img class="mx-auto d-block imagens" src="view/images/<?=$ganhador[2].'.jpg';?>" alt="imagem <?=$ganhador[2]; ?>" />
                </div>
            
                <div class="col-md-4 col-sm-12  resultado-blocos gradiente m-auto">
                    <h4>Batalha</h4>  
                    <img class="mx-auto d-block imagens" src="view/images/versus.jpg" alt="imagem versus" />            
                </div>

                <div class="col-md-4 col-sm-12  resultado-blocos gradiente m-auto">
                    <h4>Mestre</h4>  
                    <img class="mx-auto d-block imagens" src="view/images/mestre.jpg" alt="mestre" />
                </div>
            </div>
            <div class="row pt-4 pb-5">
                <div class="col-md-4 col-sm-12 resultado-blocos gradiente m-auto">
                    <h4><?=ucfirst($ganhador[3])?></h4>  
                    <img class="mx-auto d-block imagens" src="view/images/<?=$ganhador[3].'.jpg';?>" alt=" imagem <?=$ganhador[3]; ?>" />
                </div>

                <div class="col-md-4 col-sm-12  resultado-blocos gradiente m-auto">
                    <h4><?=ucfirst($ganhador[0])?></h4>
                    <img class="mx-auto d-block imagens" src="view/images/<?=$ganhador[1].'.jpg';?>" alt="imagem <?=$ganhador[1]; ?>" />
                </div>

                <div class="col-md-4 col-sm-12  resultado-blocos gradiente m-auto">
                    <h4><?=ucfirst($ganhador[4])?></h4>  
                    <img class="mx-auto d-block imagens" src="view/images/<?=$ganhador[4].'.jpg';?>" alt=" imagem <?=$ganhador[4]; ?>" />
                </div>
            </div>
        </div>
    </div>
   

<?php
    include_once "footer.html";
?>