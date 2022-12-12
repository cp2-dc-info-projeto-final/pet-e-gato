<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';

function envia_email($para, $assunto, $mensagem){

    //Cria uma instância da classe PHPMailer; o parâmetro `true` habilita as exceções
    $mail = new PHPMailer(true);

    try {
        //Configurações do servidor
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                   //Habilita a saída de debug (para fase de testes)
        $mail->isSMTP();                                            //Define o envio por meio do SMTP
        $mail->Host       = 'smtp.gmail.com';                       //Define o servidor SMTP utilizado para o envio
        $mail->SMTPAuth   = true;                                   //Habilita a autenticação do SMTP
        $mail->Username   = 'petegatooficial1@gmail.com';               //usuário SMTP
        $mail->Password   = 'smduqsnzqkenrswr';                     //senha SMTP
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Habilita a encriptação implícita TLS
        $mail->Port       = 587;                                    //Porta TCP de conexão; use 587 se você tiver configurado `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        

        //Remetente e Destinatários
        $mail->setFrom('petegatooficial1@gmail.com', 'Pet & Gato House');  // Adiciona o remetente
        $mail->addAddress($para);                                       // Adiciona um destinatário
        // $mail->addAddress('ellen@example.com');                      // O nome é opcional
        // $mail->addReplyTo('info@example.com', 'Information');        // Adicona um endereço de resposta
        // $mail->addCC('cc@example.com');                              // Adiciona um e-mail de cópia
        // $mail->addBCC('bcc@example.com');                            // Adicona um e-mail de cópia oculta.

        //Anexos
        // $mail->addAttachment('/var/tmp/file.tar.gz');        //Adiciona um anexo
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');   //O nome é opcional

        //Conteúdo
        $mail->isHTML(true);                                    //Formata o e-mail com HTML
        $mail->Subject = $assunto;                              //Assunto do e-mail
        $mail->Body    = $mensagem;                             // Corpo do e-mail
        // $mail->AltBody = 'Texto sem tags HTML!';             //Opção de texto para provedores de e-mail que não lêem HTML.

        $mail->send();                                          // tenta enviar o e-mail
        return true;                                            // retorna verdadeiro se enviar corretamente.
    } catch (Exception $e) {
        echo "Erro: ".$e;
        return false;                                           // retorna falso se ocorrer uma falha no envio.
    }
}

?>