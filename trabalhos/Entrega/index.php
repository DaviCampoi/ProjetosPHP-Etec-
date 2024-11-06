<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="SimpleGrid/simple-grid.min.css" rel="stylesheet">

       <style> body { 
           
         background-image: url(img/katana.webp);
           background-size: cover;
           
       } 
       
       .caixa{   

width: 500px ;
height: 600px;
background-color:black ;
border-radius: 30px;
margin:auto;
opacity: .75;
            }
                   
     input{ 

color: black;


     }
     
       </style>
    <title>Cadastra-se</title>
    












</head>
<body>

<b>

<div class="caixa">


<center>
<h3 style="font-family:cursive;color:white;">Cadastro para vestibular</h3>    
<br>


<form action="cadastro.php" method="post" name="formprincipal" id="formprincipal">

<label for="nome" style="font-family:cursive; color:white;" > Nome: </label>
<input type="text" name="nome" id="nome" maxlength="40" style="font-family:cursive;" placeholder="Digite seu nome"> 
<br>
<br>


<label style="font-family:cursive;color:white;"> Curso: </label>
<select name="curso" id="curso">
    <option style="font-family:cursive;">Selecione seu curso</option>
    <option value="Medicina" style="font-family:cursive;">Medicina</option>
    <option value="informática" style="font-family:cursive;">Informática</option>
    <option value="Enfermagem" style="font-family:cursive;">Enfermagem</option>
    <option value="Matemática" style="font-family:cursive;">Matemática</option>
</select>
<br>
<br>

<label for="RG" style="font-family:cursive;color:white;"> RG: </label>
<input type="text" name="RG" id="RG" maxlength="40" style="font-family:cursive;" placeholder="Digite seu RG"> 
<br>
<br>

<label for="Endereço" style="font-family:cursive;color:white;"> Endereço:</label>
<input type="text" name="Endereço" id="Endereço" maxlength="40" style="font-family:cursive;" placeholder="Digite seu endereço"> 
<br>
<br>

<label for="Cidade" style="font-family:cursive;color:white;"> Cidade: </label>
<input type="text" name="Cidade" id="Cidade" style="font-family:cursive;" maxlength="40"placeholder="Digite sua cidade">
<br>
<br>

<label for="Bairro" style="font-family:cursive;color:white;"> Bairro: </label>
<input type="text" name="Bairro" id="Bairro" maxlength="40"style="font-family:cursive;" placeholder="Digite seu bairro">
<br>
<br>

<label for="estado" style="font-family:cursive;color:white;"> Estado: </label>
<input type="text" name="estado" id="estado" maxlength="40" style="font-family:cursive;" placeholder="Digite seu estado"> 
<br>
<br>

<label for="CEP" style="font-family:cursive;color:white;"> CEP: </label>
<input type="text" name="CEP" id="CEP" maxlength="40" style="font-family:cursive;" placeholder="Digite seu CEP"> 
<br>
<br>

<label for="data"style="font-family:cursive;color:white;"> Data do cadastro: </label>
<input style="font-family:cursive;" type="date" name="data" id="data" >
<br>
<br>

<input  style="background-image: url(img/katana.webp);    font-family:cursive ; color:white  " type="submit" action="submit" name="Enviar" id="Enviar" value="Enviar" >
</form>
</b>
</center>
</div>








</body>
</html>