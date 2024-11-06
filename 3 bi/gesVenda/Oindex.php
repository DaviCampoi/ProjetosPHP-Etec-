<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script> 
<title>Cadastro de Produtos</title>
</head>

<body class="container-fluid">
    <?php
    error_reporting(0);
    if($_POST != null){

        $id=$_POST['id'];
        $servidor= 'carmine';
        $login= 'aluno';
        $senha= 'etec@147';
        $dbnome= '2dsa_pro_dbgestaovendas';
        $condb= new mysqli($servidor,$login, $senha, $dbnome);
        $op= $_POST['op'];
        if($op== 'C'){
        $isql = 'select * from produtos where id='.$id;
        $consulta=$condb-> query($isql);
        if($consulta->num_rows >0){

            $linha=$consulta->fetch_assoc();
        }
        else{
            echo"<script>alert('ID não cadastrado.')</script>";
        }
    }
    if($op=='I'){
        $descricao=$_POST['descricao'];
        $preco=$_POST['preco'];
        $custo=$_POST['custo'];
        $estoque=$_POST['estoque'];
        $unidade=$_POST['unidade'];

        $isql='insert into to produtos (descricao, preco, estoque, unidade)
        values (' . $descricao . ',' . $preco . ',' .$custo . ',' . $estoque . ',' . $unidade .')';
        $cadastar=$conb ->query($isql);
        if($cadastar==true){
            echo "<script>alert('cadastro realizado com sucesso');</script>";
        }
        else{
            echo "<script>alert('inclusão não realizada');</script>";
        }
    }
}
    ?>
<h3>Cadastro de Produtos</h3>
<br>
<form action="index.php" method="POST">
    <input id="op" name="op" /> 
    <div class="row">
        <div class="col-md-2 col-sm-12">
            <label for="id">ID:</label>
            <input class="form-control" type="text" name="id" id="id"value="<?php echo $linha['id']; ?>"/>
        </div>
        <div class="col-md-10 col-sm-12">
            <label for="descricao">Descrição:</label>
            <input class="form-control" type="text" name="descricao" id="descricao"
            value="<?php echo $linha['descricao']; ?>"/>

        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-sm-12">
            <label for="estoque">Estoque:</label>
            <input class="form-control" type="text" name="estoque" id="estoque"value="<?php echo $linha['estoque']; ?>"/>
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="unidade">Unidade:</label>
            <input class="form-control" type="text" name="unidade" id="unidade"value="<?php echo $linha['unidade']; ?>"/>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-sm-12">
            <label for="preco">Preço:</label>
            <input class="form-control" type="text" name="preco" id="preco"value="<?php echo $linha['preco']; ?>"/>
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="custo">Custo:</label>
            <input class="form-control" type="text" name="custo" id="custo"value="<?php echo $linha['custo']; ?>"/>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-md-3 col-sm-12">
            <button class="btn btn-primary w-100" onclick="('#op'). prop('value', 'I');">Cadastrar</button>
        </div>

        <div class="col-md-3 col-sm-12">
            <button class="btn btn-primary w-100" onclick="('#op'). prop('value', 'A');">Alterar</button>
        </div>

        <div class="col-md-3 col-sm-12">
            <button class="btn btn-primary w-100" onclick="('#op'). prop('value', 'E');">Excluir</button>
        </div>

        <div class="col-md-3 col-sm-12">
            <button type="submit" class="btn btn-primary w-100" onclick="('#op'). prop('value', 'C');">Consultar</button>
        </div>

    </div>
    <br>
    </form>

  <div class="row">
     
      <?php
      $servidor= 'carmine';
      $login= 'aluno';
      $senha= 'etec@147';
      $dbnome= '2dsa_pro_dbgestaovendas';
      $condb= new mysqli($servidor,$login, $senha, $dbnome);
      $isql = 'select * from produtos order by descricao';
      $consulta=$condb-> query($isql);
     while($row=$consulta->fetch_assoc()){
     echo $row['id'] . " - " . $row['descricao'] . '<br>';
     
      ?>
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
                while($row = $consulta->fetch_assoc()){?>
              
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