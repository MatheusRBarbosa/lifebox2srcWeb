<?php
/*Esse arquivo serve para pegar do banco as temperaturas e serem enviados para o javascript*/
    require_once "../Model/MySqlClass.php";

    $sql = new MySql();

    $temp = $sql->Select("SELECT temp1, temp2 FROM templog ORDER BY cod_temp DESC LIMIT 1");
    if(isset($_GET['t1'])){
        echo $temp[0]['temp1']." ºC";
    }
    else if (isset($_GET['t2'])){
        echo $temp[0]['temp2']." ºC";
    }
?>