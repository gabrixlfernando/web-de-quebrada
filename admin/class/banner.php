<?php

require_once('conexao.php');

class BannerClass
{
    // ATRIBUTOS
    public $idBanner;
    public $imgBanner;
    public $altBanner;
    public $statusBanner;


    public function __construct($id = false)
    {
        if ($id) {
            $this->idBanner = $id;
            $this->Carregar();
        }
    }


    public function Listar(){
        $query = "SELECT * FROM tblbanner WHERE statusBanner ='ATIVO';";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }
    public function Listaar(){
        $query = "SELECT * FROM tblbanner WHERE statusBanner ='DESATIVADO';";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function Inserir()
    {
        $query = "INSERT INTO tblbanner(
        imgBanner,
        altBanner,
        statusBanner) 
    VALUES( '" . $this->imgBanner . "', '" . $this->altBanner . "','" . $this->statusBanner . "');";
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=banner'</script>";
    }


    public function Carregar()
    {
        $query = "SELECT * FROM tblbanner WHERE idBanner = " . $this->idBanner;;
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();


        foreach ($lista as $linha) {
            $this->imgBanner        =   $linha['imgBanner'];
            $this->altBanner        =   $linha['altBanner'];
            $this->statusBanner     =   $linha['statusBanner'];
        }
    }

    public function Atualizar(){
        $query = "UPDATE tblbanner SET 
        imgBanner='" . $this->imgBanner . "',
        altBanner='" . $this->altBanner . "',
        statusBanner='" . $this->statusBanner . "' 
        WHERE idBanner = " . $this->idBanner;;
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=banner'</script>";

    }







    public function Ativar(){
        $query = "UPDATE tblbanner SET 
        statusBanner='ATIVO' 
        WHERE idBanner = " . $this->idBanner;;
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=banner'</script>";

    }



    public function Desativar(){
        $query = "UPDATE tblbanner SET 
        statusBanner='DESATIVADO' 
        WHERE idBanner = " . $this->idBanner;;
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=banner'</script>";

    }
   
 }