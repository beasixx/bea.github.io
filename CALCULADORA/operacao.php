<?php
class Operacao {
    public function somar($a, $b) {
        return $a + $b;
    }

    public function subtrair($a, $b) {
        return $a - $b;
    }

    public function multiplicar($a, $b) {
        return $a * $b;
    }

    public function dividir($a, $b) {
        if ($b == 0) {
            return "Erro: Divisão por zero!";
        }
        return $a / $b;
    }
}
?>