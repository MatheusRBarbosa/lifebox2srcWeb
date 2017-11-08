<?php
    class SignIn{
        
        private $nome;
        private $cpf;
        private $telefone;
        private $email;
        private $password;
        
        private function AlertMsg($msg, $duration){
            echo "<script type='text/javascript'>Materialize.toast('{$msg}', {$duration})</script>";
        }

        private function BlankField($field, $var){
            if($var != "" && $var != NULL){
                return true;
            }
            else{
                echo "<script type='text/javascript'>Materialize.toast('Preencha o campo {$field}', 5500)</script>";
                return false;
            }
        }

        public function getName(){
            return $this->nome;
        }
        public function getCpf(){
            return $this->cpf;
        }
        public function getPhone(){
            return $this->telefone;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getPassword(){
            return $this->password;
        }
        public function setName($nome){
            if(empty($nome)){
                $this->AlertMsg("Preencha o campo NOME", 5500);
                return false;
            }
            else{
                $er = "/^[a-zA-Z ]*$/";
                if (preg_match($er, $nome)){
                    $this->nome = $nome;
                    return true;
                }
                else{
                    $this->AlertMsg("Nome inválido",5500);
                    return false;
                }
            }
    }
        public function setCpf($cpf){
            if(empty($cpf)){
                $this->AlertMsg("Preencha o campo CPF",5500);
                return false;
            }
            else{
                //Verificar se Cpf é autentico através da formula
                //Verificar se é o unico CPF cadastrado
                $er = "/^[0-9]*$/";
                if (preg_match($er, $cpf)){
                    $this->cpf = $cpf;
                    return true;
                }
                else{
                    $this->AlertMsg("CPF inválido", 5500);
                    return false;
                }
            }
        }

        public function setPhone($phone){
            if(empty($phone)){
                $this->AlertMsg("Preencha o campo TELEFONE", 5500);
                return false;
            }
            else{
                $er = "/^[0-9]*$/";
                if (preg_match($er, $phone)){
                    $this->telefone = $phone;
                    return true;
                }
                else{
                    $this->AlertMsg("Telefone inválido", 5500);
                    return false;
                }
            }
        }
        
        public function setEmail($email){
            if(empty($email)){
                $this->AlertMsg("Preencha o campo EMAIL", 5500);
                return false;
            }
            else{
                $er = "/^(([0-9a-zA-Z]+[-._+&])*[0-9a-zA-Z]+@([-0-9a-zA-Z]+[.])+[a-zA-Z]{2,6}){0,1}$/";
                if (preg_match($er, $email)){
                    $this->email = $email;
                    return true;
                } 
                else {
                    $this->AlertMsg("Email inválido",5500);   
                    return false; 
                }
            }
        }

        public function setPassword($password, $confpassword){
            if(empty($password)){
                $this->AlertMsg("Preencha o campo SENHA", 5500);
                return false;
            }
            else if(empty($confpassword)){
                $this->AlertMsg("Preencha o campo CONFIRMAR SENHA", 5500);
                return false;
            }
            else{
                if(!strcmp($password, $confpassword)){
                    $this->password = $password;
                    return true;
                }
                else{
                    $this->AlertMsg("Confirme a senha corretamente", 5500);
                    return false;
                }
            }
        }
    }
?>