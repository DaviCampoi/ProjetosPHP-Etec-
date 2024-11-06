<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicar</title>
</head>
<body>
    <h3>Multiplicar</h3>
    <br>
    <?php                                                          
    
    $n1=$_GET["n1"];
    $n2=$_GET["n2"];
    $resultado=$n1*$n2;
    echo 'resultado:' . $resultado;
    
    
    
    
    ?>

</body>
</html>