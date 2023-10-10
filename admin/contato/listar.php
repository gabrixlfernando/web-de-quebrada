<?php

require_once('class/contato.php');
$listaContato = new ContatoClass();
$listar = $listaContato->Listar();
// var_dump($listar); 

?>


<div class="container">
    <div class="table-responsive">
        <table class="table table-light table-borderless">
            <caption>LISTAR CONTATOS</caption>
            <thead class="table-dark">
                <tr>
                    <th>NOME</th>
                    <th>EMAIL</th>
                    <th>NÚMERO</th>
                    <th>MENSAGEM</th>
                    <th>DATA</th>
                    <th>HORA</th>
                </tr>
            </thead>



            <tbody>
                <?php foreach ($listar as $linha) : ?>
                    <tr>
                        <!-- <td><?php echo $linha['idContato'] ?></td> -->
                        <td><?php echo $linha['nomeContato'] ?></td>
                        <td><?php echo $linha['emailContato'] ?></td>
                        <td><?php echo $linha['numContato'] ?></td>
                        <td><?php echo $linha['mensContato'] ?></td>
                        <td><?php echo $linha['dataContato'] ?></td>
                        <td><?php echo $linha['horaContato'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>