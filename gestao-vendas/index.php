<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <?php 
        include "funcoes/fprodutos.php"
    ?>
    <title>Cadastro de Produtos</title>
</head>

<body class="container-fluid">
    <h3>Cadastro de Produtos</h3>
    <br>
    <?php
    error_reporting(1);
    if($_POST != NULL){
        $hova = new Conexoes;
        //$condb = $hova->ConectarDB();
        $id = $_POST['id'];
        $linha = $hova->Consultar($id);
    }
    ?>
    <form action="index.php" method="POST">
        <div class="row">
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

            <div class="col-md-6 col-sm-12">
                <button class="btn btn-primary w-100">Cadastrar</button>
            </div>
            <div class="col-md-6 col-sm-12">
                <button type="submit" class="btn btn-primary w-100">Consultar</button>
            </div>

        </div>
        <br>
    </form>

    <div clas="row">
        <div class="col-md-12 col-md-12">
            <table class="table table-bordered table-striped">
                <thead>
                    <th>Id</th>
                    <th>Descricao</th>
                    <th>Estoque</th>
                    <th>Unidade</th>
                    <th>Preço</th>
                    <th>Custo</th>
                </thead>
                <tbody>
                    <?php         
                    $hov = new Conexoes();
                    $row  = $hov->ConsultarToTable();
                    while($row->fetch_assoc()){?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['descricao'];?></td>
                        <td><?php echo $row['unidade'];?></td>
                        <td><?php echo $row['estoque'];?></td>
                        <td><?php echo $row['preco'];?></td>
                        <td><?php echo $row['custo'];?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>