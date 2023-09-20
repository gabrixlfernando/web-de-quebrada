<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Web de Quebrada</title>

  <link rel="shortcut icon" href="img/logos/favicon-01.svg" type="image/x-icon" />

  <!-- animações -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/reset.css" />
  <!--AOS.animate-->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <!---css+reset-->
  <link rel="stylesheet" href="css/estilo.css" />
  <link rel="stylesheet" href="css/aos.css">
  <!--responsivo-->
  <link rel="stylesheet" href="css/responsivo.css" />
  <link rel="shortcut icon" href="img/favicu.svg" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body id="dark">
  <!-----------Topo---------->
  <?php require_once('conteudophp/topo.php'); ?>
  <!-----------banner---------->
  <?php require_once('conteudophp/banner.php'); ?>
  <main>
    <!-----------servico começo---------->
    <?php require_once('conteudophp/servico-banner.php'); ?>
    <!-----------meu serv começo---------->
    <?php require_once('conteudophp/meu-serv.php'); ?>
    <!-----------sobre começo---------->
    <?php require_once('conteudophp/sobre.php'); ?>
    <!-----------portifolio começo---------->
    <?php require_once('conteudophp/portifolio.php'); ?>

    <!-----------avaloação dos clientes---------->
    <?php require_once('conteudophp/avaliacao.php'); ?>

    <!-----------modal de volta ao topo--------->
    <a role="link" href="#" id="myLink" title="Voltar para o topo">
      <img class="seta-topo" src="img/seta-topo.svg" alt="seta apontando para cima">
    </a>
    <!-----------modal de volta ao topo--------->
  </main>
  <footer>
    <?php require_once('conteudophp/rodape.php'); ?>
  </footer>

  <!-----------rodape fim--------->

  <!-----------Aqui começamos os javascript--------->

  <!--pasta js-->
  <script src="./script/aos.js"></script>
  <script src="./script/animacoes.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


  <!--------------------->
  <!--btn dark mode desktop-->
  <!--------------------->
</body>

<script>
  var btn1 = document.querySelector('.btn1');
  var dark1 = document.querySelector('#dark');
  btn1.onclick = function() {
    console.log('ola mundo')
    this.classList.toggle('active');
    dark1.classList.toggle('active');
  }

  var btn2 = document.querySelector('.but2');
  var dark2 = document.querySelector('#dark');
  btn2.onclick = function() {
    console.log('ola mundo')
    this.classList.toggle('active');
    dark2.classList.toggle('active');
  }
</script>

</html>