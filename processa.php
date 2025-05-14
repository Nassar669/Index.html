<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];

  // Dados do e-mail
  $para = "alexandre.nassar@escola.pr.gov.br"; // Substitua pelo seu e-mail
  $assunto = "Novo contato do site";

  $corpo = "Nome: $nome\n";
  $corpo .= "Email: $email\n";
  $corpo .= "Mensagem:\n$mensagem";

  // Use um e-mail válido do seu domínio se possível
  $headers = "From: no-reply@000webhostapp.com\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

  if (mail($para, $assunto, $corpo, $headers)) {
    echo "E-mail enviado com sucesso!";
  } else {
    echo "Erro ao enviar e-mail.";
  }
} else {
  echo "Método não permitido.";
}
?>