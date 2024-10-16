<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
</head>
<body>
    <?php include 'funcoes.php'; ?>

    <form method="POST">
        <label>Primeiro Número: </label>
        <input type="text" name="num1" id="num1"/><br><br>

        <label>Segundo Número: </label>
        <input type="text" name="num2" id="num2"/><br><br>

        <button>Calcular
            <?php
                $num1 = $_POST['num1'];//Coletar os dados 
                $num2 = $_POST['num2'];
            ?>
        </button><br><br>

        <textarea rows="10" cols="40" readonly fixed>
            <?php
                echo "\nA soma de ".$num1." com ".$num2." é: ".somar($num1,$num2);
                echo "\nA subtração de ".$num1." com ".$num2." é: ".subtrair($num1,$num2);
                echo "\nA multiplicação de ".$num1." com ".$num2. " é: ".multiplicar($num1,$num2);
                echo "\nA divisão de ".$num1." com ".$num2." é: ".dividir($num1,$num2);
                echo "\nA sequência de números entre ".$num1." e ".$num2." é: ".mostrarNumeros($num1,$num2);
            ?>
        </textarea>
    <form>
</body>
</html>