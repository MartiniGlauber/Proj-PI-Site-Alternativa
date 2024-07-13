<?php
// process_fale_conosco.php
include 'connect.php';

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

    if ($stmt->execute()) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem.";
    }
}
?>