<?php
require_once('Calculo/Calculadora.php');
use Calculo\Calculadora; 
class AplicacaoCalculadora { 
    public static function executar() {
        try {
            $calculadora = new Calculadora(2, 3, -5, 0);
            echo("Resultado da soma ou subtracao: " .$calculadora->somarOuSubtrair(). "\n");
            try{
                echo("Resultado da divisao: " .$calculadora->dividir(). "\n");
            } catch(Exception $e) {
                echo $e->getMessage()."\n";
            }
            echo("Resultado da multiplicacao: " .$calculadora->multiplicar(). "\n");
        }catch(TypeError $e) {
            echo $e->getMessage()."\n";
        } catch(Exception $e) {
            echo $e->getMessage()."\n";
        }
    }
}
AplicacaoCalculadora::executar();
?>