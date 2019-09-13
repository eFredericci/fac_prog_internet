<?
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

global $email;

mail ("edu.fredericci@gmail.com","$assunto",
"Nome: $nome
Email: $email
Assunto: $assunto
Mensagem: $mensagem",
"From: $email"
);

echo "<p align=center>$nome! Sua mensagem foi enviada com sucesso!</p>";
echo "<p align=center>Em breve entraremos em contato.</p>";
?>