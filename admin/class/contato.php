<?php

require_once('conexao.php');

class ContatoClass{

//ATRIBUTOS
 public $idContato;
 public $nomeContato;
 public $emailContato;
 public $numContato;
 public $mensContato;
 public $dataContato;
 public $horaContato;


 //METODOS

 public function InserirContato(){
    $sql = "INSERT INTO tblcontato(nomeContato,
                                    emailContato,
                                    numContato,
                                    mensContato,
                                    dataContato,
                                    horaContato) 
    VALUES('".$this->nomeContato."', '".$this->emailContato."', '".$this->numContato."','".$this->mensContato."','".$this->dataContato."','".$this->horaContato."')";
    $conn = Conexao::LigarConexao();
    $conn->exec($sql);

 }


}