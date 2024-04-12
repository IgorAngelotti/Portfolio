
<?php
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=mensagem','root', '');
        $sql = $pdo->prepare('INSERT INTO `envios` VALUES (null, ?, ?, ?);');
        if (isset($_POST['enviar'])){
            $nome = $_POST['name']; 
            $email = $_POST['email']; 
            $mensagem = $_POST['message']; 
            $sql->execute(array($nome, $email, $mensagem));
            echo '<h1>Mensagem enviada</h1>';?>

            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Mensagem enviada!</title>
                <style>
                    button{
                        transition-duration: 0.15s;
                        outline: none;
                        cursor: pointer;
                    }

                    button:hover{
                        background-color: darkgrey;
                    }
                </style>
            </head>
            <body>
                <a href="index.html"><button>Clique aqui para voltar</button></a>
                <h3>Voltando automaticamente em 3 segundos.</h3>
            </body>
            </html>    
        <?php

        }
    }catch (Exception $e){
        echo'banco nao localizado.';

    }

?>

<script>
    setTimeout(function(){
        window.location.href = "index.html";
    }, 3000);

</script>
