<?php

class Conexao
{
    public static function LigarConexao()
    {
        $conn = new PDO('mysql:dbname=dbwebdequebrada;host=localhost', 'root', '');
        //$conn = new PDO('mysql:dbname=u283879542_webdequebrada;host=smpsistema.com.br', 'u283879542_webdequebrada', 'SenacAgencia01');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
}
