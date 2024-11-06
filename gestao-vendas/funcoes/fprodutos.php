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

        public function Consultar($id){
            $servidor= 'carmine';
            $login= 'aluno';
            $senha= 'etec@147';
            $dbnome= '2dsa_pro_dbgestaovendas';
            $condb= new mysqli($servidor,$login, $senha, $dbnome);
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
        

        public function ConsultarLista(){
            $isql = 'select * from produtos order by descricao';
            $consulta=$condb-> query($isql);
        }
    }
?>