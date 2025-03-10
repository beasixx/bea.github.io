<?php
require_once 'Operacao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $operacao = $_POST['operacao'];

    $calc = new Operacao();

    switch ($operacao) {
        case 'somar':
            $resultado = $calc->somar($valor1, $valor2);
            break;
        case 'subtrair':
            $resultado = $calc->subtrair($valor1, $valor2);
            break;
        case 'multiplicar':
            $resultado = $calc->multiplicar($valor1, $valor2);
            break;
        case 'dividir':
            $resultado = $calc->dividir($valor1, $valor2);
            break;
        default:
            $resultado = "Operação inválida!";
            break;
    }

    echo "<h1>Resultado: $resultado</h1>";
    echo "<a href='formulario.html'>Voltar</a>";
}
?>