<?php

$id = $_GET['id'];
require_once('class/sobre.php');

$sobre = new SobreClass($id);


if (isset($_POST['tituloSobre'])) {
    

    $tituloSobre = $_POST['tituloSobre'];
    $textSobre = $_POST['textSobre'];
    $statusSobre = $_POST['statusSobre'];

   

    $sobre->tituloSobre = $tituloSobre;
    $sobre->textSobre = $textSobre;
    $sobre->statusSobre = $statusSobre;


     $sobre->Atualizar();

}



?>  


<div class="col-11">
    <div class="card card-info">

        <div class="card-header">
            <h2>Atualizar Sobre</h2>
        </div>
        <form class="form-horizontal" action="index.php?p=sobre&sb=atualizar&id=<?php echo $sobre->idSobre?>" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="row">

                    <div class="col-8">
                        <input type="text" id="tituloSobre" name="tituloSobre" class="form-control" placeholder="Titulo" required value="<?php echo $sobre->tituloSobre?>">
                        <label class="form-check-label" for="flexSwitchCheckReverse">Ativo: <input type="checkbox" class="form-check-input" name="statusSobre" id="statusSobre" required value="<?php echo $sobre->statusSobre?>" ></label>
                        <textarea id="textSobre" name="textSobre" class="form-control" placeholder="Insira o texto do sobre aqui." ><?php echo $sobre->textSobre?></textarea>
                        <button type="submit" class="btn btn-dark">Atualizar Sobre</button>

                    </div>

                </div>


        </form>

    </div>
</div>
</div>