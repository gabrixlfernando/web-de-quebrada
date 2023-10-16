<?php

require_once('class/avaliacoes.php');
$listaAvaliacoes = new AvaliacoesClass();
$listar = $listaAvaliacoes->listaardes();
//var_dump($listar); 

?>

<h2><a href="index.php?p=avaliacoes" class="btn btn-dark">Avaliações Ativas</a></h2>


<div class="container">
    <div class="table-responsive">
    <table class="table table-light table-borderless">
        <caption>LISTAR AVALIAÇÕES</caption>
        <thead class="table-dark">
            <tr>
          
                <th>ID</th>
                <th>IMAGEM</th>
                <th>ALT</th>
                <th>MENSAGEM</th>
                <th>STATUS</th>
                <th> ATIVAR</th>
               
            </tr>
        </thead>



        <tbody>
            <?php foreach ($listar as $linha) : ?>
                <tr>
                    <td><?php echo $linha['idAvaliacao'] ?></td>
                    <!-- <td><?php echo $linha['imgAvaliacao'] ?></td> -->
                    <td style="width: 10%;"><?php echo '<img src="../img/' . $linha['imgAvaliacao'] . '">' ?></td>
                    <td><?php echo $linha['altAvaliacao'] ?></td>
                    <td><?php echo $linha['textAvaliacao'] ?></td>
                    <td><?php echo $linha['statusAvaliacao'] ?></td>
                    <td><a href="index.php?p=avaliacoes&av=ativar&id=<?php echo $linha['idAvaliacao'] ?>" class="btn btn-outline-success"> ATIVAR</td>
                   
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>