<?php
require_once('classe/projeto.php');
require_once('conexao/conexao.php');

$database = new conexao ();
$db = $database -> getConnection();
$projeto = new projeto($db);

if(isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confSenha = $_POST['confSenha'];

    $limiteS = 8;

        if (strlen($senha) >= $limiteS) {
            if($projeto->cadastrar($nome,$email,$senha,$confSenha)){
                print "<script>alert('Cadastro efetuado com sucesso!')</script>";
            }else{
                print "";
            }
        }else {
            print "<script>alert('A senha deve ter no mínimo 8 caracteres')</script>";
            
        }
     }
          
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projeto</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>
    <form action="" method = "POST">
    <img
            src="play na cozinha.jpg"
            width="100"
            height="100"/>
    
    <h1>faça seu cadastro</h1>
        <label for ="">Nome de projeto</label>
        <input type="text" name="nome" placeholder="Nome a sua esolha">

        <label for="">Email</label>
         <input type="email" name="email" placeholder="coloque um email">

         <label for ="senha">Crie uma senha</label>
         <input type="password" name="senha" maxlength="8" >

         <label for ="">Confirme sua senha</label>
         <input type="password" name="confSenha" maxlength="8" >

         <button tupe="submit" name="cadastrar">Cadastrar</button>
</form>
<a href="index.php">Voltar para a tela login</a>

</body>
</html>