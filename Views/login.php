<!DOCTYPE html>
<html lang="en">
    <?php include "head.html";?>

    <body bgcolor="#e3f2fd">

        <div class="row">
            <div class="col s4 offset-s4 vertical-align">
                <div class="card blue-grey darken-1 hoverable">
                    <form method="post">
                        <div class="row">
                            <div class="card-content center-align">
                                <span class="card-title" style="color:white"><h3>LIFEBOX</h3></span>
                                <div class="input-field">
                                    <i class="material-icons prefix" style="color:white">credit_card</i>
                                    <input id="login" type="text" style="color:white" class="validate" name="login">
                                    <label for="last_name" style="color:white">CPF</label>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix" style="color:white">vpn_key</i>
                                    <input id="password" type="password" style="color:white" class="validate" name="password">
                                    <label for="password" style="color:white">Senha</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card-action center-align">
                                <button type="submit" class="waves-effect waves-light waves-blue btn margin3">Login</button>
                                <a href="cadastrar.php" class="waves-effect waves-light waves-blue btn margin3">Cadastrar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <?php include "../Control/logInControl.php"; ?>
</html>