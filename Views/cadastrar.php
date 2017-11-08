<!DOCTYPE html>
<html lang="en">
    <?php include "head.html";?>

    <body bgcolor="#e3f2fd">
        <div class="row">
            <div class="col s6 offset-s3 vertical-align">
                <div class="card blue-grey darken-1 hoverable">
                    <form method="post">
                        <div class="card-content center-align">
                            <span class="card-title" style="color:white">Lifebox Cadastro</span>
                            <div class="row">
                                <div class="input-field col s5">
                                    <i class="large material-icons prefix" style="color:white">person_pin</i>
                                    <input id="name" type="text" style="color:white" class="validate" name="name">
                                    <label style="color:white" for="name">Nome completo</label>
                                </div>
                                <div class="input-field col s5 offset-s1">
                                    <i class="large material-icons prefix" style="color:white">credit_card</i>
                                    <input id="cpf" type="text" style="color:white" class="validate" name="cpf">
                                    <label style="color:white" for="cpf">CPF (Apenas números)</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s5">
                                    <i class="large material-icons prefix" style="color:white">local_phone</i>
                                    <input id="name" type="text" style="color:white" class="validate" name="phone">
                                    <label style="color:white" for="name">Telefone (Apenas números)</label>
                                </div>
                                <div class="input-field col s5 offset-s1">
                                    <i class="large material-icons prefix" style="color:white">email</i>
                                    <input id="cpf" type="email" style="color:white" class="validate" name="email">
                                    <label style="color:white" for="cpf">Email</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s5">
                                    <i class="large material-icons prefix" style="color:white">vpn_key</i>
                                    <input id="name" type="password" style="color:white" class="validate" name="password">
                                    <label style="color:white" for="name">Senha</label>
                                </div>
                                <div class="input-field col s5 offset-s1">
                                    <i class="large material-icons prefix" style="color:white">vpn_key</i>
                                    <input id="cpf" type="password" style="color:white" class="validate" name="confpassword">
                                    <label style="color:white" for="cpf">Confirmar Senha</label>
                                </div>
                            </div>

                        </div>
                        <div class="card-action center-align">
                            <button type="submit" class="waves-effect waves-light waves-blue btn">Confirmar</button>
                        </div>
                    </form>
                    <?php include "../Control/signInControl.php"; ?>
                </div>
            </div>
        </div>
    </body>

</html>