<?php
function ConectarDB(){
    $servidor= 'carmine';
    $login= 'aluno';
    $senha= 'etec@147';
    $dbnome= '2dsa_pro_dbgestaovendas';
    $condb= new mysqli($servidor,$login, $senha, $dbnome);
    return $condb;
    

}
function Consultar($id){
    $condb=ConectarDB();
    $isql = 'select * from produtos where id='.$id;
        $consulta=$condb-> query($isql);
        if($consulta->num_rows >0){
        $linha=$consulta->fetch_assoc();
        return $linha;
        }
        else{
            echo"<script>alert('ID não cadastrado.')</script>";
            return null
        }
        
}
function ConsultarLista(){

}
?>