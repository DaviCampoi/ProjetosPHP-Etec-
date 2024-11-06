<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Calculadora</h3>
    <br>
    <form action="somar.php" method="get">
<label for="n1">Numero 1: &nbsp;</label>
<input type="number" name="n1" id="n1">
<br>
<label for="n2">Numero 2: &nbsp;</label>
<input type="number" name="n2" id="n2">
<br>
<button type="submit" >Somar</button>
<br>
<button type="submit" formaction="subtrair.php">Subtrair</button>
<br>
<button type="submit"formaction="multiplicar.php" >Multiplicar</button>
<br>
<button type="submit" formaction="dividir.php">Dividir</button>
</form>







</body>
</html>