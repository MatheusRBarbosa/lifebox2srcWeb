
<span class="center-align"><h3>Monitoramento</h3></span></central>
<div class="row">
    <!-- Coluna 1 -->
    <div class="col s6 ">
        <!-- Linha 1 -->
        <div class="row">
            <div class="container">
                <div class="card blue-grey darken-1 hoverable">
                    <div class="card-content white-text center-align">
                        <span class="card-title">Termômetro 1</span>
                        <h3><p id="monitoraT1">24.4 ºC</p></h3>
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
                        <h3><p id="monitoraT2">19.1 ºC</p></h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- Linha 3 -->
        <div class="row">
            <div class="container center-align">
                <a class="waves-effect waves-light waves-blue btn">Gerar relatório</a>
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
                    <p>19:30 - 24.4 ºC | 20.0 ºC<br>
                    09:30 - 23.0 ºC | 19.0 ºC<br>
                    19:30 - 22.5 ºC | 18.8 ºC<br>
                    19:30 - 22.1 ºC | 17.0 ºC<br>
                    19:30 - 20.9 ºC | 16.9 ºC<br>
                    19:30 - 19.0 ºC | 07.0 ºC</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "../Control/monitoraControl.php"; ?>