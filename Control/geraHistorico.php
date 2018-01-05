<?php
    /*Esse arquivo serve para pegar do banco as temperaturas para fazer o histórico e serem enviados para o javascript*/
    require_once "../Model/MySqlClass.php";

    $sql = new MySql();

    $data  = $sql->Select("SELECT temp1, temp2, time FROM templog ORDER BY cod_temp DESC LIMIT 1, 10");
    for($i=0;$i<count($data);$i++){
        echo "{$data[$i]['time']} - {$data[$i]['temp1']} ºC | {$data[$i]['temp2']} ºC <br>";
    }

?>