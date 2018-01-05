<?php
    /*Codigo responsavel por exibir o botao que mostra a quantidade maxima de linha na tabela*/
    echo "<ul id='dropdown2' class='dropdown-content'>";

    if(isset($_GET['interval'])){
        for($i=5;$i<25;$i+=5){
            echo "<li><a href='?id={$_GET['id']}&epg={$i}&interval={$_GET['interval']}'>{$i}</a></li>";
        }    
        echo "<li><a href='?id={$_GET['id']}&epg=Tudo&interval={$_GET['interval']}'>Tudo</a></li>";
    }
    else{
        for($i=5;$i<25;$i+=5){
            echo "<li><a href='?id={$_GET['id']}&epg={$i}'>{$i}</a></li>";
        }    
        echo "<li><a href='?id={$_GET['id']}&epg=Tudo'>Tudo</a></li>";
    }
    echo "</ul>";
    if(isset($_GET['epg'])){
        $titleButton2 = $_GET['epg']." por página";
    }
    else{
        $titleButton2 = "Quantidade de exibição";
    }
    echo "<a class='dropdown-button waves-light waves-blue btn btnAnalise' href='#' data-activates='dropdown2'>{$titleButton2}<i class='material-icons right'>expand_more</i></a>";
    
?>