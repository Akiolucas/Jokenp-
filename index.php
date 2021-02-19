<?php
    if(isset($_GET["classe"]) && isset($_GET['metodo'])){

        $classe = $_GET["classe"];
        $metodo = $_GET['metodo'];
       
        $classe = $classe.'controller';
       
        include "controller/".$classe.'.php';
        // instância o objeto da classe
        $jogar = new $classe();
        
        //instância o método da classe
        $jogar->resultado();
    }
    else{
    include_once "view/head.html";
    include_once "view/home.html";
    include_once "view/footer.html";
    }
?>