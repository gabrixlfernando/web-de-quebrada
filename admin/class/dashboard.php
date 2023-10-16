<?php


    require_once('conexao.php');


    class DashClass{



        public function QtdServico(){
            $query = "SELECT COUNT(*) AS idServico FROM tblservico";
            $conn = Conexao::LigarConexao();
            $resultado = $conn->query($query);
            $lista = $resultado->fetch();
            return $lista;
        }

        public function QtdSobre(){
            $query = "SELECT COUNT(*) AS idSobre FROM tblsobre";
            $conn = Conexao::LigarConexao();
            $resultado = $conn->query($query);
            $lista = $resultado->fetch();
            return $lista;
        }

        public function QtdContato(){
            $query = "SELECT COUNT(*) AS idContato FROM tblcontato";
            $conn = Conexao::LigarConexao();
            $resultado = $conn->query($query);
            $lista = $resultado->fetch();
            return $lista;
        }

        public function QtdPortifolio(){
            $query = "SELECT COUNT(*) AS idPortifolio FROM tblportfolio";
            $conn = Conexao::LigarConexao();
            $resultado = $conn->query($query);
            $lista = $resultado->fetch();
            return $lista;
        }

        public function QtdAvaliacao(){
            $query = "SELECT COUNT(*) AS idAvaliacao FROM tblavaliacao";
            $conn = Conexao::LigarConexao();
            $resultado = $conn->query($query);
            $lista = $resultado->fetch();
            return $lista;
        }




    }