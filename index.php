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
    include "view/home.php";
    }
?>