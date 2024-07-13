<?php
// connect.php
$dsn = 'mysql:host=localhost;dbname=alternativa_autolocadora';
$username = 'root';
$password = 'root';
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
);

try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    die('Falha na conexão: ' . $e->getMessage());
}
?>