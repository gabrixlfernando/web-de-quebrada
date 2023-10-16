<?php

$id = $_GET['id'];
require_once('class/portifolio.php');

$portifolio = new PortifolioClass($id);


if (isset($_POST['altPortifolio'])) {


    
    $altPortifolio = $_POST['altPortifolio'];
    $statusPortifolio = $_POST['statusPortifolio'];

    if(!empty($_FILES['imgPortifolio']['name'])){
        $arquivo = $_FILES['imgPortifolio'];

        if ($arquivo['error']) {
            throw new Exception('Error' . $arquivo['error']);
        }
    
        if (move_uploaded_file($arquivo['tmp_name'], '../img/portifolio/' . $arquivo['name'])) {
            $imgPortifolio = 'portifolio/' . $arquivo['name'];
        } else {
            throw new Exception('Erro: Não foi possivel realizar o upload da imagem.');
        }
    
    }else{
        $imgPortifolio = $portifolio->imgPortifolio;
    }
   

    $portifolio->altPortifolio = $altPortifolio;
    $portifolio->imgPortifolio = $imgPortifolio;
    $portifolio->statusPortifolio = $statusPortifolio;


     $portifolio->Atualizar();

}



?>  


<div class="col-11">
    <div class="card card-info">

        <div class="card-header">
            <h2>Atualizar Portifólio</h2>
        </div>
        <form class="form-horizontal" action="index.php?p=portifolio&po=atualizar&id=<?php echo $portifolio->idPortifolio ?>" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <label for="imagem">Imagem: </label>
                        <img src="<?php echo '../img/' . $portifolio->imgPortifolio ?>" id="imagemExibida" >
                        <input type="file" id="inputImagem" style="display: none;" name="imgPortifolio">
                    </div>

                    <div class="col-8">
                        <input type="text" id="altPortifolio" name="altPortifolio" class="form-control" placeholder="Alt" required value="<?php echo $portifolio->altPortifolio ?>">
                        <label class="form-check-label" for="flexSwitchCheckReverse">Ativo: <input type="checkbox" class="form-check-input" name="statusPortifolio" id="statusPortifolio" required value="<?php echo $portifolio->statusPortifolio ?>"></label>
                        <button type="submit" class="btn btn-dark">Atualizar Portifólio</button>

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

