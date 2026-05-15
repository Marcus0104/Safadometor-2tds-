<?php
$dia = $_REQUEST['campoDia'];
$mes = $_REQUEST['campoMes'];
$ano = $_REQUEST['campoAno'];

function somatorio(int $n)
{

    $soma = 0;

    for ($i = 1; $i <= $n; $i++) {

        $soma += $i;
    }

    return $soma;
}
function somaDigitos(int $numero)
{

    $soma = 0;

    while ($numero > 0) {

        $digitos = $numero % 10;
        $soma += $digitos;
        $numero = $numero / 10;

    }

    return $soma;
}
function Safadometro(int $dia, int $mes, int $ano)
{
    $safadeza =  somatorio($mes) + somaDigitos($ano) * (50 - $dia) / 10;
    $anjeza =  100 - $safadeza;
    
    return [
        'safadeza' => $safadeza,
        'anjeza' => $anjeza
    ];

}
$resultado = Safadometro((int)$dia, (int)$mes, (int)$ano);
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h2>
    <?php
        print("Sua porcentagem de safado é " . $resultado['safadeza'] . "%😈<br>");
        print("Sua porcentagem de anjeza é " . $resultado['anjeza'] . "%😇<br>");
        ?>
    </h2>
</body>
</html>
