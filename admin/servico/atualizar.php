<!-- <?php
    $id = $_GET['id'];
?>
<h1>PG Atualizar o serviço id: <?php echo $id; ?> </h1> -->

<?php

$id = $_GET['id'];
require_once('class/servico.php');

$servico = new ServicoClass($id);


if (isset($_POST['tituloServico'])) {


    

    $tituloServico = $_POST['tituloServico'];
    $textServico = $_POST['textServico'];
    $linkServico = $_POST['linkServico'];
    $statusServico = $_POST['statusServico'];

    if(!empty($_FILES['imgServico']['name'])){
        $arquivo = $_FILES['imgServico'];

        if ($arquivo['error']) {
            throw new Exception('Error' . $arquivo['error']);
        }
    
        if (move_uploaded_file($arquivo['tmp_name'], '../img/servico/' . $arquivo['name'])) {
            $imgServico = 'servico/' . $arquivo['name'];
        } else {
            throw new Exception('Erro: Não foi possivel realizar o upload da imagem.');
        }
    
    }else{
        $imgServico = $servico->imgServico;
    }
   

    $servico->tituloServico = $tituloServico;
    $servico->imgServico = $imgServico;
    $servico->altServico = $tituloServico;
    $servico->textServico = $textServico;
    $servico->linkServico = $linkServico;
    $servico->statusServico = $statusServico;


     $servico->Atualizar();

}



?>  




<div class="col-11">
    <div class="card card-info">

        <div class="card-header">
            <h2>Atualizar Serviço</h2>
        </div>
        <form class="form-horizontal" action="index.php?p=servico&s=atualizar&id=<?php echo $servico->idServico ?>" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <label for="imagem">Imagem: </label>
                        <img src="<?php echo '../img/' . $servico->imgServico ?>" id="imagemExibida" >
                        <input type="file" id="inputImagem" style="display: none;" name="imgServico">
                    </div>

                    <div class="col-8">
                        <input type="text" id="tituloServico" name="tituloServico" class="form-control" placeholder="Titulo" required value="<?php echo $servico->tituloServico ?>">
                        <label class="form-check-label" for="flexSwitchCheckReverse">Ativo: <input type="checkbox" class="form-check-input" name="statusServico" id="statusServico" value="<?php echo $servico->statusServico ?>" required></label>
                        <textarea id="textServico" name="textServico" class="form-control" placeholder="Insira o texto do serviço aqui." required><?php echo $servico->textServico ?></textarea>
                        <input type="text" name="linkServico" id="linkServico" class="form-control" placeholder="Link" required value="<?php echo $servico->linkServico ?>">
                        <button type="submit" class="btn btn-dark">Atualizar Serviço</button>

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