<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get">
        <div>
            <h2>Primeiro exercicio</h2>
            Informe um número: <input type="number" name="numeroInfo" placeholder="Número" />


            <h2>Segundo exercicio</h2>
            Informe o raio: <input type="number" name="numeroRaio" placeholder="Raio" />


            <h2>Terceiro exercicio</h2>
            <div>
                Informe dois valores: <input type="number" name="numero1" placeholder="Primeiro número" />
                <input type="number" name="numero2" placeholder="Segundo número" />
            </div>
            <div>
                <h2>Quarto exercicio</h2>

                Informe as suas notas:
                <input type="number" name="nota1" placeholder="Primeira nota" />
                <input type="number" name="nota2" placeholder="Segunda nota" />
                <input type="number" name="nota3" placeholder="Terceira nota" />
            </div>
            <div>
                <h2>Quinto exercicio</h2>
                Informe o valor a ser convertido para CM:
                <input type="number" name="convertNumber" placeholder="Informe o valor em metros" />
            </div>
            <div>
                <h2>Sexto exercicio</h2>
                Informe a altura ou largura do quadrado:
                <input type="number" name="quadrado" placeholder="Altura ou largura do quadrado" />
            </div>
            <div>
                <h2>Sétimo exercicio</h2>
                Informe seu valor por hora e horas trabalhadas:
                <input type="number" name="valorHora" placeholder="Valor da sua hora" />
                <input type="number" name="horasTrab" placeholder="Horas trabalhadas no mês" />
            </div>
        </div>
        <input type="submit">
    </form>

    <?php
    $numeroInfo = $_GET['numeroInfo'];
    if ($numeroInfo) {
        echo "O número informado foi: " . $numeroInfo . "<br>";
    }

    $numeroRaio = (float)$_GET['numeroRaio'];
    $perimetro = M_PI * pow($numeroRaio, 2);
    $area = 2 * M_PI * $numeroRaio;
    if ($numeroRaio) {
        echo "O perimetro e a area do seu redondo é: " . number_format($perimetro, 2, ",", ".") . " - " . number_format($area, 2, ",", ".") . "<br>";
    }

    $numero1 = $_GET["numero1"] ?? 0;
    $numero2 = $_GET["numero2"] ?? 0;
    if ($numero1 && $numero2) {
        echo "A soma dos dois números: " . ($numero1 + $numero2) . "<br>";
    }

    $media = number_format(((int)$_GET["nota1"] + (int)$_GET["nota2"] + (int)$_GET["nota3"]) / 3, 2, ",", ".");
    if ($media) {
        echo "Sua média é: {$media} <br>";
    }

    $convertNumber = (float)$_GET["convertNumber"] * 100;
    if ($convertNumber) {
        echo "A conversão de metros para centimentros: " . $convertNumber . "<br>";
    }

    $areaQuadrada = ((float)$_GET["quadrado"] * (float)$_GET["quadrado"]) * 2;
    if ($areaQuadrada) {
        echo "A area ao quadrada do seu quadrado é: " . $areaQuadrada . "<br>";
    }

    $valorHrMes = (float)$_GET["valorHora"] * (float)$_GET["horasTrab"];
    if($valorHrMes) {
        echo "Seu valor de horas trabalhadas: " . $valorHrMes;
    }

    echo "<h1>Funções Uteis</h1>";
    echo "<br>potencia: " . pow($areaQuadrada, 2);
    echo "<br>Modulo Abs: " . abs($areaQuadrada);
    echo "<br>Raiz Quadrada: " . sqrt($areaQuadrada);

    echo "<br>Arrendodar: " . round($areaQuadrada);
    echo "<br>Arrendodar para cima: " . ceil($areaQuadrada);
    echo "<br>Arrendodar para baixo: " . floor($areaQuadrada);
    echo "<br>Valor inteiro: " . intval($areaQuadrada);

    //Declarar uma varivel apenas adicionamos $
    //caso adicionamos dois $$ e chamos ja uma variavel declarada ele iria nomear essa nova variavel
    //com o valor atribuido nela em primeiro e adcionar um novo valor caso esteja instanciado
    //exemplo:
    $teste = "test-1";
    $$teste = "teste-2";

    echo $teste;
    echo $$teste;
    


    ?>

</body>

</html>