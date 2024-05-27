<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber o nome do formulário
    $nome = $_POST['nome'];

    // Adicionar o nome ao arquivo de confirmações
    $file = 'confirmados.txt';
    file_put_contents($file, $nome . PHP_EOL, FILE_APPEND);

    // Redirecionar de volta para a página inicial
    header("Location: index.html");
    exit;
}
?>
