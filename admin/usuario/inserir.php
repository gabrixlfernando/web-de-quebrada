<?php

if (isset($_POST['emailUsuario'])) {


    require_once('class/usuario.php');

    $emailUsuario = $_POST['emailUsuario'];
    $senhaUsuario = $_POST['senhaUsuario'];
    $nomeUsuario = $_POST['nomeUsuario'];
    $telefoneUsuario = $_POST['telefoneUsuario'];
    // $dataCadUsuario = $_POST['dataCadUsuario'];
    $nivelUsuario = $_POST['nivelUsuario'];
    $statusUsuario = $_POST['statusUsuario'];

    $arquivo = $_FILES['fotoUsuario'];

    if ($arquivo['error']) {
        throw new Exception('Error' . $arquivo['error']);
    }

    if (move_uploaded_file($arquivo['tmp_name'], '../img/usuario/' . $arquivo['name'])) {
        $fotoUsuario = 'usuario/' . $arquivo['name'];
    } else {
        throw new Exception('Erro: Não foi possivel realizar o upload da imagem.');
    }

    $usuario = new UsuarioClass();

    $usuario->emailUsuario = $emailUsuario;
    $usuario->senhaUsuario = $senhaUsuario;
    $usuario->fotoUsuario = $fotoUsuario;
    $usuario->nomeUsuario = $nomeUsuario;
    $usuario->nivelUsuario = $nivelUsuario;
    $usuario->telefoneUsuario = $telefoneUsuario;
    // $usuario->dataCadUsuario = $dataCadUsuario;
    $usuario->statusUsuario = $statusUsuario;
    date_default_timezone_set('America/Sao_Paulo');
    $usuario->dataCadUsuario = date('Y-m-d H:i:s');

     $usuario->Inserir();

}



?>  




<div class="col-11">
    <div class="card card-info">

        <div class="card-header">
            <h2>Cadastro de Usuário</h2>
        </div>
        <form class="form-horizontal" action="index.php?p=usuario&user=inserir" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <label for="imagem">Imagem: </label>
                        <img src="img/1695213.png" id="imagemExibida" >
                        <input type="file" id="inputImagem" style="display: none;" name="fotoUsuario" required>
                    </div>

                    <div class="col-8">
                        <input type="text" id="emailUsuario" name="emailUsuario" class="form-control" placeholder="Email" required>
                        <label class="form-check-label" for="flexSwitchCheckReverse">Ativo: <input type="checkbox" class="form-check-input" name="statusUsuario" id="statusUsuario" value="ATIVO" required></label>
                        
                        <input type="text" name="senhaUsuario" id="senhaUsuario" class="form-control" placeholder="Senha" required>
                        <input type="text" name="nomeUsuario" id="nomeSUsuario" class="form-control" placeholder="Nome" required>
                        <input type="text" name="telefoneUsuario" id="telefoneUsuario" class="form-control" placeholder="Telefone" required>
                        <input type="text" name="nivelUsuario" id="nivelUsuario" class="form-control" placeholder="Nivel Usuario" required>
                        <!-- <div class="mb-3">
                        <label for="dataCadUsuario" class="form-label">Data Cadastro:</label>
                        <input type="date" name="dataCadUsuario" id="dataCadUsuario" class="form-control" placeholder="Data Cadastro usuario" required>
                        </div> -->
                        <button type="submit" class="btn btn-dark">Inserir Usuário</button>

                    </div>

                </div>


        </form>

    </div>
</div>
</div>



<script>
    document.getElementById('imagemExibida').addEventListener('click', function() {
        document.getElementById('inputImagem').click();
    });

    document.getElementById('inputImagem').addEventListener('change', function() {
        let imagemExibida = document.getElementById('imagemExibida');
        let arquivo = event.target.files[0];

        if (arquivo) {
            let carregar = new FileReader();

            carregar.onload = function(e) {
                imagemExibida.src = e.target.result;
            };

            carregar.readAsDataURL(arquivo);
        }
    });
</script>

