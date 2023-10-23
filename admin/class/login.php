<?php 


require_once('conexao.php');

class login{

//ATRIBUTOS
 public $idUsuario;
 public $nomeUsuario;
 public $emailUsuario;
 public $senhaUsuario;
 public $nivelUsuario;
 public $dataCadUsuario;
 public $telefoneUsuario;
 public $statusUsuario;
 public $fotoUsuario;
 

 //METODOS

    public function Verificarlogin(){
        if(isset($this->emailUsuario)){
            $query = "SELECT * FROM tblusuario WHERE emailUsuario = '".$this->emailUsuario."' AND senhaUsuario = '".$this->senhaUsuario."';";
        }else{
            if(isset($this->idUsuario)){
               $query = "SELECT * FROM tblusuario WHERE idUsuario = ".$this->idUsuario;
            }
        }
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetch(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function listar(){
        $query = "SELECT * FROM tblusuario;";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();
        return $lista;

  }

}