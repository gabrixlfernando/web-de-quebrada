<?php

require_once('class/usuario.php');
$listaUsuario = new UsuarioClass();
$listar = $listaUsuario->Listardes();

?>



<h2><a href="index.php?p=usuario" class="btn btn-dark">Usuários Ativos</a></h2>




<div class="container">
    <div class="table-responsive">
    <table class="table table-light table-borderless">
        <caption>LISTAR USUÁRIOS</caption>
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>FOTO</th>
                <th>NOME</th>
                <th>EMAIL</th>
                <th>SENHA</th>
                <th>NIVEL</th>
                <th>DATA CADASTRO</th>
                <th>TELEFONE</th>
                <th>STATUS</th>
                <th>ATIVAR</th>
               
            </tr>
        </thead>



        <tbody>
            <?php foreach ($listar as $linha) : ?>
                <tr>
                    <td><?php echo $linha['idUsuario'] ?></td>
                    <td style="width: 10%;"><?php echo '<img src="../img/' . $linha['fotoUsuario'] . '">' ?></td>
                    <td><?php echo $linha['nomeUsuario'] ?></td>
                    <td><?php echo $linha['emailUsuario'] ?></td>
                    <td><?php echo $linha['senhaUsuario'] ?></td>
                    <td><?php echo $linha['nivelUsuario'] ?></td>
                    <td><?php echo $linha['dataCadUsuario'] ?></td>
                    <td><?php echo $linha['telefoneUsuario'] ?></td>
                    <td><?php echo $linha['statusUsuario'] ?></td>                 
                    <td><a href="index.php?p=usuario&user=ativar&id=<?php echo $linha['idUsuario'] ?>" class="btn btn-outline-success"> ATIVAR</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>
