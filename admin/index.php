<?php
    session_start();

    if(!isset($_SESSION['login'])){
        header("Location:login.php");
        
    }

    require_once('class/login.php');
    $usuario = new login();
    $usuario->idUsuario = $_SESSION['idUser'];
    $dadosUsuario = $usuario->Verificarlogin();


    var_dump($dadosUsuario);

   // $idUsuario = $_SESSION['idUser'];

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Administração</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>








    <header class="topbar">
        <div>
            <a href="index.php"><img src="img/logodark.svg" alt=""></a>
        </div>

        <!-- <h1>Painel de Administração</h1> -->
        <div class="user-menu">
            <img src="img/cliente-perfil-02.svg" alt="">
            <a href="#">Usuário</a>
            <a href="#">Sair</a>
        </div>
    </header>

    <div class="wrapper">


         <nav class="sidebar">
            <div>

            </div>
            <ul>
                <li><a href="index.php?p=servico">Serviços</a></li>
                <li><a href="index.php?p=sobre">Sobre</a></li>
                <li><a href="index.php?p=contato">Contato</a></li>
                <li><a href="index.php?p=portifolio">Portifólio</a></li>
                <li><a href="index.php?p=avaliacoes">Avaliações</a></li>
                <li><a href="index.php?p=banner">Banner</a></li>
            </ul>
        </nav> 
        <main class="container">
            <div class="row">



                <h1>Página <?php echo @$_GET['p'] ?></h1>
                <?php
                $pagina = @$_GET['p'];

                switch ($pagina) {
                    case 'servico';
                        # code...
                        require_once('servico/servico.php');
                        break;
                    case 'sobre';
                        # code...
                        require_once('sobre/sobre.php');
                        break;
                    case 'avaliacoes';
                        # code...
                        require_once('avaliacoes/avaliacoes.php');
                        break;
                    case 'contato';
                        # code...
                        require_once('contato/contato.php');
                        break;
                    case 'portifolio';
                        # code...
                        require_once('portifolio/portifolio.php');
                        break;
                    case 'banner';
                        # code...
                        require_once('banner/banner.php');
                        break;

                    default:
                        # code...
                         require_once('dashboard/dashboard.php');
                        break;
                }


                ?>

            </div>

        </main>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>