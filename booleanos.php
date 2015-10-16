<?php
 //Mostrar todos los errores
    error_reporting(E_ALL); //informar de todos los errores
    ini_set('display_errors', 1) //mostrarlos por pantalla
 ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table>
            <?php
           
     /*     $entero = 1;
            $cadena = "1";
            if($entero == $cadena){
                    echo "iguales == <br>";
                    
            }else{
                    echo "no iguales == <br>";
                }
                //Para ver en que posición pone lo que le añadamos
                $coches = array();
                $coches["primero"] = "vw";
                $coches["segundo"] = "opel";
                $coches[] = 1;
                $coches[] = "seat";
                var_dump($coches); //Instrucción para depurar
      */
            $coches = [
            "primero" => "seat",
            "segundo" => "opel"];
            $coches["tercero"] = "vw";
            $coches[] = "ford";
             foreach ($coches as $valor) {
                 echo $valor."<br />";
             }
             echo "<hr>";
              foreach ($coches as $indice => $valor) {
                  echo "$valor esta en la posicion $indice<br />";
              }
              $tamano = count($coches);
              for($i=0; $i<tamano; $i++){
                  echo "$coches[$i]<br/>";
              }
              $cad1 = "hola";
              $cad2 = "mundo";
              echo $cad1 . " " . $cad2. "<br />";
              echo "$cad1 $cad2 <br/>";
              
              function suma($a, $b, $c=0){ // si no llega el parametro C lo iguala a 0
                  return $a+$b+$c;
              }
              echo suma(1,2)."<br />";
              echo suma(1,2,3)."<br />";
              
            ?>
        </table>
    </body>
</html>
