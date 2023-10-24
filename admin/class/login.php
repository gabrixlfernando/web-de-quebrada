<?php


require_once('conexao.php');

class Login{

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

    public function Verificarlogin()
    {
        if(isset($this->emailUsuario)){
            $query = "SELECT * FROM tblusuario WHERE emailUsuario = '" . $this->emailUsuario . "' AND senhaUsuario ='" . $this->senhaUsuario . "';";
        }else{
            if(isset($this->idUsuario)){
                $query = "SELECT * FROM tblusuario WHERE idUsuario = " . $this->idUsuario;
            }
        }
    
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetch(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function __construct($id = false)
    {
        if ($id) {
            $this->idUsuario = $id;
            $this->Carregar();
        }
    }

    public function Listar()
    {
        $query = "SELECT * FROM tblusuario WHERE statusUsuario ='ATIVO';";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function Listardes()
    {
        $query = "SELECT * FROM tblusuario WHERE statusUsuario ='DESATIVADO';";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function Inserir()
    {
        $query = "INSERT INTO tblusuario(nomeUsuario,
        emailUsuario,
        senhaUsuario,
        nivelUsuario,
        dataCadUsuario,
        telefoneUsuario,
        statusUsuario,
        fotoUsuario) 
    VALUES('" . $this->nomeUsuario . "', '" . $this->emailUsuario . "', '" . $this->senhaUsuario . "','" . $this->nivelUsuario . "','" . $this->dataCadUsuario . "','" . $this->telefoneUsuario . "','" . $this->statusUsuario . "','" . $this->fotoUsuario . "');";
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=usuario'</script>";
    }

    public function Carregar()
    {
        $query = "SELECT * FROM tblusuario WHERE idUsuario = " . $this->idUsuario;;
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();


        foreach ($lista as $linha) {
            $this->nomeUsuario     =   $linha['nomeUsuario'];
            $this->senhaUsuario        =   $linha['senhaUsuario'];
            $this->nivelUsuario        =   $linha['nivelUsuario'];
            $this->dataCadUsuario       =   $linha['dataCadUsuario'];
            $this->telefoneUsuario       =   $linha['telefoneUsuario'];
            $this->statusUsuario     =   $linha['statusUsuario'];
            $this->fotoUsuario     =   $linha['fotoUsuario'];
        }
    }


    public function Atualizar(){
        $query = "UPDATE tblusuario SET nomeUsuario='" . $this->nomeUsuario . "',
        emailUsuario='" . $this->emailUsuario . "',
        senhaUsuario='" . $this->senhaUsuario . "',
        nivelUsuario='" . $this->nivelUsuario . "',
        dataCadUsuario='" . $this->dataCadUsuario . "',
        telefoneUsuario='" . $this->telefoneUsuario . "', 
        statusUsuario='" . $this->statusUsuario . "',
        fotoUsuario='" . $this->fotoUsuario . "'
        WHERE idUsuario = " . $this->idUsuario;;
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=usuario'</script>";

    }

    public function Ativar(){
        $query = "UPDATE tblusuario SET 
        statusUsuario='ATIVO' 
        WHERE idUsuario = " . $this->idUsuario;;
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=usuario'</script>";

    }

    public function Desativar(){
        $query = "UPDATE tblusuario SET 
        statusUsuario='DESATIVADO' 
        WHERE idUsuario = " . $this->idUsuario;;
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=usuario'</script>";

    }


}
