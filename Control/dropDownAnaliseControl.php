<?php
    require_once "../Model/MySqlClass.php";

    $sql = New MySql();

    $idUnico = array();
    $ids = $sql->select('templog', 'id');
    $idUnico[] = $ids[0];

    for($i=1; $i<count($ids); $i++){
        $equalFlag = 1;
        for($j=0; $j<count($idUnico); $j++){
            if($ids[$i] == $idUnico[$j]){
                $equalFlag = 0;
                break;
            }
        }
        if($equalFlag){
            $idUnico[] = $ids[$i];
        }
    }

    echo "<ul id='dropdown1' class='dropdown-content'>";
    foreach($idUnico as $id){
        echo "<li><a href='?id=central{$id['id']}'>{$id['id']}</a></li>";
    }
    echo "</ul>";


?>