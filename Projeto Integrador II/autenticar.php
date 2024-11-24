<?php

session_start();

include "conecta.php";

$email = filter_input(INPUT_POST,"email");
$senha = filter_input(INPUT_POST,"senha");

$query = 
"SELECT nome_completo, email, senha FROM tb_cliente WHERE email = '$email' AND senha = '$senha' ";

$exec = $pdo->query($query);

if($exec->rowCount()){
    $result = $exec->fetch(PDO::FETCH_OBJ);
    $_SESSION['autenticado'] = true;
    $_SESSION['usuario'] = $result->nome_completo;
    header("Location:html/principal.php");
}
else{
    echo "<script>alert('Email e/ou senha incorretos!'); location='index.html'</script>";
}
