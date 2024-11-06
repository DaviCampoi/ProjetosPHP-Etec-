<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-08">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    
    <style> body { 
           
           background-image: url(img/katana.webp);
             background-size: cover;
             
         } 
         
         .caixa{   
  
  width: 500px ;
  height: 600px;
  background-color:black ;;
  border-radius: 30px;
  margin:auto;
  opacity: .75;
              }
              
              input{ 

color: black;


     }
         
          p{

color: white;


          }    
              
         </style>
    
    
    <b>
    
    <title>Informações</title>
    
</head>
<body>
    
<div class="caixa">


<center>
    <br>

<h3 >Declaração</h3>

<?php 

$nome = $_POST['nome'];
$curso = $_POST['curso'];
$RG = $_POST['RG'];
$estado = $_POST['estado'];
$endereço = $_POST['Endereço'];
$Cidade = $_POST['Cidade'];
$Bairro = $_POST['Bairro'];
$CEP = $_POST['CEP'];
$data = $_POST['data'];

echo  "<p>Eu, " . $nome . " portador do rg: " . $RG  . ", residente em " . $endereço . ", " . $Cidade  . ", " . $Bairro . ", " . $CEP . ", solicito a incrição no curso de " . $curso  .'<br>'. '<br>' . "<p>"; 



echo "Data do cadastro: " . $data ; 

?>







<br>
<br>
<br>
<br>
<br>
<br>
<br><br><br><br><br>
<p> ◈ ____________________________________   <p>

</center>


</div>

            </b>


</body>
</html>