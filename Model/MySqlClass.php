<?php
    class MySql{
        private $connection;


        public function __construct(){
            $this->connection = mysqli_connect("localhost", "root", "usbw", "lifebox");
        }
        
        public function Insert($query){
            return mysqli_query($this->connection, $query);
        }

        public function Select($query){
            $select = array();
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