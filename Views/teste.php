<!DOCTYPE html>
<html>
<body>

<select>
    <?php 
        $colors = array("Vermelho", "Rosa", "Roxo", "Indigo", "Azul", "Ciano", "Verde", "Amarelo", "Laranja", "Marrom", "Cinza", "Preto", "Branco");
        for($i=0;$i<count($colors);$i++){
            echo "<option value='{$colors[$i]}'>{$colors[$i]}</option>";
        }
    
    ?>
</select>
  
</body>
</html>
