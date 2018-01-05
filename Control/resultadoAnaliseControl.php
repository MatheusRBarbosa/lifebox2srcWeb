<?php

    require_once "../Model/MySqlClass.php";
    $sql = new MySql();


    if(isset($_GET['r']) && isset($_GET['id'])){
        
        $result = $_GET['r'];
        $id= $_GET['id'];
        $cod_certificado = "AUT";
        $cod_invalido = "Nao_aprov";

        if($result){
            echo "<span class='card-title' style='color:white'><h4>Esse teste com a caixa foi validado com <b style='color:#00e676'>SUCESSO !</b></h4></span>";
            $sql->Insert("UPDATE identificacao SET cod_certificado = '{$cod_certificado}' WHERE id = '{$id}'");
            
            $num_certificado = $sql->Select("SELECT cod_identificacao FROM identificacao WHERE id = '{$id}'");
            $num_certificado = $cod_certificado.$num_certificado[0]['cod_identificacao'];
            echo "<p style='color:white'>Número de certificado: <b>{$num_certificado}<b></p>";

            /*ESCREVER AS INFORMAÇOES NECESSARIAS NO BANCO ONDE ONDE CONTERÁ AS CAIXAS CADASTRADAS*/

        }
        else{
            echo "<span class='card-title' style='color:white'><h4>Esse teste com a caixa <b style='color:red'>NÃO</b> foi validado </h4></span>";
            $sql->Insert("UPDATE identificacao SET cod_certificado = '{$cod_invalido}' WHERE id = '{$id}'");
            $sql->Insert("DELETE FROM templog WHERE id='{$id}'");
        }
    }


?>