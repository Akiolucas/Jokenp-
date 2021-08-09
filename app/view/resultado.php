<?php
    include_once "app/view/include/head.html";
?>
<body>
    
<h1>Resultado</h1>
    <div id="areaResultado" class="container">
        <div class="container-fluid">
            <div class="row mb-4 pt-4 mx-0">
                <div class="col-md-4 col-sm-12">  
                    <h4><?=$ganhador[2]?></h4>    
                    <div class="resultado-blocos gradiente m-auto">
                        <img class="mx-auto d-block imagens" src="app/Assets/images/<?=$ganhador[2].'.jpg';?>" alt="imagem <?=$ganhador[2]; ?>" />
                    </div>             
                </div>
            
                <div class="col-md-4 col-sm-12">
                    <h4>Batalha</h4>
                    <div class="resultado-blocos gradiente m-auto">  
                        <img class="mx-auto d-block imagens" src="app/Assets/images/versus.jpg" alt="imagem versus" /> 
                    </div>           
                </div>

                <div class="col-md-4 col-sm-12">
                    <h4>Mestre</h4>  
                    <div class="resultado-blocos gradiente m-auto">
                        <img class="mx-auto d-block imagens" src="app/Assets/images/mestre.jpg" alt="mestre" />
                    </div>
                </div>
            </div>
            <div class="row pt-4 pb-5 mx-0">
                <div class="col-md-4 col-sm-12">
                    <h4><?=ucfirst($ganhador[3])?></h4> 
                    <div class="resultado-blocos gradiente m-auto">
                        <img class="mx-auto d-block imagens" src="app/Assets/images/<?=$ganhador[3].'.jpg';?>" alt=" imagem <?=$ganhador[3]; ?>" />
                    </div> 
                </div>

                <div class="col-md-4 col-sm-12">
                    <h4><?=ucfirst($ganhador[0])?></h4>
                    <div class="resultado-blocos gradiente flipper m-auto">
                        <img class="mx-auto d-block imagens" src="app/Assets/images/<?=$ganhador[1].'.jpg';?>" alt="imagem <?=$ganhador[1]; ?>" />
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <h4><?=ucfirst($ganhador[4])?></h4>
                    <div class="resultado-blocos gradiente m-auto">  
                        <img class="mx-auto d-block imagens" src="app/Assets/images/<?=$ganhador[4].'.jpg';?>" alt=" imagem <?=$ganhador[4]; ?>" />
                    </div>
                    </div>
            </div>
            <div class="row pt-4 pb-5 justify-content-center">
                <div class="col-md-4 col-sm-12">
                    <a href="index.php"><button class=" btn btn-lg btn-block gradiente">Jogar novamente</button></a>
                </div>
            </div>
        </div>
    </div>
   

<?php
    include_once "app/view/include/footer.html";
?>
</body>

</html>