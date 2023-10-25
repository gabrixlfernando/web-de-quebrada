<?php

require_once('class/usuario.php');
$listaUsuario = new UsuarioClass();
$listar = $listaUsuario->Listar();

?>


<div class="btno">
<h2><a href="index.php?p=usuario&user=inserir" class="btn btn-dark">Novo Usuário</a></h2>
<h2><a href="index.php?p=usuario&user=desativado" class="btn btn-dark">Usuários Desativados</a></h2>
</div>


<div class="container">
    <div class="table-responsive">
    <table class="table table-light table-borderless">
        <caption>LISTAR USUÁRIOS</caption>
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>EMAIL</th>
                <th>SENHA</th>
                <th>NIVEL</th>
                <th>DATA CADASTRO</th>
                <th>TELEFONE</th>
                <th>STATUS</th>
                <th>FOTO</th>
                <th> ATUALIZAR</th>
                <th> DESATIVAR</th>
            </tr>
        </thead>



        <tbody>
            <?php foreach ($listar as $linha) : ?>
                <tr>
                    <td><?php echo $linha['idUsuario'] ?></td>
                    <td><?php echo $linha['nomeUsuario'] ?></td>
                    <td><?php echo $linha['emailUsuario'] ?></td>
                    <td><?php echo $linha['senhaUsuario'] ?></td>
                    <td><?php echo $linha['nivelUsuario'] ?></td>
                    <td><?php echo $linha['dataCadUsuario'] ?></td>
                    <td><?php echo $linha['telefoneUsuario'] ?></td>
                    <td><?php echo $linha['statusUsuario'] ?></td>
                    <td style="width: 10%;"><?php echo '<img src="../img/' . $linha['fotoUsuario'] . '">' ?></td>
                    <td><a href="index.php?p=usuario&user=atualizar&id=<?php echo $linha['idUsuario'] ?>" class="btn btn-outline-success"> ATUALIZAR</td>
                    <td style="text-align: center;"><a href="index.php?p=usuario&user=desativar&id=<?php echo $linha['idUsuario'] ?>" ><i class="fa-solid fa-trash-can"></i></i></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>
