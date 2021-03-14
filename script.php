<?php
session_start();    
$categoria = [];
$categoria[] = "infantil";
$categoria[] = "adolecente";
$categoria[] = "Adulto";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if (empty($nome)) {
    $_SESSION["mensagemdeerror"] = ' O nome não pode ser vazio';
    header('location: index.php'); 
    return;
}


else if (strlen($nome) <3 ) {
    $_SESSION["mensagemdeerror"] = 'O nome não deve aver menos de 3 caractere';
    header('location: index.php');
    return;

}
else if (strlen($nome) > 40 ) {
    $_SESSION["mensagemdeerror"] = 'nome muito extenso.';
    header('location: index.php');
    return;

}
else if (!is_numeric($idade)) {
    $_SESSION["mensagemdeerror"] = 'Erro idade não valida.';
    header('location: index.php');
    return;
}
//empty Define sem a um produto de variavel.
//strlen define quantos caracteries tem uma varialvel.

if ($idade >= 6 && $idade <= 12) 
{
    for ($i=0; $i < count($categoria); $i++) 
      if ($categoria[$i] == "infantil") 
      {
        $_SESSION["mensagemdesucesso"] = "O Nadador ". $nome." compete na categoria: INFANTIL";
        header('location: index.php'); 
        return;
      }

}
else if($idade >= 13 && $idade <= 18) 
{
    for ($i=0; $i < count($categoria); $i++) 
        if ($categoria[$i] == "adolecente") 
        {
            $_SESSION["mensagemdesucesso"] =  "O Nadador ".$nome." compete na categoria: ADOLECENTE";
        header('location: index.php'); 
        return;   
        }
}
else{

    for ($i=0; $i < count($categoria); $i++) 
        if ($categoria[$i] == "Adulto")
        {
            $_SESSION["mensagemdesucesso"] =  "O Nadador ".$nome." compete na categoria: ADULTO";
        header('location: index.php'); 
        return;   
        } 
}
