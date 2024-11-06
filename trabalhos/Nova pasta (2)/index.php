<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia da semana</title>
</head>

<body>
<?php


$DIA=$_POST['DIA'];
Switch($DIA){
       
       case 1: 
        echo 'Domingo';
        break;

        case 2:
         echo 'Segunda-feira';
         break;

         case 3:
            echo 'Terça-fera';
            break;

            case 4:
                echo 'Quarta-feira';
                break;

                case 5:
                    echo 'Quinta-feira';
                    break;

                    case 6:
                        echo 'Sexta-feira';
                        break;
    
    default:
        echo 'Sábado';
        break;


}


?>
    <form action="index.php" method="POST">

<h3>Diada semana</h3>



</form>

</body>
</html>