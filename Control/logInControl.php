<?php
    require_once "../Model/MySqlClass.php";
    require_once "../Model/UtilClass.php";

    $util = new Util();
    $sql = new MySql();

    if(isset($_POST['login']) && isset($_POST['password'])){
        $user = $sql->Select("SELECT * FROM usuario WHERE cpf = {$_POST['login']}");
        if($user != NULL){
            if($user[0]['senha'] == $_POST['password']){
                session_start();
                $_SESSION['id'] = $user[0]['id'];
                $_SESSION['nome'] = $user[0]['nome'];
                $_SESSION['cpf'] = $user[0]['cpf'];
                $_SESSION['telefone'] = $user[0]['telefone'];
                $_SESSION['email'] = $user[0]['email'];
    
                echo "<meta http-equiv='refresh' content='0; url=monitoramento.php'>";
            }
            else{
                $util->AlertMsg("SENHA INCORRETA", 5500);
            }
        }
        else{
            $util->AlertMsg("CPF NÃO ENCONTRADO", 5500);
        }
    }

?>