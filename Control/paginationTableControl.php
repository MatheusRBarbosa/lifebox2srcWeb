<?php
if(isset($_GET['id'])){
    /*Gambiarra para tirar as paginas que não aprensentam nehum conteudo.*/
    if(isset($_GET['epg'])){
        $epg = $_GET['epg'];
        if($epg == 5){
            $maxPages = (ceil(count($data)/$paginaitonMax))-7; // $paginationMax foi definido em tableAnaliseControl.php
        }
        else if($epg == 10){
            $maxPages = (ceil(count($data)/$paginaitonMax))-2;
        }
        else if($epg == 15){
            $maxPages = (ceil(count($data)/$paginaitonMax))-1;
        }
        else if($epg == 20){
            $maxPages = ceil(count($data)/$paginaitonMax);
        }
    }
    else{
        $epg = 5;
        $maxPages = (ceil(count($data)/$paginaitonMax))-7;
    }
    /**/
    $urlAtual = "id={$_GET['id']}&epg={$paginaitonMax}";//Salvar a url
   
    if(isset($_GET['pg'])){
        $pageNumber = $_GET['pg'];
        /*Controle dos botoes da paginação, colocando a pagina atual no meio dos botoes*/
        if($pageNumber <= 4){
            /* Lowlimit é a variavel que armazena a o numero da primeira pagina 
            dentre as paginas exibidas no rodapé*/
            $lowLimit = 1; 

        }

        else{
            $lowLimit = $pageNumber - 4;
            if($pageNumber+4 >= $maxPages){
                $lowLimit = $maxPages - 8;
            }
        }
        
        if(($pageNumber+4) <= $maxPages){
            /*Highlimit é a variavel que armazena o numero da ultima pagina
            dentre as paginas exibidas no rodapé*/
            $highLimit = $pageNumber + 4;
            if($pageNumber >= 1 && $pageNumber < 5 && $highLimit+4 <= $maxPages){
                $highLimit+=(4-$pageNumber);
            }
        }
        else{
            $highLimit = $maxPages;
        }
        /*Controle da aparencia das setas da paginação*/
        if($pageNumber == 1){
            $leftArrow = "disabled";
        }
        else{
            $leftArrow = "waves-effect";
        }
        if($pageNumber == $maxPages){
            $righArrow = "disabled";
        }
        else{
            $righArrow = "waves-effect";
        }

        if($pageNumber>1){
            $back = $pageNumber - 1;
        }
        else{
            $back = 1;
        }
        if($pageNumber < $maxPages){
            $next = $pageNumber + 1;
        }
        else{
            $next = $maxPages;
        }

    }
    else{
        /*Quando o $_GET['pg'] não está definido significa que a pagina está 
        em sua forma 'default', logo, a gente sabe que está na primeira pagina
        entao se configura-se como se fosse a primeira pagina*/
        $lowLimit = 1;
        if(count($data)>=8){
            $highLimit = 8;
        }
        else{
            if(isset($_GET['epg'])){
                if($epg == 5){
                    $highLimit = (ceil(count($data)/$epg)); 
                }
                else if ($epg == "Tudo"){
                    //Não deve ser feito nada.
                }
                else{
                    $highLimit = (ceil(count($data)/$epg)); 
                }
            }
            else{
                $highLimit = (ceil(count($data)/5))-1;
            }
        }
        if($epg != "Tudo" && $highLimit > 1){
            $righArrow = "waves-effect";
        }
        else{
            $righArrow = "disabled";
        }
        $leftArrow = "disabled";
        $back = 1;
        $next = 2;
    }

    /*Botoes e setas da paginação em si*/
    if($epg != 'Tudo'){
        echo "<ul class='pagination'>";
       
        echo "<li class='waves-effect'><a href='?{$urlAtual}&pg=1'><i class='material-icons'>chevron_left</i></a></li>";
        echo "<li class='{$leftArrow}'><a href='?{$urlAtual}&pg={$back}'><i class='material-icons'>chevron_left</i></a></li>";
    
        for($i=$lowLimit;$i<=$highLimit;$i++){
            
            if((isset($_GET['pg']) && $i == $_GET['pg'])) {
                $class = 'active';
                $style = "style='background-color: rgb(33, 150, 243);'";
            }
            else{
                $style = "";
                $class = 'waves-effect';
            }
            echo "<li {$style} class='{$class}'><a href='?{$urlAtual}&pg={$i}'>{$i}</a></li>";
        }
    
        echo "<li class='{$righArrow}'><a href='?{$urlAtual}&pg={$next}'><i class='material-icons'>chevron_right</i></a></li>";
        echo "<li class='waves-effect'><a href='?{$urlAtual}&pg={$maxPages}'><i class='material-icons'>chevron_right</i></a></li>";
    
        echo "</ul>";
    }
}
?>