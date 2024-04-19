<?php 
class Cuenta {
    private $titular;

    private $cantidad;

    /**
     * Constructor.
     * @param $titular
     * @param $cantidad
     */
    public function __construct($titular, $cantidad=15)
    {
        $this->titular = $titular;
        $this->cantidad = $cantidad;
    }
    public function ingresar($cantidad){
        if($cantidad>0)
        {
            //  $this->cantidad = $this->cantidad+$cantidad;
             $this->cantidad += $cantidad;
        } 

    } //end ingresar
    public function retirar($cantidad){
        $saldoAux= $this->cantidad-$cantidad 
        if ($saldoAux<0){
            $this->cantidad=0;
        } else {
            $this->cantidad= $saldoAux;
        }
    }

    public function retirar2($cantidad){
        
        $saldoAux= $this->cantidad-$cantidad 
        if ($saldoAux>=0){
            $this->cantidad= $saldoAux;
        } else {
            $this->cantidad=0;
        }
    }

   

    
    function __tostring($titular,$cantidad){
        $info = "titular:"; 
        $info .= $this->titular;
        $info .= "cantidad"; 
        $info .= $this->cantidad;
        // $info =  info . $this->titular;
        return $info;


}

    /**
     * Get the value of titular
     */
    public function getTitular()
    {
        return $this->titular;
    }

    /**
     * Set the value of titular
     */
    public function setTitular($titular): self
    {
        $this->titular = $titular;

        return $this;
    }

    /**
     * Get the value of cantidad
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set the value of cantidad
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }
}

