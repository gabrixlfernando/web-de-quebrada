<?php

require_once('conexao.php');

class SobreClass
{
    // ATRIBUTOS
    public $idSobre;
    public $tituloSobre;
    public $textSobre;
    public $statusSobre;
   

    // MÉTODOS
    public function listar(){
        $query = "SELECT * FROM tblsobre WHERE statusSobre ='ATIVO';";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function Inserir(){
        $query = "INSERT INTO tblsobre(tituloSobre,
        textSobre,
        statusSobre) 
    VALUES('".$this->tituloSobre."','".$this->textSobre."','".$this->statusSobre."');";
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=sobre'</script>";
    }

}