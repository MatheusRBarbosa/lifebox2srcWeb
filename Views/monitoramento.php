<?php include "head.html"; 
    session_start();
    include "navBar.php";
?>
<body>
    <span class="center-align"><h3>Monitoramento</h3></span></central>
    <hr><br>
    <div class="row">
        <!-- Coluna 1 -->
        <div class="col s6 ">
            <!-- Linha 1 -->
            <div class="row">
                <div class="container">
                    <div class="card blue-grey darken-1 hoverable">
                        <div class="card-content white-text center-align">
                            <span class="card-title">Termômetro 1</span>
                            <h3><p id="monitoraT1">-- ºC</p></h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Linha 2 -->
            <div class="row">
                <div class="container">
                    <div class="card blue-grey darken-1 hoverable">
                        <div class="card-content white-text center-align">
                            <span class="card-title">Termômetro 2</span>
                            <h3><p id="monitoraT2">-- ºC</p></h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Linha 3 -->
            <div class="row">
                <div class="container center-align">
                    <a href="identificacao.php" class="waves-effect waves-light waves-blue btn">Iniciar análise</a>
                </div>
            </div>
        </div>
        <!-- Coluna 2 -->
        <div class="col s6">
            <div class="container">
                <div class="card blue-grey darken-1 hoverable">
                    <div class="card-content white-text center-align">
                        <span class="card-title">Histórico das temperaturas</span>
                        <span class="">Hora - Termômetro 1 | Termômetro 2</span>
                        <br><br>
                        <p id="histTemp">--</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="../Control/monitoraTempControl.js"></script>
