<?php
    require_once "../Model/MySqlClass.php";
    date_default_timezone_set("America/Sao_Paulo");

    $sql = New MySql();
    if(isset($_GET['id'])){
       
        $id = $_GET['id'];
        //Array que possui todas as linhas que tenham o id passado na url
        $allData = $sql->Select("SELECT * FROM templog WHERE id = '{$id}'");
        //Array que armazenará todas as linhas com intervalos de tempo
        $data = array();
        $data[] = $allData[0];
        //Verifica se o intervalo de tempo foi selecionado
        if(isset($_GET['interval'])){
            $interval = $_GET['interval'];
        }
        //Se nao foi selecionado entao o intervalo será de 3 mins
        else{
            $interval = 3;
        }
        $explodeTime = explode(" ", $allData[0]['time']);//Separa a data da hora do primeiro valor
        $horaBase = $explodeTime[1]; // Primeiro valor medido será tomado como base
        
        for($i = 1;$i < count($allData); $i++){
            $explodeTime = explode(" ", $allData[$i]['time']);
            $horaAtual = $explodeTime[1];

           //Instanciando objetos DateTime
            $datetime1 = new DateTime($horaBase);
            $datetime2 = new DateTime($horaAtual);

            //Retorna a diferença entre dois objetos DateTime.
            $intervalo = $datetime1->diff($datetime2);

            //Retorna a dìferença de acordo com um formato informado, neste caso minutos
            $result = $intervalo->format('%i');

            //imprime o valor cuja diferença é dada por $interval
            if($result == ($interval-1) || $result == ($interval)){
                $data[] = $allData[$i];
                //atribui o valor encontrado $val2 em $val1 para buscar
                //próxima diferença $interval a partir deste
                $horaBase = $horaAtual;
            }
        }
        //Defininando a pagina que o usuario está
        if(isset($_GET['pg'])){
            $pg = $_GET['pg'];
        }
        else{
            $pg = 1;
        }
        //Definindo a quantiade de exibição por pagina
        if(isset($_GET['epg'])){
            $paginaitonMax = $_GET['epg']; //Quantidade de linhas que aparecerão na tabela
            if($paginaitonMax == "Tudo"){
                $paginaitonMax = count($data);
            }
        }
        else{
            $paginaitonMax = 5;
        }
        //Conta para definir a quantidade de linhas exibidas na tabela, depende da pagina que o usuario está
        $paginationLimit = ($pg * $paginaitonMax) + ($pg - 1);
        if($pg > 1){
            $i = (($pg - 1)*$paginaitonMax)+($pg-1);
        }
        else{
            $i=0;
        }
        //Impressão das linhas na tabela
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
    else{
        echo "<br>";
        echo "<label style='color: yellow; font-size:18px;'>Você precisa identificar o teste primeiro, vá até a aba <i>Identificação</i> para fazer isso</label>";
        echo "<br>";
        echo "<br>";
    }
?>