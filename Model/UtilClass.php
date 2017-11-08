<?php
    class Util{

        public function AlertMsg($msg, $duration){
            echo "<script type='text/javascript'>Materialize.toast('{$msg}', {$duration})</script>";
        }
    }


?>