<nav style="background-color: #0288d1;">
    <div class="nav-wrapper">

        <ul id="nav-mobile" class="hide-on-med-and-down">
            <li>
                <label style="color:white; font-size:25; padding-right: 15px; padding-left: 15px"><?php echo "Bem-vindo, ".$_SESSION['nome'];?></label>
            </li>
            <li>
                <a href="monitoramento.php">Monitoramento</a>
            </li>
            <li>
                <a href="identificacao.php">Identificação</a>
            </li>
            <li>
                <a href="analise.php">Análise</a>
            </li>
           
        </ul>
        <ul id="nav-mobile" class="hide-on-med-and-down right">
            <li>
                <a href="?sair=1" class="right">Sair</a>
                <?php 
                    if(isset($_GET['sair']) && $_GET['sair'] == 1){
                        include "../Control/logOutControl.php";
                    }
                ?>
            </li>
        </ul>
    </div>
</nav>