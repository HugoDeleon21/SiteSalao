<?php


include_once "conecta.php";


$nome = filter_input(INPUT_POST, "nome");
$email = filter_input(INPUT_POST, "email");
$telefone = filter_input(INPUT_POST, "telefone");
$senha = filter_input(INPUT_POST, "senha");
$genero = filter_input(INPUT_POST, "genero");
$data_nascimento = filter_input(INPUT_POST, "data_nascimento");


$query = "INSERT INTO
tb_cliente(
    nome_completo,
    email,
    telefone,
    senha,
    genero,
    data_nascimento)
VALUES('$nome', '$email', '$telefone', '$senha', '$genero', '$data_nascimento')"; 


$exec = $pdo->query($query);

if($exec){
    echo "<script> alert('Cliente foi cadastrado!'); location='index.html'</script>"
}