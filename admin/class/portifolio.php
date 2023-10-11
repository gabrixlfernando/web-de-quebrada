<?php

require_once('conexao.php');

class PortifolioClass
{
    // ATRIBUTOS
    public $idPortifolio;
    public $imgPortifolio;
    public $altPortifolio;
    public $statusPortifolio;
   

    // MÉTODOS
    public function listar(){
        $query = "SELECT * FROM tblportfolio WHERE statusPortifolio ='ATIVO';";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function Inserir(){
        $query = "INSERT INTO tblportfolio(imgPortifolio,
        altPortifolio,
        statusPortifolio) 
    VALUES('".$this->imgPortifolio."','".$this->altPortifolio."','".$this->statusPortifolio."');";
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=portifolio'</script>";
    }

    public function Desativar(){
        $query = "UPDATE tblportfolio SET 
        statusPortifolio='DESATIVADO' 
        WHERE idPortifolio = " . $this->idPortifolio;;
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=portifolio'</script>";

    }

}