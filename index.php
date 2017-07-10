<?php
    $caminho = "img/portfolio/";
    $img = glob($caminho.'*.jpg');
    $contador = count($img);

    $loopHorizontal = 5;
    $cont = 1;
?>
<table>
       <tr>
    <?php
    for($i = 0; $i < $contador; $i++){
        if($cont < $loopHorizontal){
    ?>
        <td><img src="<?php echo $img[$i]; ?>"  /></td>
        <?php
        }
        elseif($cont = $loopHorizontal){
        ?>
            <td><img src="<?php echo $img[$i]; ?>" /></td>
            </tr>
            <tr>
            <?php
            $cont = 0;
        }
        $cont++;
    }
    ?>
    </tr>
<table>
</body>
