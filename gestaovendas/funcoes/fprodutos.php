<?php
    class Conexoes{

        public function ConectarDB(){
            $servidor= 'carmine';
            $login= 'aluno';
            $senha= 'etec@147';
            $dbnome= '2dsa_pro_dbgestaovendas';
            $condb= new mysqli($servidor,$login, $senha, $dbnome);
            return $condb;     
        }

        //public function ConsultarCodigo($id){
        //    $servidor= 'carmine';
        //    $login= 'aluno';
        //    $senha= 'etec@147';
        //    $dbnome= '2dsa_pro_dbgestaovendas';
        //    $condb= new mysqli($servidor,$login, $senha, $dbnome);
        //    $isql = 'select * from clientes where id='.$id;
        //    $consulta=$condb-> query($isql);
        //    if($consulta->num_rows >0){
        //    $linha=$consulta->fetch_assoc();
        //    return $linha;
        //    }
        //   else{
        //        echo"<script>alert('ID não cadastrado.')</script>";
        //        return null;
        //    }
        //}

        public function ConsultarToTable(){
            $servidor= 'carmine';
            $login= 'aluno';
            $senha= 'etec@147';
            $dbnome= '2dsa_pro_dbgestaovendas';
            $condb= new mysqli($servidor,$login, $senha, $dbnome);
            $isql = 'select * from clientes';
            $consulta=$condb-> query($isql);
            if($consulta->num_rows > 0){
                return $consulta;    
            } else {
                echo"<script>alert('ID não cadastrado.')</script>";
                return null;
            }
        }
        

        //public function ConsultarLista(){
        //    $condb=ConectarDB();
        //    $isql = 'select * from produtos order by descricao';
        //    $consulta=$condb-> query($isql);
        //    if($consulta->num_row > 0){
        //        return $consulta;
        //    } else {
        //        echo "<script>alert('Lista Vazia')</script>"
        //    }
        //}

        public function Consultar($id){
            $condb=ConectarDB();
            if($id == 0){
                $isql = 'select * from produtos order by descricao';
                $consulta=$condb-> query($isql);
                if($consulta->num_row > 0){
                    return $consulta;
                } else {
                    echo "<script>alert('Lista Vazia')</script>"
                }
            } else {
                $isql = 'select * from clientes where id='.$id;
                $consulta=$condb-> query($isql);
                if($consulta->num_rows >0){
                $linha=$consulta->fetch_assoc();
                return $linha;
                }
                else{
                    echo"<script>alert('ID não cadastrado.')</script>";
                    return null;
                }
            }
        }

        public function Cadastrar($descricao, $preco, $custo, $estoque, $unidade){
            $condb=ConectarDB();
            $isql="insert into produtos
            (descricao, preco, custo, estoque, unidade)
            values
            ('"000000000 . $descricao . "'," . $preco . "," . $custo . "," . $unidade . ", 'UN')";
            $cadastrar = $condb->query($isql);
            if($cadastrar == true){
                echo "<script>alert('Cadastro realizado com sucesso')</script>";
            } else{
                echo "<script>alert('Falha na inclusão de dados')</script>";
            }
        }

        public function Alterar($id, $descricao, $preco, $custo, $estoque, $unidade){
            $condb=ConectarDB();
            $isql = "update produtos set descricao = '" . $descricao . "', preco = " . $preco . ", custo = " . $custo . ", estoque = " . $unidade . ", unidade = 'UN' where id = " . $id;
            $alterar = $condb->query($isql);
            if($alterar == true){
                echo "<script>alert('Alteração realizada com sucesso')</script>";
            } else{
                echo "<script>alert('Falha na alteração de dados')</script>";
            }
        }

        public function Excluir($id){
            $condb=ConectarDB();
            $isql = "delete from produtos where id = ". $id;
            $delete = $condb->query($isql);
            if($delete == true){
                echo "<script>alert('Exclusão realizado com sucesso')</script>";
            } else{
                echo "<script>alert('Falha na exclusão de dados')</script>";
            }
        }

        public function Atualizar($id, $descricao, $preco, $custo, $estoque, $unidade){
            $condb=ConectarDB();
                if($id == 0){
                    $isql="insert into produtos
                (descricao, preco, custo, estoque, unidade)
                values
                ('"000000000 . $descricao . "'," . $preco . "," . $custo . "," . $unidade . ", 'UN')";
                $cadastrar = $condb->query($isql);
                if($cadastrar == true){
                    echo "<script>alert('Cadastro realizado com sucesso')</script>";
                } else{
                    echo "<script>alert('Falha na inclusão de dados')</script>";
                }
            } else {
                $isql = "update produtos set descricao = '" . $descricao . "', preco = " . $preco . ", custo = " . $custo . ", estoque = " . $unidade . ", unidade = 'UN' where id = " . $id;
                $alterar = $condb->query($isql);
                if($alterar == true){
                    echo "<script>alert('Alteração realizada com sucesso')</script>";
                } else{
                    echo "<script>alert('Falha na alteração de dados')</script>";
                }
            }
        }
    }
?>