<?php
    require_once "../Model/MySqlClass.php";
    
    $sql = New MySql();
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $data = $sql->selectWhereArray('*','templog', 'id', $id);
        
        if(isset($_GET['pg'])){
            $pg = $_GET['pg'];
        }
        else{
            $pg = 1;
        }
        if(isset($_GET['epg'])){
            $paginaitonMax = $_GET['epg']; //Quantidade de linhas que aparecerão na tabela
            if($paginaitonMax == "Tudo"){
                $paginaitonMax = count($data);
            }
        }
        else{
            $paginaitonMax = 5;
        }
        $paginationLimit = ($pg * $paginaitonMax) + ($pg - 1);
        if($pg > 1){
            $i = (($pg - 1)*$paginaitonMax)+($pg-1);
        }
        else{
            $i=0;
        }
        for(;$i<count($data) && $i<$paginationLimit;$i++){
            $dataSplited = explode(" ", $data[$i]['time']);
            $date = $dataSplited[0];
            $hour = $dataSplited[1];
            echo "<tr>";
                echo "<td>{$data[$i]['temp1']} ºC</td>";
                echo "<td>{$data[$i]['temp2']} ºC</td>";
                echo "<td>{$date}</td>";
                echo "<td>{$hour}</td>";
            echo "</tr>";
        }
    }
?>