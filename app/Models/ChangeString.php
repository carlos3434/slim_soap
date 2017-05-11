<?php 
/**
 * 
 */
class ChangeString  
{
    protected $abc='abcdefghijklmnñopqrstuvwxyza';
    public function mayus()
    {
        return strtoupper($this->abc);
    }
    public function buscar($busqueda, $cadena){
        $pos = strpos($busqueda, $cadena);
        if ($pos!==false) {
            return substr($busqueda, $pos+1,1);
        }
        return false;
    }
    /**
     * 
     */
    public function build($cadena){
        $resultado='';
        for($i=0;$i<strlen($cadena);$i++){
            if ($this->buscar($this->abc, $cadena[$i])) {
                $resultado .= $this->buscar($this->abc, $cadena[$i]); continue;
            }
            if ($this->buscar($this->mayus(), $cadena[$i])) {
                $resultado .= $this->buscar($this->mayus(), $cadena[$i]);  continue;
            }
            $resultado .= $cadena[$i];
        }
        return $resultado;
    }
}

$class = new ChangeString();
var_dump( $class->build("123 abcd*3"));
var_dump( $class->build("**Casa 52"));
var_dump( $class->build("**Casa 52Z"));