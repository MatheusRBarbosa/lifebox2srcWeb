<?php 
require_once "../Model/MySqlClass.php";
require_once "../Model/UtilClass.php";

$util = new Util();
$sql = new MySql();


if(isset($_GET['boxColor']) && isset($_GET['id']) && isset($_GET['local']) && isset($_GET['data']) && isset($_GET['hora'])){
    /*Ele concatena apenas 'on' e 'off' nao tenho certeza se é o ideal, creio que
    armazenar o nome do campo e não seu valor, seja muito melhor.*/
    $materialBox = "";
    $l=1;
    while(isset($_GET['box'.$l])){
        $materialBox .= $_GET['box'.$l].',';
        $l++;
    }

    $sql->Insert("insert into identificacao (boxColor, id, local, data, hora, materiais, nome, cpf, telefone, desc_Box, identificacao_Caixa) values('{$_GET['boxColor']}', '{$_GET['id']}', '{$_GET['local']}', '{$_GET['data']}', '{$_GET['hora']}', '{$materialBox}', '{$_SESSION['nome']}', '{$_SESSION['cpf']}', '{$_SESSION['telefone']}', '{$_GET['descBox']}', '{$_GET['idBox']}')");
    echo "<meta http-equiv='refresh' content='0; url=analise.php?id={$_GET['id']}'>";
}

?>