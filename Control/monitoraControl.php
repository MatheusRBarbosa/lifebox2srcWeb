<script>
    function getRandomArbitrary(min, max) {
        return Math.random() * (max - min) + min;
    }

    setInterval(function () {
        var t1 = getRandomArbitrary(1,30);//Trocar pelos valores reais
        var t2 = getRandomArbitrary(1,30);
        document.getElementById("monitoraT1").innerHTML = t1;
        document.getElementById("monitoraT2").innerHTML = t2;
    }, 1000);
    //Não está funcionando
    var f = 'C:/ArquivosJava/NomeCertificado.txt';    
    var rl = readline.createInterface({
        input : fs.createReadStream(f),
        output: process.stdout,
        terminal: false
  })
  rl.on('line',function(line){
       console.log(line) // aqui podes fazer o que precisas com cada linha
  })
</script>