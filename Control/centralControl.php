<?php
    session_start();
    if(isset($_SESSION['cpf'])){
        $sessionName = explode(" ", $_SESSION['nome']);
        echo "<label class='brand-logo'>&nbspBem vindo, {$sessionName[0]}</label>";
    }
    else{
        echo "<meta http-equiv='refresh' content='0; url=login.php'>";
    }
    
?>