<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <?php 
        include "CadClientes/funcoes/fprodutos.php"
    ?>
    <title>Cadastro de Clientes</title>
    <script>
        $(document).ready(function () {
            $('#cabecalho').load('cabecalho.php');
            $('#rodape').load('rodape.php');
        });
    </script>
</head>

<body>
    <header id="cabecalho" name="cabecalho" style="margin:0; padding:0; margin-bottom: 20px"></header>
    <div class="container" style="height:100vh">
    <h3>Cadastro de Produtos</h3>
    <br>
    <?php
    error_reporting(1);
    if($_POST != NULL){
        $servidor= 'carmine';
        $login= 'aluno';
        $senha= 'etec@147';
        $dbnome= '2dsa_pro_dbgestaovendas';
        $condb= new mysqli($servidor,$login, $senha, $dbnome);
        $op = $_POST['op'];
        if($op == 'C'){ 
            $isql = 'select * from clientes where id='.$id;
            $consulta=$condb-> query($isql);
            if($consulta->num_rows >0){
                $linha=$consulta->fetch_assoc();
            }
        }
        if($op == 'E'){
            $id=$_POST['id'];
            $isql = "delete from clientes where id = ". $id;
            $delete = $condb->query($isql);
            if($delete == true){
                echo "<script>alert('Exclusão realizado com sucesso')</script>";
            } else{
                echo "<script>alert('Falha na exclusão de dados')</script>";
            }
        }
        if($op == 'I'){
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $rg = $_POST['rg'];
            $email = $_POST['email'];
            $celular = $_POST['celular'];
            $isql="insert into clientes
            (nome, cpf, rg, email, celular)
            values
            ('" . $nome . "','" . $cpf . "','" . $rg . "','" . $email . "', '". $celular ."')";
            $cadastrar = $condb->query($isql);
            if($cadastrar == true){
                echo "<script>alert('Cadastro realizado com sucesso')</script>";
            } else{
                echo "<script>alert('Falha na inclusão de dados')</script>";
            }
        }
        if($op == 'A'){
            $id=$_POST['id'];
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $rg = $_POST['rg'];
            $email = $_POST['email'];
            $celular = $_POST['celular'];
            $isql = "update clientes set nome = '". $nome . "', cpf = '" . $cpf . "', celular = '". $celular . "', email = '" . $email . "', rg = '" . $rg .  "' where id = " . $id;
            $alterar = $condb->query($isql);
            if($alterar == true){
                echo "<script>alert('Alteração realizada com sucesso')</script>";
            } else{
                echo "<script>alert('Falha na alteração de dados')</script>";
            }
        }
    }
    
    ?>
    <form action="" method="POST">
        <div class="row">
            <input id="op" name="op" hidden>
            <div class="col-md-2 col-sm-12">
                <label for="id">ID:</label>
                <input class="form-control" type="text" name="id" id="id" value="<?php echo $linha['id'] ?>" />
            </div>
            <div class="col-md-10 col-sm-12">
                <label for="nome">Nome:</label>
                <input class="form-control" type="text" name="nome" id="nome" value="<?php echo $linha['nome'] ?>" />

            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-12">
                <label for="cpf">CPF:</label>
                <input class="form-control" type="text" name="cpf" id="cpf" value="<?php echo $linha['cpf'] ?>" />
            </div>
            <div class="col-md-6 col-sm-12">
                <label for="rg">RG:</label>
                <input class="form-control" type="text" name="rg" id="rg" value="<?php echo $linha['rg'] ?>" />
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-12">
                <label for="email">Email</label>
                <input class="form-control" type="text" name="email" id="email" value="<?php echo $linha['email'] ?>" />
            </div>
            <div class="col-md-6 col-sm-12">
                <label for="celular">Celular:</label>
                <input class="form-control" type="text" name="celular" id="celular"
                    value="<?php echo $linha['celular'] ?>" />
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-3 col-sm-12">
                <button class="btn btn-primary w-100" onclick="$('#op').prop('value','I');">Cadastrar</button>
            </div>

            <div class="col-md-3 col-sm-12">
                <button class="btn btn-primary w-100" onclick="$('#op').prop('value','A')">Alterar</button>
            </div>

            <div class="col-md-3 col-sm-12">
                <button class="btn btn-primary w-100" onclick="$('#op').prop('value','E')">Excluir</button>
            </div>

            <div class="col-md-3 col-sm-12">
                <button type="submit" class="btn btn-primary w-100"
                    onclick="$('#op').prop('value','C')">Consultar</button>
            </div>
        </div>
        <br>
    </form>

    <div class="row">
        <div class="col-md-12"  >
            <table class="table table-bordered table-striped">
                <thead>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Celular</th>
                    <th>Email</th>
                    <th>RG</th>
                    <th>CEP</th>
                    <th>Endereco</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>UF</th>
                    <th>Numero</th>
                    <th>Complemento</th>
                </thead>
                <tbody>
                    <?php         
                    $servidor= 'carmine';
                    $login= 'aluno';
                    $senha= 'etec@147';
                    $dbnome= '2dsa_pro_dbgestaovendas';
                    $condb= new mysqli($servidor,$login, $senha, $dbnome);
                    $isql = 'select * from clientes';
                    $consulta=$condb-> query($isql);
                    while($row = $consulta->fetch_assoc()){?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nome'];?></td>
                        <td><?php echo $row['cpf'];?></td>
                        <td><?php echo $row['celular'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['rg'];?></td>
                        <td><?php echo $row['cep'];?></td>
                        <td><?php echo $row['endereco'];?></td>
                        <td><?php echo $row['bairro'];?></td>
                        <td><?php echo $row['cidade'];?></td>
                        <td><?php echo $row['uf'];?></td>
                        <td><?php echo $row['numero'];?></td>
                        <td><?php echo $row['complemento'];?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    <footer name="rodape" id="rodape"></footer>
</body>

</html>