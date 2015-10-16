<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

      <!--Es la menos usada (no recomendad) -->
        <table>
        <?php
            for($i=1; $i<=10; $i++ ){
                echo '<tr>';
                for($j=1; $j<=10; $j++){
                    echo '<td>'.$i*$j.'</td>';
            }
            echo '<tr>';
            }
        ?>
       </table>
        
        <!--Recomendada-->
        <table>
          <?php for($i=1; $i<=10; $i++){?>
            <tr>
                <?php for ($j=1; $j<=10; $j++){ ?>
                <td><?php echo $i*$j;?></td>
                <?php }?>
            </tr>
          <?php }?>            
        </table>
        
         <!--Alternativa-->
        <table>
          <?php for($i=1; $i<=10; $i++):?>
            <tr>
                <?php for ($j=1; $j<=10; $j++): ?>
                <td><?= $i*$j;?></td>
                <?php endfor;?>
            </tr>
          <?php endfor;?>            
        </table>
        
    </body>
</html>
