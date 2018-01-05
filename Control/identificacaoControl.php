<?php 
require_once "../Model/MySqlClass.php";
require_once "../Model/UtilClass.php";

$util = new Util();
$sql = new MySql();

/*Codigo que salva no banco de dados toda analise que for feita*/
if(isset($_GET['boxColor']) && isset($_GET['id']) && isset($_GET['local']) && isset($_GET['data']) && isset($_GET['hora'])){
    $sql->Insert("CREATE TABLE IF NOT EXISTS identificacao (boxcolor VARCHAR(50), id VARCHAR(255), local VARCHAR(255), data DATE, hora TIME, nome VARCHAR(50), cpf VARCHAR(50), telefone VARCHAR(50), cod_certificado VARCHAR(10), cod_identificacao SERIAL, desc_Box TEXT, identificacao_Caixa VARCHAR(50))");
   /*$materialBox = "";
    $l=1;
    while(isset($_GET['box'.$l])){
        $materialBox .= $_GET['box'.$l].',';
        $l++;
    }*/

    $sql->Insert("insert into identificacao (boxColor, id, local, data, hora, nome, cpf, telefone, desc_Box, identificacao_Caixa) values('{$_GET['boxColor']}', '{$_GET['id']}', '{$_GET['local']}', '{$_GET['data']}', '{$_GET['hora']}', '{$materialBox}', '{$_SESSION['nome']}', '{$_SESSION['cpf']}', '{$_SESSION['telefone']}', '{$_GET['descBox']}', '{$_GET['idBox']}')");
    echo "<meta http-equiv='refresh' content='0; url=analise.php?id={$_GET['id']}'>";
}

?>