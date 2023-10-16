<?php

if (isset($_POST['textAvaliacao'])) {


    require_once('class/avaliacoes.php');

    $textAvaliacao = $_POST['textAvaliacao'];
    $altAvaliacao = $_POST['altAvaliacao'];
    $statusAvaliacao = $_POST['statusAvaliacao'];

    $arquivo = $_FILES['imgAvaliacao'];

    if ($arquivo['error']) {
        throw new Exception('Error' . $arquivo['error']);
    }

    if (move_uploaded_file($arquivo['tmp_name'], '../img/avaliacao/' . $arquivo['name'])) {
        $imgAvaliacao = 'avaliacao/' . $arquivo['name'];
    } else {
        throw new Exception('Erro: Não foi possivel realizar o upload da imagem.');
    }

    $avaliacao = new AvaliacoesClass();

    $avaliacao->textAvaliacao = $textAvaliacao;
    $avaliacao->imgAvaliacao = $imgAvaliacao;
    $avaliacao->altAvaliacao = $altAvaliacao;
    $avaliacao->statusAvaliacao = $statusAvaliacao;


     $avaliacao->Inserir();

}



?>  




<div class="col-11">
    <div class="card card-info">

        <div class="card-header">
            <h2>Cadastro de Avaliação</h2>
        </div>
        <form class="form-horizontal" action="index.php?p=avaliacoes&av=inserir" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <label for="imagem">Imagem: </label>
                        <img src="img/1695213.png" id="imagemExibida" >
                        <input type="file" id="inputImagem" style="display: none;" name="imgAvaliacao" required>
                    </div>

                    <div class="col-8">
                        <input type="text" id="altAvaliacao" name="altAvaliacao" class="form-control" placeholder="alt" required>
                        <label class="form-check-label" for="flexSwitchCheckReverse">Ativo: <input type="checkbox" class="form-check-input" name="statusAvaliacao" id="statusAvaliacao" value="ATIVO" required></label>
                        <textarea id="textAvaliacao" name="textAvaliacao" class="form-control" placeholder="Insira o texto da avaliação aqui." required></textarea>
                        <button type="submit" class="btn btn-dark">Inserir Avaliação</button>

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