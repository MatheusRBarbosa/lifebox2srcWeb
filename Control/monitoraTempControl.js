/*Codigo que atualiza dinamicamente os valores na tela*/
var varTemp = setInterval(atualizador, 1000);

function atualizador(){
    pegaValor("../Control/geraTempControl.php?t1", "monitoraT1");
    pegaValor("../Control/geraTempControl.php?t2", "monitoraT2");
    pegaValor("../Control/geraHistorico.php", "histTemp");

}

function pegaValor(conteudoHTML, id){
    $.ajax({
        url : conteudoHTML,
        cache: false,
        success : function(result){
            document.getElementById(id).innerHTML = result; 
        }
    })
}