<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios</title>
</head>

<body>
    <form method="get">
        <div>
            <p>
                <stronger>1:</stronger>
                <br> Informe dois número
                <input name="numero1" type="number" placeholder="Informe o primeiro numero" />
                <input name="numero2" type="number" placeholder="Informe o segundo numero" />
            </p>
        </div>
        <input type="submit" />
    </form>
    <?php 
    // 1
    if($_GET["numero1"] > $_GET["numero2"]) {
        echo "O numero {$_GET["numero1"]} é maior que o número {$_GET["numero2"]}";
    } else {
        echo "O numero {$_GET["numero2"]} é maior que o número {$_GET["numero1"]}";
    }
?>
</body>

</html>