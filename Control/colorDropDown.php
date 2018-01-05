<!-- Sctipt JavaScript do SELECT -->
<script type="text/javascript">
    window.onload=function(){
        $(document).ready(function() {
                $('select').material_select();
        });
    }
</script>

<?php
/*Esse codigo serve para gerar o dropdown com as possiveis cores da caixa*/
    $colors = array("Vermelho", "Rosa", "Roxo", "Indigo", "Azul", "Ciano", "Verde", "Amarelo", "Laranja", "Marrom", "Cinza", "Preto", "Branco");
    $materialColor = array("red", "pink", "purple", "indigo", "blue", "cyan", "green", "yellow", "orange", "brown", "grey", "black", "white");
    
    echo "<select name='boxColor'>";
    echo "<option value='' disabled selected>Escolha a cor da caixa</option>";
    for($i=0;$i<count($colors);$i++){
        echo "<option value='{$colors[$i]}'><p style=''>{$colors[$i]}</p></option>";
    }
    echo "</select>";
    echo "<label style='color:white'>Cor da tarja</label>";
    
?>