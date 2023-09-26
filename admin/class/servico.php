<?php

require_once('conexao.php');

class ServicoClass
{
    // ATRIBUTOS
    public $idServico;
    public $imgServico;
    public $altServico;
    public $textServico;
    public $linkServico;
    public $statusServico;

    // MÉTODOS
    public function listar(){
        $query = "SELECT * FROM tblservico WHERE statusServico ='ATIVO' ORDER BY tituloServico ASC;";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }
}
