<?php

require_once('class/servico.php');
$listaServico = new ServicoClass();
$listar = $listaServico->Listardes();
//var_dump($listar); 

?>

<h2><a href="index.php?p=servico" class="btn btn-dark">Serviços Ativos</a></h2>

<div class="container">
    <div class="table-responsive">
    <table class="table table-light table-borderless">
        <caption>LISTAR SERVIÇOS</caption>
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>TITULO</th>
                <th>IMG</th>
                <th>ALT</th>
                <th>TEXTO</th>
                <th>LINK</th>
                <th>STATUS</th>
                <th> ATIVAR</th>
            </tr>
        </thead>



        <tbody>
            <?php foreach ($listar as $linha) : ?>
                <tr>
                    <td><?php echo $linha['idServico'] ?></td>
                    <td><?php echo $linha['tituloServico'] ?></td>
                    <td style="width: 10%;"><?php echo '<img src="../img/' . $linha['imgServico'] . '" alt="' . $linha['altServico'] . '">' ?></td>
                    <td><?php echo $linha['altServico'] ?></td>
                    <td><?php echo $linha['textServico'] ?></td>
                    <td><?php echo $linha['linkServico'] ?></td>
                    <td><?php echo $linha['statusServico'] ?></td>
                    <td><a href="index.php?p=servico&s=ativar&id=<?php echo $linha['idServico'] ?>" class="btn btn-outline-success"> ATIVAR</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>