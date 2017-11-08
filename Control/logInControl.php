<?php
    require_once "../Model/MySqlClass.php";
    require_once "../Model/UtilClass.php";

    $util = new Util();
    $sql = new MySql();

    if(isset($_POST['login']) && isset($_POST['password'])){
        $user = $sql->selectWhere('usuario', 'cpf', $_POST['login'], '*');
        if($user != NULL){
            if($user['senha'] == $_POST['password']){
                session_start();
                $_SESSION['id'] = $user['id'];
                $_SESSION['nome'] = $user['nome'];
                $_SESSION['cpf'] = $user['cpf'];
                $_SESSION['telefone'] = $user['telefone'];
                $_SESSION['email'] = $user['email'];
    
                echo "<meta http-equiv='refresh' content='0; url=central.php'>";
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