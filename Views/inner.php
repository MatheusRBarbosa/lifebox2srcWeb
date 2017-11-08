<html>
    <?php include "head.html";?>
    <body onload="innerTemp();">
        
        <script type="text/javascript">
            <?php 
                $r = rand(16,25);
            ?>
            function innerTemp(){
                //random = getRandomInt(16,25); //Entrada
                random = <?php $r;?>
                intervalo = 1000; //1s
                temperature.innerText = random;
                setTimeout('innerTemp();',intervalo);
            }
        </script>
        <div id='temperature'></div>
    </body>
</html>