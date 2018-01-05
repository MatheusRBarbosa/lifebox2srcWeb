<?php
    /*Codigo responsavel por exibir o botao que deternima o intervalo de tempo*/
    $intervals = array(3, 15, 30, 60, 120, 180, 240, 300);
    echo "<ul id='dropdown3' class='dropdown-content'>";
    
    if(isset($_GET['epg'])){
        for($i=0;$i<count($intervals);$i++){
            echo "<li><a href='?id={$_GET['id']}&epg={$_GET['epg']}&interval={$intervals[$i]}'>{$intervals[$i]} mins</a></li>";
        }
    }
    else{
        for($i=0;$i<count($intervals);$i++){
            echo "<li><a href='?id={$_GET['id']}&interval={$intervals[$i]}'>{$intervals[$i]} mins</a></li>";
        }
    }

    echo "</ul>";
    if(isset($_GET['interval'])){
        $titleButton2 = $_GET['interval']." minutos";
    }
    else{
        $titleButton2 = "Intervalo de tempo em minutos";
    }
    echo "<a class='dropdown-button waves-light waves-blue btn btnAnalise' href='#' data-activates='dropdown3'>{$titleButton2}<i class='material-icons right'>expand_more</i></a>";
    
?>