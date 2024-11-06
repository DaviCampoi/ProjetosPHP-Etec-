<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir</title>
</head>
<body>
    <?php 

if($_POST != null ) {



session_start();
$nome=$_SESSION['nome'];
$celular=$_SESSION['celular'];
echo 'Nome: ' .  $_SESSION['nome'] . '<br>';
echo 'celular: ' . $_SESSION['celular'];

}



?>
</body>
</html>