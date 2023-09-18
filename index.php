<!DOCTYPE html>
<?php
session_start();

require_once('classe/projeto.php');
require_once('conexao/conexao.php');

$database = new conexao();
$db = $database->getconnection();
$projeto = new projeto($db);

if (isset ($_POST['logar'])){
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];


if ($projeto->logar($nome,$senha)){
    $_SESSION ['nome'] = $nome;

    header ("Location: dashboard.php");
    exit();
}else{
    print "<srcipt>alert('Seu login deu invalido')</script>";
}
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>
    <form class="login"; method="POST">
    <div class="form-container">
            <img
            src="play na cozinha.jpg"
            width="90"
            height="90"/>

    <h1>Login</h1>
    <form action="#">
        <label for ="nome">Nome</label>
        <input type="text" name="nome" placeholder="Coloque seu nome">
        <label for="senha">Senha</label>
         <input type="password" name="senha" placeholder="coloque sua senha">

         <button tupe="submit" name="logar">Logar</button > 
</form>
    <a href="cadastrar.php">Criar uma conta</a>


</body>
</html>