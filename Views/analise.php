<?php include "head.html"; 
    session_start();
    include "navBar.php";
?>
<body>
    <span class="center-align"><h3>Análise</h3></span></central>
    <hr><br>
    <div class="row">
        <div class="container">
            <div class="card blue-grey darken-1 hoverable">
                <div class="card-content white-text center-align">
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <?php include "../Control/analiseTitleControl.php"; ?>
                                <?php include "../Control/linePerPageControl.php"; ?>
                                <?php include "../Control/intervalTimeControl.php"; ?>
                            </div>
                            <div class="row">
                            <table class="centered responsive-table" style="color:white">
                                <thead>
                                <tr>
                                    <th>Termômetro 1</th>
                                    <th>Termômetro 2</th>
                                    <th>Data</th>
                                    <th>Hora</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php include "../Control/tableAnaliseControl.php"; ?>
                                </tbody>
                            </table>
                                <?php include "../Control/paginationTableControl.php"; ?>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <span class="card-title">Escreva a análise</span>
                                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                                    <label style="color:white" for="textarea1"></label>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="container center-align">
                                <?php
                                echo "<a href='resultadoAnalise.php?id={$_GET['id']}&r=1' class='waves-effect waves-light btn'>Aprovar</a>";
                                echo "<a href='resultadoAnalise.php?id={$_GET['id']}&r=0' class='waves-effect waves-red btn'>Não aprovar</a>";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
