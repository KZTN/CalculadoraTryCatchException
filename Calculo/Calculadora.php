<?php
namespace Calculo;

class Calculadora {
    private $numeros;
    public function __construct(int... $numeros) {
        $this->numeros  = $numeros;
    } 
    public function somarOuSubtrair() : int {
        $total = 0;
        foreach($this->numeros as $n) {
            $total+=$n;
        }
        return $total;
    }
    public function multiplicar() : int {
        $total = 1;
        foreach ($this->numeros as $n) {
            $total*=$n;
        }
        return $total;
    }
    public function dividir() : float {
        $total = $this->numeros[0];
        for ($i=1; $i<count($this->numeros) ; $i++) { 
            if($this->numeros[$i] == 0) {
                throw new \Exception("Divisão por zero não permitida");
            } else {
                $total+=$this->numeros[$i];
            }

        }
        return $total;
    }
}

?>