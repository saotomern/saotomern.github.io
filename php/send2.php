<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "bergdantas@msn.com"; // Endereço de email de destino
    $subject = "Formulário de Contato"; // Assunto do email

    // Campos do formulário
    $name = $_POST['name'];
    $email = $_POST['email'];
    $telefone = $_POST['Telefone'];
    $matricula = $_POST['matricula'];
    $cargo = $_POST['cargo'];
    $cpf = $_POST['cpf'];
    $destino = $_POST['destino'];
    $dataI = $_POST['dataI'];
    $dataF = $_POST['dataF'];
    $objetivo = $_POST['objetivo'];
    $valorDiaria = $_POST['valorDiaria'];
    $quantidadeDiaria = $_POST['quantidadeDiaria'];
    $banco = $_POST['banco'];
    $agencia = $_POST['agencia'];
    $conta = $_POST['conta'];

    // Mensagem do email
    $message = "
    Nome: $name\n
    Email: $email\n
    Telefone: $telefone\n
    Matrícula: $matricula\n
    Cargo: $cargo\n
    CPF: $cpf\n
    Destino da viagem: $destino\n
    Data inicial: $dataI\n
    Data final: $dataF\n
    Objetivo da viagem: $objetivo\n
    Valor da diária: $valorDiaria\n
    Quantidade de diárias: $quantidadeDiaria\n
    Banco: $banco\n
    Agência bancária: $agencia\n
    Conta corrente: $conta\n
    ";

    // Envia o email
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email enviado com sucesso!";
    } else {
        echo "Falha ao enviar o email. Por favor, tente novamente.";
    }
} else {
    echo "Erro: Este script PHP deve ser chamado via método POST.";
}
?>
