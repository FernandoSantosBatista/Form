<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Resposta</title>

    <body>
    
        <?php
        
        require_once('conexao.php');

        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $endereco = $_POST["endereco"];
        $numero = $_POST["numero"];
        $complemento = $_POST["complemento"];
        $bairro = $_POST["bairro"];
        $cep = $_POST["cep"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $email = $_POST["email"];
        $contato = $_POST["contato"];


        $bancodados = new db();

        $link = $bancodados -> conecta_mysql();
        
        $sql = "insert into usuarios(nome, sobrenome, endereco, numero, complemento, bairro, cep, cidade, estado,  email, contato) values('$nome','$sobrenome','$endereco','$numero','$complemento','$bairro', '$cep', '$cidade','$estado', '$email', '$contato')";

        mysqli_query($link, $sql);        
        
       
        
        ?>

    </body>
   
</head>
</html>

