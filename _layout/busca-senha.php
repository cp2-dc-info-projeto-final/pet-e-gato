
<?php
    include_once 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação de Senha</title>
</head>
<body>
    <?php
        if(isset($_POST)){
            $email = $_POST['email'];
            $query = "SELECT senha FROM clientes WHERE email = '".$email."' ORDER BY id DESC LIMIT 1";
            $consulta_senha = mysqli_query($mysqli, $query);
            $row = $consulta_senha -> fetch_row();

            if(empty($row)){
                echo 'Email não cadastrado';
            }else{
                $consulta_senha = mysqli_query($mysqli, $query);
                while($linha = mysqli_fetch_array($consulta_senha)){
                    echo '<p>Sua senha é: ' . $linha['senha'] . '</p>';
                }
            }
        }
    ?>
</body>
</html>