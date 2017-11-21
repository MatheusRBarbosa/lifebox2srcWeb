<?php
    echo "<ul id='dropdown2' class='dropdown-content'>";
    for($i=5;$i<25;$i+=5){
        echo "<li><a href='?id={$_GET['id']}&epg={$i}'>{$i}</a></li>";
    }    
    echo "<li><a href='?id={$_GET['id']}&epg=Tudo'>Tudo</a></li>";
    echo "</ul>";
    if(isset($_GET['epg'])){
        $titleButton2 = $_GET['epg'];
    }
    else{
        $titleButton2 = "Quantidade de exibição";
    }
    echo "<a class='dropdown-button waves-light waves-blue btn btnAnalise' href='#' data-activates='dropdown2'>{$titleButton2}<i class='material-icons right'>expand_more</i></a>";
    
?>