<?php
// Receber os dados do formulário //

$nm_paciente = $_POST['nm_paciente'];
$idade = $_POST['idade'];
$dt_nascimento = $_POST['dt_nascimento'];

// Incluir a conexão //

include 'conexao.php';


// Instrução de Insert //

$insert = "INSERT INTO tb_paciente VALUE (NULL, '$nm_paciente', '$idade', '$dt_nascimento')";



// Utilizar uma função do PHP para executar o comando da variável Insert //

$resultado = $conexao->query($insert);

if ($resultado) {
    echo "<script>alert('Cadastrado com Sucesso!!'); history.back();<script>";
}



?>