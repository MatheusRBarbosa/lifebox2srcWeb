<!DOCTYPE html>
<html lang="en">
  <?php include "head.html";?>

  <body bgcolor="#e3f2fd">

    <nav class="nav-extended blue">
        <div class="nav-wrapper">
          <?php include "../Control/centralControl.php";?>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="central.php?sair=sair">Sair</a></li>
            <?php include "../Control/logOutControl.php"; ?>
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <li><a href="central.php?sair=sair">Sair</a></li>
          </ul>
          </div>
          <div class="nav-content">
            <ul class="tabs tabs-transparent">
              <li class="tab"><a class="active" href="#monitoramento">Monitoramento</a></li>
              <li class="tab"><a href="#identificacao">Identificação</a></li>
              <li class="tab"><a href="#analise">Análise</a></li>
            </ul>
          </div>
      </nav>
      <div id="monitoramento" class="col s12"><?php include "monitora.php";?></center></div>
      <div id="identificacao" class="col s12"><?php include "identificacao.php";?></center></div>
      <div id="analise" class="col s12"><?php include "analise.php";?></div>

</body>

</html>