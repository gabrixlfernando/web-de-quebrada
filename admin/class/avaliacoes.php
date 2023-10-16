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
    public function __construct($id = false)
    {
        if ($id) {
            $this->idAvaliacao = $id;
            $this->Carregar();
        }
    }

    public function listaar(){
        $query = "SELECT * FROM tblavaliacao WHERE statusAvaliacao ='ATIVO';";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function listaardes(){
        $query = "SELECT * FROM tblavaliacao WHERE statusAvaliacao ='DESATIVADO';";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function Inserir(){
        $query = "INSERT INTO tblavaliacao(imgAvaliacao,
        altAvaliacao,
        textAvaliacao,
        statusAvaliacao,
        idUsuario) 
    VALUES('".$this->imgAvaliacao."','".$this->altAvaliacao."','".$this->textAvaliacao."','".$this->statusAvaliacao."', '".$this->idUsuario."');";
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=avaliacoes'</script>";
    }

    public function Carregar()
    {
        $query = "SELECT * FROM tblavaliacao WHERE idAvaliacao = " . $this->idAvaliacao;;
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();


        foreach ($lista as $linha) {
            $this->imgAvaliacao        =   $linha['imgAvaliacao'];
            $this->altAvaliacao        =   $linha['altAvaliacao'];
            $this->textAvaliacao       =   $linha['textAvaliacao'];
            $this->statusAvaliacao     =   $linha['statusAvaliacao'];
        }
    }

    public function Atualizar(){
        $query = "UPDATE tblavaliacao SET imgAvaliacao='" . $this->imgAvaliacao . "',
        altAvaliacao='" . $this->altAvaliacao . "',
        textAvaliacao='" . $this->textAvaliacao . "',
        statusAvaliacao='" . $this->statusAvaliacao . "' 
        WHERE idAvaliacao = " . $this->idAvaliacao;;
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=avaliacoes'</script>";

    }

    public function Ativar(){
        $query = "UPDATE tblavaliacao SET 
        statusAvaliacao='ATIVO' 
        WHERE idAvaliacao = " . $this->idAvaliacao;;
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=avaliacoes'</script>";

    }



    public function Desativar(){
        $query = "UPDATE tblavaliacao SET 
        statusAvaliacao='DESATIVADO' 
        WHERE idAvaliacao = " . $this->idAvaliacao;;
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=avaliacoes'</script>";

    }

}