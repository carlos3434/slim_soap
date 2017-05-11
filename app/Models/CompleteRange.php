<?php 
/**
* 
*/
class CompleteRange
{
    /**
     * 
     */
    public function build($numeros=[]){
        $numerosCompletos=[];
        //primero ordenar
        sort($numeros);
        for($i=1;$i<count($numeros);$i++){
            $numeroAnteriorMasUno= $numeros[$i-1]+1;
            $numeroActual = $numeros[$i];
            if ($numeroAnteriorMasUno!=$numeroActual) {
                array_push($numeros,$numeroAnteriorMasUno);
                sort($numeros);
            }
        }
        return $numeros;
    }
}

$class = new CompleteRange();
var_dump( $class->build([1, 2, 4, 5])  );
var_dump( $class->build([2, 4, 9])  );
var_dump( $class->build([55, 58, 60])  );