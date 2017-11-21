<?php
    class MySql{
        private $connection;


        public function __construct(){
            $this->connection = mysqli_connect("localhost", "root", "usbw", "lifebox");
        }

        public function InsertUser($nome, $cpf, $telefone, $email, $senha){
            $query = "insert into usuario (nome, cpf, telefone, email, senha) values ('{$nome}', '{$cpf}', '{$telefone}', '{$email}', '{$senha}')";
            return mysqli_query($this->connection, $query);
        }

        public function IsertIdentificacao($boxColor, $id, $local, $data, $hora, $materiais, $nome, $cpf, $telefone){
            $query = "insert into identificacao (boxColor, id, local, data, hora, materiais, nome, cpf, telefone) values('{$boxColor}', '{$id}', '{$local}', '{$data}', '{$hora}', '{$materiais}', '{$nome}', '{$cpf}', '{$telefone}')";
            return mysqli_query($this->connection, $query);
        }

        public function selectWhere($atribute, $table, $column, $value){
            $query = "select {$atribute} from {$table} where {$column} = {$value}";
            $result = mysqli_query($this->connection, $query);
            if($result){
                return mysqli_fetch_assoc($result);
            }
        }

        public function selectWhereArray($atribute, $table, $column, $value){
            $select = array();
            $query = "select {$atribute} from {$table} where {$column} = '{$value}'";
            $result = mysqli_query($this->connection, $query);
            if($result){
                $select = array();
                while($line = mysqli_fetch_assoc($result)){
                    $select[] = $line;
                }
                return $select;
            }
        }

        public function select($table, $column){
            $select = array();
            $query = "select {$column} from {$table}";
            $result = mysqli_query($this->connection, $query);
            if($result){
                while($line = mysqli_fetch_assoc($result)){
                    $select[] = $line;
                }
                return $select;
            }
        }
    }

?>