<?php
   
    if(isset($_GET['sair'])){
        session_unset(); 
        session_destroy();
        echo "<meta http-equiv='refresh' content='0; url=login.php'>";
    }

?>