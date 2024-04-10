
<?php
    $pdo = new PDO('mysql:host=localhost;dbname=mensagem','root', '');
    $sql = $pdo->prepare('INSERT INTO `envios` VALUES (null, ?, ?, ?);');
    if (isset($_POST['enviar'])){
        $nome = $_POST['name']; 
        $email = $_POST['email']; 
        $mensagem = $_POST['message']; 
        $sql->execute(array($nome, $email, $mensagem));
        echo '<h1>Mensagem enviada</h1>';
    }

?>

