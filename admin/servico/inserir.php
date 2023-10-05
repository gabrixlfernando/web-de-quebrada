  <?php

if (isset($_POST['tituloServico'])) {


    require_once('class/servico.php');

    $tituloServico = $_POST['tituloServico'];
    $textServico = $_POST['textServico'];
    $linkServico = $_POST['linkServico'];
    $statusServico = $_POST['statusServico'];

    $arquivo = $_FILES['imgServico'];

    if ($arquivo['error']) {
        throw new Exception('Error' . $arquivo['error']);
    }

    if (move_uploaded_file($arquivo['tmp_name'], '../img/servico/' . $arquivo['name'])) {
        $imgServico = 'servico/' . $arquivo['name'];
    } else {
        throw new Exception('Erro: Não foi possivel realizar o upload da imagem.');
    }

    $servico = new ServicoClass();

    $servico->tituloServico = $tituloServico;
    $servico->imgServico = $imgServico;
    $servico->altServico = $tituloServico;
    $servico->textServico = $textServico;
    $servico->linkServico = $linkServico;
    $servico->statusServico = $statusServico;


     $servico->Inserir();

}



?>  




<div class="col-11">
    <div class="card card-info">

        <div class="card-header">
            <h2>Cadastro de Serviço</h2>
        </div>
        <form class="form-horizontal" action="index.php?p=servico&s=inserir" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <label for="imagem">Imagem: </label>
                        <img src="img/1695213.png" id="imagemExibida" >
                        <input type="file" id="inputImagem" style="display: none;" name="imgServico" required>
                    </div>

                    <div class="col-8">
                        <input type="text" id="tituloServico" name="tituloServico" class="form-control" placeholder="Titulo" required>
                        <label class="form-check-label" for="flexSwitchCheckReverse">Ativo: <input type="checkbox" class="form-check-input" name="statusServico" id="statusServico" value="ATIVO" required></label>
                        <textarea id="textServico" name="textServico" class="form-control" placeholder="Insira o texto do serviço aqui." required></textarea>
                        <input type="text" name="linkServico" id="linkServico" class="form-control" placeholder="Link" required>
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

