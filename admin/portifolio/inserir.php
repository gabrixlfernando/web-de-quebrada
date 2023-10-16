<?php

if (isset($_POST['altPortifolio'])) {


    require_once('class/portifolio.php');

    $altPortifolio = $_POST['altPortifolio'];
    $statusPortifolio = $_POST['statusPortifolio'];

    $arquivo = $_FILES['imgPortifolio'];

    if ($arquivo['error']) {
        throw new Exception('Error' . $arquivo['error']);
    }

    if (move_uploaded_file($arquivo['tmp_name'], '../img/portifolio/' . $arquivo['name'])) {
        $imgPortifolio = 'portifolio/' . $arquivo['name'];
    } else {
        throw new Exception('Erro: Não foi possivel realizar o upload da imagem.');
    }

    $portifolio = new PortifolioClass();

   
    $portifolio->imgPortifolio = $imgPortifolio;
    $portifolio->altPortifolio = $altPortifolio;
    $portifolio->statusPortifolio = $statusPortifolio;


     $portifolio->Inserir();

}



?>  




<div class="col-11">
    <div class="card card-info">

        <div class="card-header">
            <h2>Cadastro Portfólio</h2>
        </div>
        <form class="form-horizontal" action="index.php?p=portifolio&po=inserir" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <label for="imagem">Imagem: </label>
                        <img src="img/1695213.png" id="imagemExibida" >
                        <input type="file" id="inputImagem" style="display: none;" name="imgPortifolio" required>
                    </div>

                    <div class="col-8">
                        <input type="text" id="altPortifolio" name="altPortifolio" class="form-control" placeholder="Alt" required>
                        <label class="form-check-label" for="flexSwitchCheckReverse">Ativo: <input type="checkbox" class="form-check-input" name="statusPortifolio" id="statusPortifolio" value="ATIVO" required></label>
                        <button type="submit" class="btn btn-dark">Inserir Portifólio</button>

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

