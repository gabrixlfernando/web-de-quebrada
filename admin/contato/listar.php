<?php

require_once('class/contato.php');
$listasContato = new ContatoClass();
$listar = $listasContato->Listar();

?> 



<div>
    <table>
        <caption>LISTAR Contatos</caption>
        <thead>
            <tr>
                <!-- <th>ID</th> -->
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