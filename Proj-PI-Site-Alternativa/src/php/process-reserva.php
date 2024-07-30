<?php
// process_reserva.php
require 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $local_retirada = $_POST['selecaoLocal'];
    $modelo_carro = $_POST['selecaoCarro'];
    $checkin_data = $_POST['checkin_data'];
    $checkin_hora = $_POST['checkin_hora'];
    $checkout_data = $_POST['checkout_data'];
    $checkout_hora = $_POST['checkout_hora'];

    $sql = "INSERT INTO reservas (local_retirada, modelo_carro, checkin_data, checkin_hora, checkout_data, checkout_hora) 
    VALUES (:local_retirada, :modelo_carro, :checkin_data, :checkin_hora, :checkout_data, :checkout_hora)";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':local_retirada', $local_retirada);
    $stmt->bindParam(':modelo_carro', $modelo_carro);
    $stmt->bindParam(':checkin_data', $checkin_data);
    $stmt->bindParam(':checkin_hora', $checkin_hora);
    $stmt->bindParam(':checkout_data', $checkout_data);
    $stmt->bindParam(':checkout_hora', $checkout_hora);

    if ($stmt->execute()) {
        echo "Reserva registrada com sucesso!";
    } else {
        echo "Erro ao registrar a reserva.";
    }
    
}
?>