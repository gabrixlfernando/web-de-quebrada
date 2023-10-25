<?php

$id = $_GET['id'];
require_once('class/usuario.php');

$usuario = new UsuarioClass($id);

if (isset($_POST['emailUsuario'])) {


    $emailUsuario = $_POST['emailUsuario'];
    $senhaUsuario = $_POST['senhaUsuario'];
    $nomeUsuario = $_POST['nomeUsuario'];
    $nivelUsuario = $_POST['nivelUsuario'];
    $dataCadUsuario = $_POST['dataCadUsuario'];
    $telefoneUsuario = $_POST['telefoneUsuario'];
    $statusUsuario = $_POST['statusUsuario'];

    $arquivo = $_FILES['fotoUsuario'];

    if(!empty($_FILES['fotoUsuario']['name'])){

        $arquivo = $_FILES['fotoUsuario'];
        
        if ($arquivo['error']) {
            throw new Exception('Error' . $arquivo['error']);
        }
    
        if (move_uploaded_file($arquivo['tmp_name'], '../img/usuario/' . $arquivo['name'])) {
            $fotoUsuario = 'usuario/' . $arquivo['name'];
        } else {
            throw new Exception('Erro: Não foi possivel realizar o upload da imagem.');
        }
     }else{
        $fotoUsuario = $usuario->fotoUsuario;
    }
   

    $usuario->nomeUsuario = $nomeUsuario;
    $usuario->emailUsuario = $emailUsuario;
    $usuario->senhaUsuario = $senhaUsuario; 
    $usuario->nivelUsuario = $nivelUsuario; 
    $usuario->dataCadUsuario = $dataCadUsuario;
    $usuario->telefoneUsuario = $telefoneUsuario;
    $usuario->statusUsuario = $statusUsuario;
    $usuario->fotoUsuario = $fotoUsuario;


     $usuario->Atualizar();

}



?>  




<div class="col-11">
    <div class="card card-info">

        <div class="card-header">
            <h2>Atualizar Usuário</h2>
        </div>
        <form class="form-horizontal" action="index.php?p=usuario&user=atualizar&id=<?php echo $usuario->idUsuario ?>" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <label for="imagem">Imagem: </label>
                        <img src="<?php echo '../img/' . $usuario->fotoUsuario ?>" id="imagemExibida" >
                        <input type="file" id="inputImagem" style="display: none;" name="fotoUsuario">
                    </div>

                    <div class="col-8">
                         <input type="hidden" name="idUsuario" value="<?php echo $usuario->idUsuario ?>">
                        <input type="text" id="emailUsuario" name="emailUsuario" class="form-control" placeholder="Email" value="<?php echo $usuario->emailUsuario ?>" required>
                        <label class="form-check-label" for="flexSwitchCheckReverse">Ativo: <input type="checkbox" class="form-check-input" name="statusUsuario" id="statusUsuario" value="<?php echo $usuario->statusUsuario ?>" required></label>
                        
                        <input type="text" name="senhaUsuario" id="senhaUsuario" class="form-control" placeholder="Senha" value="<?php echo $usuario->senhaUsuario ?>" required>
                        <input type="text" name="nomeUsuario" id="nomeSUsuario" class="form-control" placeholder="Nome" value="<?php echo $usuario->nomeUsuario ?>" required>
                        <input type="text" name="telefoneUsuario" id="telefoneUsuario" class="form-control" placeholder="Telefone" value="<?php echo $usuario->telefoneUsuario ?>" required>
                        <input type="text" name="nivelUsuario" id="nivelUsuario" class="form-control" placeholder="Nivel Usuario" value="<?php echo $usuario->nivelUsuario ?>" required>
                        <input type="text" name="dataCadUsuario" id="dataCadUsuario" class="form-control" placeholder="Data Cadastro usuario" value="<?php echo $usuario->dataCadUsuario ?>" required>
                        <button type="submit" class="btn btn-dark">Atualizar Usuário</button>

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

