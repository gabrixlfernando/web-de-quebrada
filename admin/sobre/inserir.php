<?php

if (isset($_POST['tituloSobre'])) {


    require_once('class/Sobre.php');

    $tituloSobre = $_POST['tituloSobre'];
    $textSobre = $_POST['textSobre'];
    $statusSobre = $_POST['statusSobre'];



    $sobre = new SobreClass();

    $sobre->tituloSobre = $tituloSobre;
    $sobre->textSobre = $textSobre;
    $sobre->statusSobre = $statusSobre;


     $sobre->Inserir();

}


?>  


<div class="col-11">
    <div class="card card-info">

        <div class="card-header">
            <h2>Cadastro de Serviço</h2>
        </div>
        <form class="form-horizontal" action="index.php?p=sobre&sb=inserir" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="row">

                    <div class="col-8">
                        <input type="text" id="tituloSobre" name="tituloSobre" class="form-control" placeholder="Titulo" required>
                        <label class="form-check-label" for="flexSwitchCheckReverse">Ativo: <input type="checkbox" class="form-check-input" name="statusSobre" id="statusSobre" value="ATIVO" required></label>
                        <textarea id="textSobre" name="textSobre" class="form-control" placeholder="Insira o texto do sobre aqui." required></textarea>
                        <button type="submit" class="btn btn-dark">Inserir Sobre</button>

                    </div>

                </div>


        </form>

    </div>
</div>
</div>