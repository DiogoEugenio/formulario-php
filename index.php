<?php
    session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>FORMULARIO PARA OS COMPETIDORES</p>
    <form action="script.php" method="post">
    <?php
         $mensagemdesucesso = isset($_SESSION['mensagemdesucesso']) ? $_SESSION['mensagemdesucesso'] : '';
         if (!empty($mensagemdesucesso)) {
             echo $mensagemdesucesso;
             
         }  
        $mensagemdeerro = isset($_SESSION['mensagemdeerror']) ? $_SESSION['mensagemdeerror'] : '';
        if (!empty($mensagemdeerro)) {
            echo $mensagemdeerro;
        
        }  
    ?>
    <p>Seu Nome: <input type="text" name="nome"></p>
    <p>Sua idade: <input type="text" name="idade"></p>
    <p><input type="submit"></p>
    </form>
</body>
</html>