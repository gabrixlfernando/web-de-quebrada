




<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$ok = 0;

//se a variavel email for inicializada "isset" de inicializada
if (isset($_POST['email'])) {
  //Load Composer's autoloader
  require 'mailer/Exception.php';
  require 'mailer/PHPMailer.php';
  require 'mailer/SMTP.php';

  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);

  try { //disparador de email outlook SMTP e POP
    //Server settings

    //coniguracao para disparar o email
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                    //Mostra todo o processo de envio Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.hostinger.com';                   //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication Se o servidor tem certificado de segurança
    $mail->Username   = 'webdequebrada@smpsistema.com.br';        //SMTP username Email que apenas para dispararar os emails
    $mail->Password   = 'Senac@agencia01';                     //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //Porta que esta sendo disparada o email, é interessante verificar na hospedagem no exemplo, a "hostinger" TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients Destinatário do email, quem receberá

    $mail->setFrom('webdequebrada@smpsistema.com.br', 'Web de Quebrada'); //quem dispara o email, envia o email e ao lado 'Site Agencia' é o assunto
    $mail->addAddress('webdequebrada@gmail.com');  // quem recebe o email, parecido com o "para" dos emails

    // $mail->addAddress('ellen@example.com');              
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name



    //Content

    // dados do email
    $nome = $_POST['nome']; //variaveis do '$' estao recebendo/capturando informacoes via POST
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $mens = $_POST['mens'];

    $mail->CharSet = 'UTF-8';
    $mail->isHTML(true); //Set email format to HTML
    $mail->Subject = 'Web de Quebrada'; //qual é o assunto
    $mail->Body    = "

        Nome: $nome <br>
        E-mail: $email <br>
        Telefone: $tel <br>
        Mensagem: $mens

      "; //body formato de email
    $mail->AltBody = "
      
      Nome: $nome <br>
      E-mail: $email <br>
      Telefone: $tel <br>
      Mensagem: $mens
      
      "; //Altbody também é o formato de email

    $mail->send(); //responsavel por disparar, enviar
    $ok = 1;
    // echo 'Mensagem enviada com SUCESSO!'; //se der certo, dispara essa mensagem
  } catch (Exception $e) { //mensagem de erro
    $ok = 2;
    // echo "Erro... Tente mais tarde: {$mail->ErrorInfo}";
  }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web de Quebrada</title>

    <link
      rel="shortcut icon"
      href="img/logos/favicon-01.svg" 
      type="image/x-icon"
    />
    
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



    <!--Css-->
    <link rel="stylesheet" href="css/reset.css" />
    <!--AOS-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/estilo.css" />
    <link rel="stylesheet" href="css/aos.css">
    <!--responsivo-->
    <link rel="stylesheet" href="css/responsivo.css" />
  </head>

  <body>
    
  <!--#region Topo-->
    <div class="topo-corpo">
      
    
      <?php require_once('includes/header.php');?>

      <div class="slogan-cont">
        <div class="slogan-words">
          <p>Criação de sites</p>
          <div class="words">
            <span>Modernos.</span>
            <span>Institucionais.</span>
            <span>Responsivos.</span>
            <span>Otimizados.</span>
            <span>Modernos.</span>
          </div>
          <div class="slogan-btn-cont">
            <button id="abrirFormBtn" class="slogan-btn">Contratar</button>
            <div id="formConteudo">
            <button type="button" id="fecharFormBtn">X</button>
            
              <form id="myForm" action="#" method="POST" class="form"> <!--Class form para a reuisição do ajax-->
              
              <img src="img/logos/logo-01.svg" alt="logo da Web de Quebrada">       

                <input type="text" id="nome" name="nome" placeholder="Seu nome:">
              
                <input type="email" id="email" name="email" required placeholder="Seu e-mail:">
          
                <input type="tel" id="tel" name="tel" placeholder="Seu número:">

                <textarea name="mens" id="mens" cols="30" rows="10" placeholder="Deixe sua mensagem:"></textarea>

                <input class="formBtn" type="submit" value="Enviar">

                <div class="mostrarform">
                 <?php
                    if ($ok == 1) {
                      echo "Mensagem Enviada! "; //o ponto serve para contratenar, misturar variável "$nome" com o texto "sua mensagem foi enviada com sucesso!!!"
                    }elseif ($ok == 2) {
                      echo "Erro ao enviar sua mensagem!";
                    }

                    ?>
                </div>

              </form>
            </div>
          </div>
        </div>
        <!-- <div><span class="digitando-efeito"></span></div> -->
      </div>
      <div id="arrowposition">
        <img id="arrowimg" src="img/arrow-top.svg" alt="">
      </div>
    </div>

  <!--#endregion Topo-->
    
    <main>
    <!--#region Servicos-->
    
      <!-- Serviços -->
      <section id="servicos">
        <div data-aos="fade-up" class="servicos-banner site posicionamento">
          <div>
            <img src="img/servico-banner-01.svg" alt="" />
            <h2>Sites Institucionais</h2>
            <p>
              Criamos sites que possuem a Alma e DNA da sua empresa, de forma
              única e desenhados exclusivamente para a sua marca. Tudo pensado
              por profissionais dedicados a entender e comunicar com
              assertividade para o seu público-alvo.
            </p>
            <button>
              <strong class="circle">
                <strong class="icon arrow"></strong>
              </strong>
              <strong class="text">Saiba mais</strong>
            </button>
          </div>
          <div>
            <img src="img/servico-banner-02.svg" alt="" />
            <h2>Sites Responsivos</h2>
            <p>
              Criamos sites com a última tecnologia disponível para sua
              segurança. Nossos projetos são baseados na tecnologia responsiva
              criando uma versão para cada dispositivo: celular, tablet e
              desktop.
            </p>
            <button>
              <strong class="circle">
                <strong class="icon arrow"></strong>
              </strong>
              <strong class="text">Saiba mais</strong>
            </button>
          </div>
          <div>
            <img src="img/servico-banner-03.svg" alt="" />
            <h2>Sites E-commerce</h2>
            <p>
              Criamos sites de lojas virtuais que permitem a venda de produtos
              ou serviços pela internet, incluindo integrações com meios de
              pagamento e sistemas de gestão.
            </p>
            <button>
              <strong class="circle">
                <strong class="icon arrow"></strong>
              </strong>
              <strong class="text">Saiba mais</strong>
            </button>
          </div>
        </div>
      </section>

      <!-- Serviços/responsivo/carrousel -->
      <section id="servicos-mobile">
        <div data-aos="fade-up" class="animate__backInUp servicosCarro servicos-mobile">
          <div class="servicos-card">
            <img src="img/servico-banner-01.svg" alt="" />
            <h2>Sites Institucionais</h2>
            <p>
              Criamos sites que possuem a Alma e DNA da sua empresa, de forma
              única e desenhados exclusivamente para a sua marca. Tudo pensado
              por profissionais dedicados a entender e comunicar com
              assertividade para o seu público-alvo.
            </p>         
          </div>
          <div class="servicos-card">
            <img src="img/servico-banner-02.svg" alt="" />
            <h2>Sites Responsivos</h2>
            <p>
              Criamos sites com a última tecnologia disponível para sua
              segurança. Nossos projetos são baseados na tecnologia responsiva
              criando uma versão para cada dispositivo: celular, tablet e
              desktop.
            </p>       
          </div>
          <div class="servicos-card">
            <img src="img/servico-banner-03.svg" alt="" />
            <h2>Sites E-commerce</h2>
            <p>
              Criamos sites de lojas virtuais que permitem a venda de produtos
              ou serviços pela internet, incluindo integrações com meios de
              pagamento e sistemas de gestão.
            </p>
          </div>
        </div>
      </section>

      <!--Serviços/Tabela-->
      <section id="servico" class="site">
        <div class="servicos">
          <div data-aos="fade-right" class="servicos-tabela-cont">
            <div data-aos="fade-right" class="servicos-titulo">
              <h2>Nossos <span>Serviços</span></h2>
              <p>Se liga no que a Web de quebrada tem para o seu negócio!</p>
            </div>
            <div class="servicos-tabela">
              <div class="tabela">
                <div class="aos-item" data-aos="fade-right">
                  <img
                    src="img/servico-icon-01.svg"
                    alt="Lista"
                    class="img-tabela-oficial"
                  />
                  <h3>Manutenção e Suporte</h3>
                  <p>
                    Oferecemos serviços de manutenção, atualização e suporte
                    técnico para garantir a continuidade e estabilidade do site
                    após sua criação.
                  </p>
                </div>

                <div class="aos-item" data-aos="fade-left">
                  <img
                    src="img/servico-icon-02.svg"
                    alt="Marketing"
                    class="img-tabela-oficial"
                  />
                  <h3>Marketing Digital</h3>
                  <p>
                    Orientação e suporte aos clientes em relação a estratégias
                    de marketing digital, e campanhas de anúncios online.
                  </p>
                </div>

                <div class="aos-item" data-aos="fade-right">
                  <img
                    src="img/servico-icon-03.svg"
                    alt="Estrelas"
                    class="img-tabela-oficial"
                  />
                  <h3>Tecnologia de ponta</h3>
                  <p>
                    Sites em WordPress; Joomla, Drupal e Tecnologias atuais com
                    atualizações de segurança e correção.
                  </p>
                </div>
              </div>
              <div class="tabela-btn">
                <a href="#" title="Botão de conferir">Confira</a>
              </div>
            </div>
          </div>
          <div data-aos="fade-left" class="servicos-img">
            <img src="img/servicos-img-01.png" alt="" />
          </div>
        </div>
      </section>

    <!--#endregion Servicos-->

    <!--#region Sobre-->

      <!-- Sobre -->
      <section id="sobre" class="site">
        <div  class="sobre site">
          <img data-aos="fade-right"src="img/sobre-img-01.png" alt="Reunião de pessoas em um escritório" />

          <div data-aos="fade-left" class="sobre-info">
            <h2>Um pouco <span>Sobre nós</span></h2>
            <p>
              A <b>Web de Quebrada</b> é uma agência de desenvolvimento web que
              cria sites institucionais e e-commerce. Fundada em 2023, por alunos da
              instituição de ensino <b>SENAC</b>, a agência se dedica a fornecer 
              soluções de alta qualidade para empresas de diversos segmentos, sempre 
              com um olhar atento às tendências e necessidades do mercado.
            </p>
            <a href="sobre.php" class="sobre-btn" title="Botão de Confira">Confira</a>
          </div>
        </div>
      </section>

    <!--#endregion Sobre-->

    <!--#region Portfolio-->

      <!--portfolio-->
      <section id="portfolio" data-aos="fade-up">
        <div class="portfolio-titulo">
          <h2>Conheça o nosso <span>Portfólio</span></h2>
          <p>Veja alguns de nossos projetos publicados</p>
        </div>

        <div class="portfolio-cont">
          <div class="portfolio">
            <div>
              <img class="portfolio-img" src="img/portfolio-img-1.png" alt="">
              <img class="portfolio-icon" src="img/portfolio-seta.svg" alt="" />
            </div>
            <div>
              <img class="portfolio-img" src="img/portfolio-img-2.png" alt="">
              <img class="portfolio-icon" src="img/portfolio-seta.svg" alt="" />
            </div>
            <div>
              <img class="portfolio-img" src="img/portfolio-img-3.png" alt="">
              <img class="portfolio-icon" src="img/portfolio-seta.svg" alt="" />
            </div>
            <div>
              <img class="portfolio-img" src="img/portfolio-img-4.png" alt="">
              <img class="portfolio-icon" src="img/portfolio-seta.svg" alt="" />
            </div>
          </div>
          
        </div>
      </section>

    <!--#endregion Portfolio-->

    <!--#region Avaliacoes-->

      <!--avaliaçoes-->
      <section data-aos="fade-up">
        <div class="site">
          <div class="clientes-cont">
            <div class="clientes-titulo">
              <h2>Nossos <span>Clientes</span></h2>
              <p>
                Veja alguns depoimentos de clientes satisfeitos com o serviço
                prestado.
              </p>
            </div>
            <div class="clientes clientesCarro">
              <div class="client">
                <img
                  src="img/cliente-perfil-01.svg"
                  class="cliente-perfil"
                  alt="foto de perfil de um cliente do site"
                />
                <h3>Nome</h3>            
                <p>
                  A empresa de desenvolvimento de sites foi incrível em criar um
                  site responsivo e de alta qualidade para a minha empresa.
                </p>
              </div>
              <div class="client">
                <img
                  src="img/cliente-perfil-02.svg"
                  class="cliente-perfil"
                  alt="foto de perfil de um cliente do site"
                />
                <h3>Nome</h3>      
                <p>
                  A empresa de desenvolvimento de sites foi incrível em criar um
                  site responsivo e de alta qualidade para a minha empresa.
                </p>
              </div>
              <div class="client">
                <img
                  src="img/cliente-perfil-03.svg"
                  class="cliente-perfil"
                  alt="foto de perfil de um cliente do site"
                />
                <h3>Nome</h3>  
                <p>
                  A empresa de desenvolvimento de sites foi incrível em criar um
                  site responsivo e de alta qualidade para a minha empresa.
                </p>
              </div>
              <div class="client">
                <img
                  src="img/cliente-perfil-04.svg"
                  class="cliente-perfil"
                  alt="foto de perfil de um cliente do site"
                />
                <h3>Nome</h3>            
                <p>
                  A empresa de desenvolvimento de sites foi incrível em criar um
                  site responsivo e de alta qualidade para a minha empresa.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

    <!--#endregion Avaliacoes-->

    <!--#region Mapa-->
      <section data-aos="fade-up">
        <div class="site">
          <div class="map-cont">
            <div class="map-titulo">
              <h2>Nossa <span>Localização</span></h2>
            </div>
            <div class="map-info">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.0254648901687!2d-46.43443702536073!3d-23.495592259177787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63dda7be6fb9%3A0xa74e7d5a53104311!2sSenac%20S%C3%A3o%20Miguel%20Paulista!5e0!3m2!1spt-BR!2sbr!4v1691176675465!5m2!1spt-BR!2sbr" width="100%" height="80%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div> 
          </div>
        </div>
      </section>
    <!--#endregion Mapa-->


    <!--#region Voltar-topo-->
      <!--botão/voltar/topo-->
      <a href="#" id="myLink" title="Voltar para o topo">
        <img class="seta-topo" src="img/seta-topo.svg" alt="">
      </a>
    <!--#endregion Voltar-topo-->
    </main>

  <!--#region Rodape-->

    <?php require_once('includes/footer.php');?>

  <!--#endregion Rodape-->

  <!--#region Script-->


    <!--pasta js-->

    <script src="./script/aos.js"></script>

    <!--SweetAlert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="./script/javascript.js"></script>

  <!--#endregion Script-->
  </body>
</html>
