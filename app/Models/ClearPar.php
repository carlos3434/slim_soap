<?php 
/**
* 
*/
class ClearPar
{
    protected $parentesis=['(',')'];
    protected $par='()';
    /**
     * 
     * El algoritmo debe eliminar todos los paréntesis que no tienen pareja.
     * Finalmente devolver la nueva cadena.
     */
    public function build($cadena){
        $nuevaCadena='';
        for($i=0;$i<strlen($cadena);$i++){
            if (!$this->validarParentesis($cadena[$i])) {
                return "cadena no valida";
            }
            if ($i==0) continue;
            $aEvaluar = $cadena[$i-1].$cadena[$i];

            if ($aEvaluar =='()') {
                $nuevaCadena.=$aEvaluar;
            }
        }
        return $nuevaCadena;
    }
    public function validarParentesis($word){
        if (in_array($word, $this->parentesis )) {
            return true;
        }
    }
}

$class = new ClearPar();
var_dump( $class->build("()())()") );
var_dump( $class->build("()(()") );
var_dump( $class->build(")(") );
var_dump( $class->build("((()") );