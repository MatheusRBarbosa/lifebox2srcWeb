<?php
    require_once "../Model/SignInClass.php";
    require_once "../Model/UtilClass.php";
    require_once "../Model/MySqlClass.php";

    $sql = new MySql();
    $util = new Util();
    $signIn = new SignIn();
    if(isset($_POST['name']) && isset($_POST["cpf"]) && isset($_POST["phone"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confpassword"])){

        if($signIn->setName($_POST['name'])&&
        $signIn->setCpf($_POST['cpf'])&&
        $signIn->setPhone($_POST['phone'])&&
        $signIn->setEmail($_POST["email"])&&
        $signIn->setPassword($_POST["password"],$_POST["confpassword"])){
            $sql->Insert("CREATE TABLE IF NOT EXISTS usuario (id SERIAL, nome VARCHAR(50), cpf VARCHAR(50), telefone VARCHAR(50), email VARCHAR(50), senha VARCHAR(50), adm BOOLEAN)");
            if($sql->Insert("INSERT INTO usuario (nome, cpf, telefone, email, senha) VALUES ('{$signIn->getName()}', '{$signIn->getCpf()}', '{$signIn->getPhone()}', '{$signIn->getEmail()}', '{$signIn->getPassword()}')")){
                $util->AlertMsg("Cadastro feito com sucesso", 2000);
                echo "<meta http-equiv='refresh' content='2; url=login.php'>";
            }
            else{
                $util->AlertMsg("CPF já cadastrado", 5500);
            }
        }

    }
    else{
        $util->AlertMsg("TODOS OS CAMPOS DEVEM SER PREENCHIDOS", 2000);
    }
    
?>