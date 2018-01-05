<!-- Sctipt JavaScript do SELECT -->
<script type="text/javascript">
    window.onload=function(){
        $(document).ready(function() {
                $('select').material_select();
        });
    }
</script>

<?php
    /*Codigo responsavel por mostrar as opções no botao dropdown de identificacao*/
    require_once "../Model/MySqlClass.php";

    $sql = New MySql();
    $idUnico = array();
    $ids = $sql->Select( "SELECT id FROM templog");
    $idUnico[] = $ids[0];

    /*For para nao pegar id's repetidos*/
    for($i=1; $i<count($ids); $i++){
        $equalFlag = 1;
        for($j=0; $j<count($idUnico); $j++){
            if($ids[$i] == $idUnico[$j]){
                $equalFlag = 0;
                break;
            }
        }
        if($equalFlag){
            $idUnico[] = $ids[$i];
        }
    }

    echo "<select name='id'>";
    echo "<option value='' disabled selected>Escolha a identificação do teste</option>";
    foreach($idUnico as $id){
        echo "<option value='{$id['id']}'><p style=''>{$id['id']}</p></option>";
    }
    echo "</select>";
    echo "<label style='color:white'>Identificação do teste</label>";
?>