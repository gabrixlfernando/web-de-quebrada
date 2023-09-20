<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web de Quebrada</title>

    <link rel="shortcut icon" href="img/logos/favicon-01.svg" type="image/x-icon" />

    <!-- slick.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="shortcut icon" href="img/favicu.svg" type="image/x-icon">

    <!--Css-->
    <link rel="stylesheet" href="css/reset.css" />
    <!--AOS-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/estilo.css" />
    <!--responsivo-->
    <link rel="stylesheet" href="css/responsivo.css" />
    <link rel="stylesheet" href="css/sobreResponsivo.css">
    <link rel="stylesheet" href="css/sobre.css">
</head>
<?php require_once('conteudophp/topo.php'); ?>

<body>
    <!--Contém o menu e o banner-->

    <main>
        <section>
            <div class="pgSobre site">
                <h2>Sobre nós</h2>
                <div>
                    <div>
                        <h3>A agencia</h3>
                        <p>Lorem ipsum dolor sit amet,
                            consectetuer adipiscing elit, sed diam
                            nonummy nibh euismod tincidunt ut
                            laoreet dolore magna </p>
                    </div>
                    <div>
                        <h3>Missão</h3>
                        <p>Lorem ipsum dolor sit amet,
                            consectetuer adipiscing elit, sed diam
                            nonummy nibh euismod tincidunt ut
                            laoreet dolore magna </p>
                    </div>
                    <div>
                        <h3>Visão</h3>
                        <p>Lorem ipsum dolor sit amet,
                            consectetuer adipiscing elit, sed diam
                            nonummy nibh euismod tincidunt ut
                            laoreet dolore magna </p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="colaboradores">
                <div class="site">
                    <h2>Colaboradores</h2>
                </div>
                <div class="imgColaboradores">
                    <div class="bl-1">
                        <div class="img1"><img src="img/tiazinha.png" alt="imagem colavorador X">
                            <p>Kellinton</p>
                        </div>
                        <div class="img2"><img src="img/tiazinha.png" alt="imagem colavorador X">
                            <p>Samuel</p>
                        </div>
                    </div>

                    <div class="bl-2">
                        <div class="img3"><img src="img/tiazinha.png" alt="imagem colavorador X">
                            <p>Pedro</p>
                        </div>
                        <div class="img4"><img src="img/tiazinha.png" alt="imagem colavorador X">
                            <p>Kaue</p>
                        </div>
                    </div>
                </div>
        </section>

    </main>

    <!--Rodapé-->
    <?php require_once('conteudophp/rodape.php'); ?>
</body>
<!-- Efeito letra slogan -->
<!-- <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script>
      var typingeffect = new Typed(".digitando-efeito", {
        strings: ["sua presença online", "seu portfólio"],
        loop: true,
        typeSpeed: 150,
        backSpeed: 100,
        backDelay: 1500,
      });
    </script> -->

<!-- efeito animação divs -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!--slick-->
<!--pasta js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="./script/javascript.js"></script>


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