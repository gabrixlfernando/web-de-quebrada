<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio</title>

    <link
      rel="shortcut icon"
      href="img/logos/favicon-01.svg"
      type="image/x-icon"
    />

    <!-- efeito animação divs -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!--Jquery, efeito do botao topo-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- slick.js -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
      integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
      integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
      integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
      integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!--Fontawesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

  <link rel="shortcut icon" href="img/favicu.svg" type="image/x-icon">
    <!--Css-->
    <link rel="stylesheet" href="css/reset.css" />
    <!--AOS-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/estilo.css" />
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/portifolio.css">
    <link rel="stylesheet" href="css/portifolioResponsivo.css">

    <!--responsivo-->
    <link rel="stylesheet" href="css/responsivo.css" />
</head>
<body>
    
       <!--#region Topo-->
  <?php require_once('conteudophp/topo.php'); ?>
      
         <!--#endregion Topo-->
         
        <main>

             <section >       
      
              <div class="port-cont">
                <div class="port-titulo">
                  <h2><span>Portfólio</span></h2>
                  <p>Cada projeto representa nossa dedicação em fornecer 
                    soluções de alta qualidade e ajudar nossos clientes a 
                    alcançarem sucesso online.</p>
                </div>

                <div data-aos="fade-up"class="port">
                  <div>
                    <h3>Cliente</h3>
                  </div>
                  <div>
                    <h3>Cliente</h3>
                  </div>
                  <div>
                    <h3>Cliente</h3>
                  </div>              
                </div>

                <div data-aos="fade-up" class="port">
                  <div>
                    <h3>Cliente</h3>
                  </div>
                  <div>
                    <h3>Cliente</h3>
                  </div>
                  <div>
                    <h3>Cliente</h3>
                  </div>              
                </div>

                <div data-aos="fade-up" class="port">
                  <div>
                    <h3>Cliente</h3>
                  </div>
                  <div>
                    <h3>Cliente</h3>
                  </div>
                  <div>
                    <h3>Cliente</h3>
                  </div>              
                </div>

                <div data-aos="fade-up" class="port">
                  <div>
                    <h3>Cliente</h3>
                  </div>
                  <div>
                    <h3>Cliente</h3>
                  </div>
                  <div>
                    <h3>Cliente</h3>
                  </div>              
                </div>

                

              </div>
              
            </section>

            <!--#region Voltar-topo-->
        <!--botão/voltar/topo-->
        <a href="#" id="myLink" title="Voltar para o topo">
            <img class="seta-topo" src="img/seta-topo.svg" alt="">
        </a>
        <!--#endregion Voltar-topo-->
        </main>

    <!--#region Rodape-->

    <!--Rodapé-->
    
    <?php require_once('conteudophp/rodape.php');?>

    <!--#endregion Rodape-->

    <!--#region Script-->

    <!--pasta js-->
    <script src="./script/aos.js"></script>
    <script src="./script/javascript.js"></script>

    <!--#endregion Script-->
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
</body>
</html>