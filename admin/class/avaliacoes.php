<?php

require_once('conexao.php');

class AvaliacoesClass
{
    // ATRIBUTOS
    public $idAvaliacao;
    public $imgAvaliacao;
    public $altAvaliacao;
    public $textAvaliacao;
    public $statusAvaliacao;
    public $idUsuario;
   

    // MÉTODOS
    public function listar(){
        $query = "SELECT * FROM tblavaliacao;";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function Inserir(){
        $query = "INSERT INTO tblavaliacao(imgAvaliacao,
        altAvaliacao,
        textAvaliacao,
        statusAvaliacao) 
    VALUES('".$this->imgAvaliacao."','".$this->altAvaliacao."','".$this->textAvaliacao."','".$this->statusAvaliacao."');";
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=avaliacoes'</script>";
    }

}