<?php
    date_default_timezone_set("America/Sao_Paulo");
    //Array com os horarios que possam ser imprimidos
    $hora = array('13:55:40','13:56:40','13:58:41','13:59:40','14:01:00','14:02:00','14:04:40',
    '14:05:00','14:07:10','14:08:00','14:10:23', '14:11:23','14:13:39','14:14:23','14:16:39',
    '14:17:23','14:19:13','14:20:23','14:22:40', '14:21:23','14:25:07', '14:26:23', '14:55:40');

    //Intervalo que o usuario escolherá entre 3, 15, 30 ou 60
    $interval = 3;

    //valor de base o primeiro valor do array.
    $val1 = $hora[0];

    print $val1;

    for ($i=1;$i<count($hora);$i++) {

        $val2 = $hora[$i];

        //Instanciando objetos DateTime
        $datetime1 = new DateTime($val1);
        $datetime2 = new DateTime($val2);

        //Retorna a diferença entre dois objetos DateTime.
        $intervalo = $datetime1->diff($datetime2);

        //Retorna a dìferença de acordo com um formato informado, neste caso minutos
        $result = $intervalo->format('%i');

        //imprime o valor cuja diferença é dada por $interval
        if($result == ($interval-1) || $result == ($interval)){
            print ", ".$val2;
            //atribui o valor encontrado $val2 em $val1 para buscar
            //próxima diferença $interval a partir deste
            $val1 = $val2;
        }

    }
?>