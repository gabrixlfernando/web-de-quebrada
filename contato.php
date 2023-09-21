











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
    $mail->addAddress('biel_nando2012@hotmail.com');  // quem recebe o email, parecido com o "para" dos emails

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

    // salvar dados contato no banco de dados


    require_once('admin/class/contato.php');

    $contato = new ContatoClass();
    $contato->nomeContato = $nome;
    $contato->emailContato = $email;
    $contato->numContato = $tel;
    $contato->mensContato = $mens;


  date_default_timezone_set('America/Sao_Paulo');
    $contato->dataContato = date('Y-m-d');
    $contato->horaContato = date('H:i:s');
    $contato->InserirContato();


    // FIM salvar dados contato no banco de dados



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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>

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
      
       <?php require_once('includes/header.php');?>

         <!--#endregion Topo-->
        <main>
         <section style="
         margin-top: 5%;
         margin-bottom: 5%;
         ">
          <div class="site">
           <div>      
               <form id="myForm" action="#" method="POST" class="form">
              
               <img class="logoForm" src="img/logos/logo-01.svg" alt="">       

                 <input type="text" id="nome" name="nome" required placeholder="Seu nome:">
              
                 <input type="email" id="email" name="email" required placeholder="Seu e-mail:">
          
                 <input type="tel" id="tel" name="tel" required placeholder="Seu número:">               

                 <textarea name="mens" id="mens" cols="30" rows="10" required placeholder="Deixe sua mensagem:"></textarea>

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
         </section>
         <section>
        <!--#region Mapa-->
         <section style="margin-bottom: 5%;">
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
        </main>

            <!--#region Voltar-topo-->
        <!--botão/voltar/topo-->
        <a href="#" id="myLink" title="Voltar para o topo">
            <img class="seta-topo" src="img/seta-topo.svg" alt="">
        </a>
        <!--#endregion Voltar-topo-->


    <!--#region Rodape-->

    <!--Rodapé-->
    
    <?php require_once('includes/footer.php');?>

    <!--#endregion Rodape-->

    <!--#region Script-->
    <!-- <script>
        document.getElementById("myForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Evita o envio padrão do formulário

            // Fazer a requisição AJAX para enviar os dados do formulário para o servidor
            const formData = new FormData(this);
            fetch("enviar_email.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Se o envio for bem-sucedido, exibir o alerta de sucesso
                    Swal.fire({
                        title: "Mensagem Enviada!",
                        text: "Sua mensagem foi enviada com sucesso!",
                        icon: "success",
                        confirmButtonColor: "#4caf50"
                    });
                } else {
                    // Se o envio falhar, exibir o alerta de erro
                    Swal.fire({
                        title: "Erro ao Enviar",
                        text: "Ocorreu um erro ao enviar sua mensagem. Tente novamente mais tarde.",
                        icon: "error",
                        confirmButtonColor: "#4caf50"
                    });
                }
            })
            .catch(error => {
                console.error("Erro na requisição AJAX:", error);
                // Em caso de erro na requisição, exibir um alerta de erro
                Swal.fire({
                    title: "Erro na Requisição",
                    text: "Ocorreu um erro na requisição. Tente novamente mais tarde.",
                    icon: "error",
                    confirmButtonColor: "#4caf50"
                });
            });
        });
    </script> -->
    <!--AOS js-->
    <script src="./script/aos.js"></script>

 

    <!--SweetAlert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="./script/javascript.js"></script>

    <!--#endregion Script-->
</body>
</html>