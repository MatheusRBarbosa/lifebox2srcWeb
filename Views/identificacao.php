<?php include "head.html"; 
    session_start();
    include "navBar.php";
?>
<body>
    <span class="center-align"><h3>Identificação</h3></span></central>
    <hr><br>
    <form method="GET" action="identificacao.php">
        <div class="row">
            <div class="container">
                <div class="card blue-grey darken-1 hoverable">
                    <div class="card-content white-text center-align">
                        <span class="card-title">Teste de validação</span>
                        <br>
                        <!-- Linha 1 -->
                        <div class="row">
                            <div class="col s5">
                                <div class="input-field col s12">
                                    <?php include "../Control/colorDropDown.php"; ?>
                                </div>
                            </div>
                            <div class="col s5 offset-s2">
                                <div class="input-field col s12">
                                    <?php include "../Control/identificacaoDropDown.php"; ?>
                                </div>
                            </div>
                        </div>
                        <br>

                        <!-- Linha 2 -->
                        <div class="row">
                            <div class="col s5">
                                <div class="input-field">
                                    <input id="idBox" type="text" class="validate" name="idBox">
                                    <label for="idBox" style="color:white;">Identificação da caixa</label>
                                </div>
                            </div>
                            <div class="col s5 offset-s2">
                                <div class="input-field">
                                    <input id="descBox" type="text" class="validate" name="descBox">
                                    <label for="descBox" style="color:white;">Descrição da caixa</label>
                                </div>
                            </div>
                        </div>

                        <!-- Linha 3 -->
                        <div class="row">
                            <div class="col s5">
                                <div class="input-field">
                                    <input id="local" type="text" class="validate" name="local">
                                    <label for="local" style="color:white;">Local da validação</label>
                                </div>
                            </div>
                            <div class="col s5 offset-s2">
                                <div>
                                    <label style="color:white;font-size:120%;" for="iden"><b>Nome completo:</b></label><br>
                                    <label style="color:white;font-size:110%;" for="iden"><?= $_SESSION['nome']; ?></label>
                                </div>
                            </div>
                        </div>

                        <!-- Llinha 4 -->
                        <div class="row">
                            <div class="col s5">
                                <input type="date" class="datepicker" name="data">
                                <label style="color:white;">Data da validação</label>
                            </div>
                            <div class="col s5 offset-s2">
                                <div>
                                    <label style="color:white;font-size:120%;" for="iden"><b>CPF:</b></label><br>
                                    <label style="color:white;font-size:110%;" for="iden"><?= $_SESSION['cpf']; ?></label>
                                </div>
                            </div>
                        </div>

                        <!-- Llinha 5 -->
                        <div class="row">
                            <div class="col s5">
                                <input type="time" class="timepicker" name="hora">
                                <label style="color:white;">Hora da validação</label>
                            </div>
                            <div class="col s5 offset-s2">
                                <div>
                                    <label style="color:white;font-size:120%;" for="iden"><b>Telefone:</b></label><br>
                                    <label style="color:white;font-size:110%;" for="iden"><?= $_SESSION['telefone']; ?></label>
                                </div>
                            </div>
                        </div>

                        <!-- Materiais -->
                        <!--
                        <span class="card-title">Materiais utilizados</span>
                        <br>
                        <div class="row">
                            <div class="col s6 push-s1">
                                <input type="checkbox" class="filled-in" id="filled-in-box1" checked="checked" name="box1" value="Material 1" />
                                <label for="filled-in-box1" style="color:white">Material 1</label>
                            </div>
                            <div class="col s6 pull-s1">
                                <input type="checkbox" class="filled-in" id="filled-in-box5" checked="checked" name="box5" value="Material 5"/>
                                <label for="filled-in-box5" style="color:white">Material 5</label>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col s6 push-s1">
                                <input type="checkbox" class="filled-in" id="filled-in-box2" checked="checked" name="box2" value="Material 2"/>
                                <label for="filled-in-box2" style="color:white" >Material 2</label>
                            </div>
                            <div class="col s6 pull-s1">
                                <input type="checkbox" class="filled-in" id="filled-in-box6" checked="checked" name="box6" value="Material 6"/>
                                <label for="filled-in-box6" style="color:white">Material 6</label>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col s6 push-s1">
                                <input type="checkbox" class="filled-in" id="filled-in-box3" checked="checked" name="box3" value="Material 3"/>
                                <label for="filled-in-box3" style="color:white">Material 3</label>
                            </div>
                            <div class="col s6 pull-s1">
                                <input type="checkbox" class="filled-in" id="filled-in-box7" checked="checked" name="box7" value="Material 7"/>
                                <label for="filled-in-box7" style="color:white">Material 7</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s6 push-s1">
                                <input type="checkbox" class="filled-in" id="filled-in-box4" checked="checked" name="box4" value="Material 4"/>
                                <label for="filled-in-box4" style="color:white">Material 4</label>
                            </div>
                        </div>

                        -->
                        <div class="card-action center-align">
                            <button type="submit" class="waves-effect waves-light waves-blue btn">Iniciar análise de validação</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
<?php include "../Control/identificacaoControl.php"; ?>