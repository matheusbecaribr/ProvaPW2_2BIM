<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>
    <title>Home</title>
</head>
<body>
    <header>
        <h2>PROVA RODOLFÃO</h2>
        <ul>
            <a href="#">Login</a>
        </ul>
    </header>
    <nav>
        <section>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" pleaceholder="Digite seu nome aqui">
        </section>
        <section>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" pleaceholder="Digite seu email aqui">
        </section>
        <button class="submit btn-primary" href="#">Cadastrar</button>
    </nav>
</body>
</html>
<?php
        if($_POST){
            $sql = 'INSERT INTO usuario (nome,email) VALUES ("'.$_POST['nome'].'","'.$_POST['email'].'")';
            $resultado = $con->query($sql);
            if($resultado){
                msg("Cadastrado com sucesso");
                msg("Já pode entrar! =)");
            }else{
                msg("Erro ao cadastrar, tente novamente!");
            }
        }
?>