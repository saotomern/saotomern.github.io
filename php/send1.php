<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Defina o destinatário do e-mail
    $to = "bergdantas@msn.com";

    // Capturar os dados do formulário
    $protocolo = $_POST['protocolo'];
    $nome = $_POST['nome'];
    $matricula = $_POST['mat'];
    $cargo = $_POST['cargo'];
    $cpf = $_POST['cpf'];
    $destino = $_POST['destino'];
    $partida = $_POST['dataInicial'];
    $retorno = $_POST['retorno'];
    $email = $_POST['email'];

    // Construir a mensagem do e-mail
    $subject = "Formulário de Viagem - Número de Protocolo: $protocolo";
    $message = "Nome: $nome\n";
    $message .= "Matrícula: $matricula\n";
    $message .= "Cargo: $cargo\n";
    $message .= "CPF: $cpf\n";
    $message .= "Destino: $destino\n";
    $message .= "Partida: $partida\n";
    $message .= "Retorno: $retorno\n";
    $message .= "Email: $email\n";

    // Definir cabeçalhos do e-mail
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Enviar o e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Erro ao enviar o e-mail. Por favor, tente novamente mais tarde.";
    }
} else {
    // Se alguém tentar acessar diretamente o arquivo PHP sem enviar o formulário, exibir mensagem de erro
    echo "Este arquivo não deve ser acessado diretamente.";
}
?>

