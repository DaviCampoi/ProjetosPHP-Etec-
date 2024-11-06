<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
 
    <title>Index</title>
</head>
<body>
    
<h3>
Aula - 14 - 03 - 2022

<br> 
<?php echo 'aula 14 - 03 - 2022';?>

</h3>
<input type = "text"value='etec dsss'>
<input  type = "text"value="'<?php echo 'etec dsss'?>">

<?php $nome = 'davi';
$ra = '10001';
$rg = '1112222';
$email= ' sufuha@gg.ez';
?>
<h3>
    cadastro de alunos
</h3>
<br>
<label for="nome">nome:</label> 
<input type="text" name="nome" id="nome"value = "<?php echo $nome;?>"> 
<br>
<label for="ra">ra:</label> 
<input type="text" name="ra" id="ra"value = "<?php echo $ra;?>"> 
<br>
<label for="rg">rg:</label> 
<input type="text" name="rg" id="rg"value = "<?php echo $rg;?>"> 
<label for="email">email:</label> 
<input type="text" name="email" id="email"value = "<?php echo $email;?>"> 
<button>salvar</button>
<button name="btnsalvar" id = "btnsalvar"> salvar</button>
</body>
</html>