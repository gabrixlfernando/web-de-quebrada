<?php
    require_once('class/dashboard.php');
    $qtdDash        = new DashClass();
    $qtdServico     = $qtdDash->QtdServico();
    $qtdSobre        = $qtdDash->QtdSobre();
    $qtdContato     = $qtdDash->QtdContato();
    $qtdPortifolio     = $qtdDash->QtdPortifolio();
    $qtdAvaliacao     = $qtdDash->QtdAvaliacao();
    $qtdBanner     = $qtdDash->QtdBanner();
?>

<style>

.dashboard {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.dashboard-card {
    flex: 1;
    min-width: 0;
    
}

.card-body{
    text-align: center;
    background: #000;
    color: #fff;
}

.card-body h6{
    font-size: 4em;
   font-weight: bold;
}

a{
    text-decoration: none;
    color: #fff;
}

</style>


<div class="container-fluid">
    <div class="dashboard">
        <div class="dashboard-card">
            <div class="card">
                <div class="card-body">
                    <a href="index.php?p=servico"><h5 class="card-title">Serviços</h5>
                    <h6><?php echo $qtdServico['idServico']; ?></h6></a>
                </div>
            </div>
        </div>
        <div class="dashboard-card">
            <div class="card">
                <div class="card-body">
                    <a href="index.php?p=sobre"><h5 class="card-title">Sobre</h5>
                    <h6><?php echo $qtdSobre['idSobre']; ?></h6></a>
                </div>
            </div>
        </div>
        <div class="dashboard-card">
            <div class="card">
                <div class="card-body">
                    <a href="index.php?p=contato"><h5 class="card-title">Contato</h5>
                    <h6><?php echo $qtdContato['idContato']; ?></h6></a>
                </div>
            </div>
        </div>
        <div class="dashboard-card">
            <div class="card">
                <div class="card-body">
                    <a href="index.php?p=portifolio"><h5 class="card-title">Portifólio</h5>
                    <h6><?php echo $qtdPortifolio['idPortifolio']; ?></h6></a>
                </div>
            </div>
        </div>
        <div class="dashboard-card">
            <div class="card">
                <div class="card-body">
                    <a href="index.php?p=avaliacoes"><h5 class="card-title">Avaliações</h5>
                    <h6><?php echo $qtdAvaliacao['idAvaliacao']; ?></h6></a>
                </div>
            </div>
        </div>
        <div class="dashboard-card">
            <div class="card">
                <div class="card-body">
                    <a href="index.php?p=banner"><h5 class="card-title">Banner</h5>
                    <h6><?php echo $qtdBanner['idBanner']; ?></h6></a>
                </div>
            </div>
        </div>
    </div>
</div>








