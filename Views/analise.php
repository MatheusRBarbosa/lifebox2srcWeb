<span class="center-align"><h3>Análise</h3></span></central>
<div class="row">
    <div class="container">
        <div class="card blue-grey darken-1 hoverable">
            <div class="card-content white-text center-align">
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                        <?php include "../Control/dropDownAnaliseControl.php"; ?>
                        <a class='dropdown-button waves-light waves-blue btn' href='#' data-activates='dropdown1'>Escolha a identificação do teste<i class="material-icons right">expand_more</i></a>
                        <!-- Dropdown Structure -->
                            <?php include "../Control/dropDownAnaliseControl.php"; ?>
                        </div>
                        <div class="row">
                        <table class="centered responsive-table">
                            <thead>
                            <tr>
                                <th>Termômetro 1</th>
                                <th>Termômetro 2</th>
                                <th>Data</th>
                                <th>Hora</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>Alvin</td>
                                <td>Eclair</td>
                                <td>$0.87</td>
                                <td>$0.87</td>
                            </tr>
                            <tr>
                                <td>Alan</td>
                                <td>Jellybean</td>
                                <td>$3.76</td>
                                <td>$0.87</td>
                            </tr>
                            <tr>
                                <td>Jonathan</td>
                                <td>Lollipop</td>
                                <td>$7.00</td>
                                <td>$0.87</td>
                            </tr>
                            
                            </tbody>
                        </table>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <span class="card-title">Escreva a análise</span>
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                <label style="color:white" for="textarea1"></label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>