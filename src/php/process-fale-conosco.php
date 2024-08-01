<?php
// process_fale_conosco.php
require_once __DIR__ . '/connect.php';
require_once __DIR__ . '/mensagem.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    $sql = "INSERT INTO fale_conosco (email, telefone, mensagem) 
    VALUES (:email, :telefone, :mensagem)";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':mensagem', $mensagem);

    $sucesso = $stmt->execute();

    if ($sucesso) {
        adicionaMensagemFlash('sucesso', 'Sua mensagem foi enviada com sucesso!');
    } else {
        adicionaMensagemFlash('erro', "Desculpe, não foi possível enviar sua mensagem...");
    }

    // redireciona para a página inicial
    header('Location: /');
}
