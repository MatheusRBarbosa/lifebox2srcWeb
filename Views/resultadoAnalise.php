<!DOCTYPE html>
<html lang="en">
<?php include "head.html"; 
    session_start();
    include "navBar.php";
?>

    <body bgcolor="#e3f2fd">

        <div class="row">
            <div class="col s4 offset-s4 vertical-align">
                <div class="card blue-grey darken-1 hoverable">
                    <div class="row">
                        <div class="card-content center-align">
                            <?php include "../Control/resultadoAnaliseControl.php";?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>