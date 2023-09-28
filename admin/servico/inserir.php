<div class="col-11">
    <div class="card card-info">

        <div class="card-header">
            <h2>Cadastro de Serviço</h2>
        </div>
        <form class="form-horizontal" action="processar_formulario.php" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <label for="imagem">Imagem: <img src="img/1695213.png" alt=""></label>

                        <input type="file" oninput="pic.src=window.URL.createObjectURL(this.files[0])" id="imagem" name="imagem" accept="image/*" required>
                        <img id="pic"/>
                    </div>

                    <div class="col-8">
                        <input type="text" id="titulo" name="titulo" class="form-control" placeholder="Titulo" required>
                        <label class="form-check-label" for="flexSwitchCheckReverse">Ativo: <input type="checkbox" class="form-check-input" id="flexSwitchCheckReverse" id="ativo" name="ativo" value="1" checked></label>
                        <textarea id="texto" name="texto" class="form-control" placeholder="Insira o texto do serviço aqui." required></textarea>
                        <input type="text" name="link" id="link" class="form-control" placeholder="Link">
                        <input type="submit" value="Inserir Serviço" class="btn btn-dark">

                    </div>

                </div>


        </form>

    </div>
</div>
</div>