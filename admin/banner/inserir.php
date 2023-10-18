<?php

if (isset($_POST['altBanner'])) {


    require_once('class/banner.php');

    $altBanner = $_POST['altBanner'];
    $statusBanner = $_POST['statusBanner'];

    $arquivo = $_FILES['imgBanner'];

    if ($arquivo['error']) {
        throw new Exception('Error' . $arquivo['error']);
    }

    if (move_uploaded_file($arquivo['tmp_name'], '../img/banner/' . $arquivo['name'])) {
        $imgBanner = 'banner/' . $arquivo['name'];
    } else {
        throw new Exception('Erro: Não foi possivel realizar o upload da imagem.');
    }

    $banner = new BannerClass();

    $banner->altBanner = $altBanner;
    $banner->imgBanner = $imgBanner;
    $banner->statusBanner = $statusBanner;


     $banner->Inserir();

}



?>  




<div class="col-11">
    <div class="card card-info">

        <div class="card-header">
            <h2>Cadastro de Banner</h2>
        </div>
        <form class="form-horizontal" action="index.php?p=banner&ban=inserir" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <label for="imagem">Imagem: </label>
                        <img src="img/1695213.png" id="imagemExibida" >
                        <input type="file" id="inputImagem" style="display: none;" name="imgBanner" required>
                    </div>

                    <div class="col-8">
                        <input type="text" id="altBanner" name="altBanner" class="form-control" placeholder="alt" required>
                        <label class="form-check-label" for="flexSwitchCheckReverse">Ativo: <input type="checkbox" class="form-check-input" name="statusBanner" id="statusBanner" value="ATIVO" required></label>
                        <button type="submit" class="btn btn-dark">Inserir Serviço</button>

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
