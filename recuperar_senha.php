<?php
// Conexão com o banco de dados
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'pet_care_db';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém o email enviado pelo formulário
    $email = isset($_POST['email']) ? $_POST['email'] : '';

    // Consulta o banco de dados para obter a senha correspondente ao email
    $sql = "SELECT senha FROM usuarios WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $senha = $row['senha'];
        echo "Sua senha é: " . $senha;
    } else {
        echo "Email não cadastrado.";
    }
}

$conn->close();
?>
